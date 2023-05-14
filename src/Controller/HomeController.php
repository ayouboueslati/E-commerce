<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $user = $this->getUser();

        if ($user) {
            // User is logged in
            // Perform any necessary operations or retrieve user-specific data
            // Pass the data to the template and render the logged-in homepage
            return $this->render('home/logged_in.html.twig', [
                'user' => $user,
            ]);
        } else {
            // User is a guest
            // Render the guest homepage
            return $this->render('home/guest.html.twig');
        }
    }
}
