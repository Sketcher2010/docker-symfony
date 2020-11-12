<?php

namespace App\Services;

use App\Entity\Participant;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

class RegistrationService
{

    private $manager;

    /**
     * RegistrationService constructor.
     * @param EntityManagerInterface $manager
     */
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param array $request
     */
    public function registration(array $request)
    {
        $participant = new Participant();
        $participant
            ->setFullName($request["fullName"])
            ->setDegree($request["degree"])
            ->setWorkPlace($request["workPlace"])
            ->setAddress($request["address"])
            ->setContactPhones($request["contactPhones"])
            ->setEmail($request["email"])
            ->setEventNameSpeaker($request["eventNameSpeaker"])
            ->setEventNameListener($request["eventNameListener"])
            ->setPublication($request["publication"])
            ->setRegDateTime(new DateTime());
        $this->manager->persist($participant);
        $this->manager->flush();
    }
}