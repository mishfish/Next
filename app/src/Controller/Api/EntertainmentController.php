<?php

namespace App\Controller\Api;


use App\Service\EntertainmentService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/entertainment", defaults={"_format":"json"})
 */
class EntertainmentController extends Controller
{

    /**
     * @Route("/list")
     * @Method("GET")
     */
    public function getList (Request $request, EntertainmentService $entertainmentService)
    {
        $entertainments = $entertainmentService->getEntertainments();
        dump($entertainments);
        return $this->json($entertainments);

    }
}