<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends AbstractController
{
    #[Route('/')]
    public function registrationForm(): Response
    {
        $number = random_int(0, 100);
        
        return $this->render('forms/registration.html.twig', [
            'number' => $number,
        ]);
    }
}