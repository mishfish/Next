<?php

namespace App\Controller\Api;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/booking", defaults={"_format":"json"})
 */
class BookingController extends Controller
{

    /**
     * @Route("/create")
     * @Method("POST")
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function create (Request $request)
    {
        $text = $request->request->get('text');
//        $list = $todoService->createList($text);
        return $this->json($text);
    }
}