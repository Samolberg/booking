<?php

// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class IndexController extends AbstractController
{
    public function index()
    {
        return new Response(
            '<html><body><h1>Booking App index page</h1></body></html>'
        );
    }
}