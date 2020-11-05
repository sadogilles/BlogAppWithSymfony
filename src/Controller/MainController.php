<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }

    /**
     * @Route("/posts", name="post")
     */
    public function post(): Response
    {
        
        return $this->render('public/post.html.twig');
    }

     /**
     * @Route("/posts/{id}", name="show")
     */
    public function show(int $id): Response
    {

        //redirect to same the post page with id
        return $this->render('public/post.html.twig',[
            'id'=>$id
        ]);
    }
}
