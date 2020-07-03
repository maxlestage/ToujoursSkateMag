<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class PhotosController extends AbstractController
{
    /**
     * @Route("/photos", name="photos")
     * @return Response
     */

    public function photos(){
        return $this->render('photos/photos.html.twig');
    }

    /**
     * @Route("/test", name="test")
     * @return Response
     */

    public function test(){
        return $this->render('photos/test.html.twig');
    }

}
