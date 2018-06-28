<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends Controller
{

    /**
     * @Route("/", name="homepage")
     * @Route("/{slug}", name="homepage2")
     *
     * @param Request $request
     * @param string|null $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function index(Request $request, ?string $slug = null)
    {
        return $this->render('News/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

}
