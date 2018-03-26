<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\NextNews;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\View\View;

class NewsController extends FOSRestController
{
    /**
    * @Rest\Post("/api/mail")
    */
   public function postAction(\Swift_Mailer $mailer)
   {
    //  $restresult = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
    //    if ($restresult === null) {
    //      return new View("there are no users exist", Response::HTTP_NOT_FOUND);
    // }
    // // return $this->json($restresult);
    // Create the email and send the message

    $message = (new \Swift_Message('Hello Email'))
    ->setFrom('send@example.com')
    ->setTo('nick.whatsoever@gmail.com')
    ->setBody(
        $this->renderView(
            'Email/ex.html.twig'
        ),
        'text/html'
    );
    $this->get('mailer')->send($message);
    // $mailer->send($message);

    // $to = 'nick.whatsoever@gmail.com'; 
    // $email_subject = "Некст";
    // $email_body = "Итак, Николай";
    // $headers = "From: noreply@kvestidea.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    // $headers .= "Reply-To: nick.whatsoever@gmail.com";	
    // mail($to,$email_subject,$email_body,$headers);
    return $this->redirectToRoute('homepage');
   }

    /**
    * @Rest\Get("/api/mail")
    */
    public function getAction()
    {
        return $this->redirectToRoute('homepage2', array('slug'=>'calendar'));
    }


    /**
     * @Route("/", name="homepage")
     * @Route("/{slug}", name="homepage2")
     */
    public function indexAction(Request $request, $slug = null)
    {
        // return $this->render('AppBundle:News:index.html.twig', array(
        //     'test' => 'test'
        // ));

        return $this->render('AppBundle:News:index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

}
