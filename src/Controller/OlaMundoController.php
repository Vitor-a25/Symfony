<?php
// src/Controller/OlaMundoController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController
{
        /**
         * @Route("/ola-mundo", name="ola_mundo")
         */
    public function olaMundo(): Response
    {
        return new Response('<h1>Olá Mundo!</h1>');
    }
}