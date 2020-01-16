<?php

namespace App\Controller;

use App\Service\Api;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     **/
    public function index(Api $api)
    {
        $books = $api->listBooks();
        return $this->render('index.html.twig', [
           'books' => $books
        ]);

    }
}