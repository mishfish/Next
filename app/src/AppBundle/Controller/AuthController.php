<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\User;
use AppBundle\Form\RegistryForm;
use AppBundle\Form\LoginForm;

class AuthController extends Controller
{
    /**
     * @Route("/register", name="auth_register")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $member = new User();
        $form = $this->createForm(RegistryForm::class, $member);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $memberRepository = $em->getRepository('AppBundle:User');
            // $member = $memberRepository->find($member->getReferralId()); 
            $member = $memberRepository->findOneBy(['referralId' => $member->getReferralId()]);
            if (is_null($member)) 
            {
                throw $this->createNotFoundException('Такой реферральной ссылки не существует');
            } else 
            {
                $userExists = $memberRepository->checkIfUserIsExist($member->getReferralId());
                if ($userExists) 
                {
                    throw $this->createNotFoundException('Такая реферральная ссылка уже используется');
                }
                $info = $form->getData();
                
                $member->setLogin($info->getLogin());
                $member->setNickName($info->getNickName());
                // 3) Encode the password (you could also do this via Doctrine listener)
                $password = $passwordEncoder->encodePassword($member, $info->getPassword());
                $member->setPassword($password);
                $member->setEnabled(true);

                // 4) save the User!
                $em->persist($member);
                $em->flush();
            }
            $this->addFlash('success', 'Вы успешно зарегистрировались! Можете войти, используя логин и пароль.');
            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'AppBundle:Auth:register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/login", name="auth_login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
         // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();
    
        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        $form = $this->createForm(LoginForm::Class, [
            '_username' => $lastUsername
        ]);

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        { 
            // redirect authenticated users to homepage 
            return $this->redirect($this->generateUrl('homepage')); 
        } 

        return $this->render('AppBundle:Auth:login.html.twig', array(
            'form' => $form->createView(),
            'error'         => $error,
        ));
    }

    /**
     * @Route("/logout", name="auth_logout")
     */
    public function logoutAction(Request $request)
    {
        throw new \Exception('this should not be reached');
    }
    
}