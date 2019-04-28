<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticlesController
 * @package App\Controller
 */
class ArticlesController extends Controller {


    /**
     * @Route("/")
     * @Method({"GET"})
     *
     * @return Response
     */
    public function index() {
//        return new Response('<h1>Hello World</h1>', 200);
        return $this->render('articles/index.html.twig', ['name'=>'Juyal Ahmed']);
    }
}