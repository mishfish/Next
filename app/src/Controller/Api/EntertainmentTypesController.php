<?php

namespace App\Controller\Api;

use App\Entertainment\Specifications\ActiveEntertainments;
use App\Repository\EntertainmentTypeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/entertainment", defaults={"_format":"json"})
 */
class EntertainmentTypesController extends Controller
{

    /**
     * @Route("/type/list")
     * @Method("GET")
     *
     * @param EntertainmentTypeRepository $entertainmentTypeRepository
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getList (EntertainmentTypeRepository $entertainmentTypeRepository)
    {
        $entertainments = $entertainmentTypeRepository->match(new ActiveEntertainments());
        return $this->json($entertainments);
    }
}