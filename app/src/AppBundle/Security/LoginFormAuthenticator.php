<?php

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationEsception;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use AppBundle\Form\LoginForm;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{
    use TargetPathTrait;
    private $formFactory;
    private $em;
    private $router;
    private $passwordEncoder;

    public function __construct(
        FormFactoryInterface $formFactory, 
        EntityManagerInterface $em, 
        RouterInterface $router,
        UserPasswordEncoderInterface $passwordEncoder
        )
    {
        $this->formFactory = $formFactory;
        $this->em = $em;
        $this->router = $router;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function getCredentials(Request $request) 
    {
        $isLoginSubmit = $request->getPathInfo() == '/login' && $request->isMethod('POST');


        // if($isLoginSubmit)
        // {
        //     $req = $request->request->get('login_form');
        //     return [
        //         '_username' => $req['_username'],
        //         '_password' => $req['_password'],
        //     ];
        // }
        
        

        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);
        
        
        if($isLoginSubmit)
        {
            $data = $form->getData();

            $request->getSession()->set(
                Security::LAST_USERNAME,
                $data['_username']
            );
            return $data;
        }

        if(!$isLoginSubmit) 
        {
            return;
        }
    }

    public function getUser($credentials, UserProviderInterface $userProvider) 
    {
        $username = $credentials['_username'];

        return $this->em->getRepository('AppBundle:User')
            ->findOneBy(['login' => $username]);
    }

    public function checkCredentials($credentials, UserInterface $user) 
    {
        $password = $credentials['_password'];
        $isPasswordValid = $this->passwordEncoder->isPasswordValid($user, $password);

        if($isPasswordValid) 
        {
            return true;
        }

        return false;
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('auth_login');
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        $response = new RedirectResponse($this->router->generate('homepage'));
        return $response;
    }

    public function supportsRememberMe()
    {
        return true;
    }
}