<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\NextNews;
use AppBundle\Extensions\NimrodImageResizer;

class NewsController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:NextNews a ORDER BY a.creationDate DESC";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, 
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        return $this->render('AppBundle:News:index.html.twig', array(
            'pagination' => $pagination
        ));
    }

    /**
    * @Route("/news/create", name="news_create")
    */
    public function createAction(Request $request, NimrodImageResizer $resizeImg)
    {   
        // TEST IMAGE RESIZE
              //indicate which file to resize (can be any type jpg/png/gif/etc...)
        // $file = 'images/news/1.jpg';
        
        //indicate the path and name for the new resized file
        // $resizedFile = 'images/news/1-1.jpg';
        
        //call the function (when passing path to pic)
        // $resizeImg->smart_resize_image($file , null, 100 , 100 , false , $resizedFile , false , false ,100 );
        
        $post = new NextNews();
        $form = $this->createForm('AppBundle\Form\NewsForm', $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user= $this->get('security.token_storage')->getToken()->getUser(); // get the current user
            $post->setAuthor($user); // set the current user
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            if (is_null($post->getRelativeUrl())) $post->setRelativeUrl($post->getId());
            $em->flush();
            
            return $this->redirectToRoute('news_show', array('relativeUrl' => $post->getRelativeUrl()));
        }
        
        return $this->render('AppBundle:News:create.html.twig', array(
            'post' => $post,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/news/{relativeUrl}", name="news_show")
     */
     public function showAction($relativeUrl)
     {
         $item = $this->getDoctrine()
             ->getRepository('AppBundle:NextNews')
            // ->find($relativeUrl);
             ->findOneBy(['relativeUrl' => $relativeUrl]);
         return $this->render('AppBundle:News:show.html.twig', array(
             'item' => $item
         ));
     }


}
