<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */

    public function index(){
        return $this->render('/home/index.html.twig');
    }

}
