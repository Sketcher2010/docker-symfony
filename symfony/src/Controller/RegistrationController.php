<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Services\RegistrationService;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration", methods={"POST"})
     * @param Request $request
     * @param RegistrationService $registrationService
     * @return Response
     */
    public function index(Request $request, RegistrationService $registrationService): Response
    {
        $requestData = json_decode($request->getContent(), true);
        $registrationService->registration($requestData);
        return $this->json(["status" => "success"]);
    }
}
