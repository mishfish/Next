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
     *
     * @param Request $request
     * @param EntertainmentService $entertainmentService
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getList (Request $request, EntertainmentService $entertainmentService)
    {
        $entertainments = $entertainmentService->getEntertainments();
        return $this->json($entertainments);
    }
}