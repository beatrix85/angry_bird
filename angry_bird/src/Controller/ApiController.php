<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/birds", name="api_birds")
     */
    public function birds()
    {
        return $this->render('api/index.html.twig');
    }
}
