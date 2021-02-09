<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test/{id}",  name="test")
     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController sans id',
        ]);
    }

    /**
     * @Route("/test/{id}", methods={"GET"}, name="test_id" , requirements={"id"="\d+"})
     */
    public function index_id($id): Response
    {  //$id
        return $this->render('test/index_id.html.twig', [
            'controller_name' => 'TestController avec id',
            'id'=>$id,
        ]);
    }
}
