<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BirdController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('bird/home.html.twig');
    }

    /**
     * @Route("/bird/{id}", name="bird_show")
     */
    public function show($id)
    {
        return $this->render('bird/show.html.twig', [
            'id' => $id,
        ]);
    }

    /**
     * @Route("/download", name="calendar_download")
     */
    public function download()
    {
        return $this->render('bird/download.html.twig');
    }
}
