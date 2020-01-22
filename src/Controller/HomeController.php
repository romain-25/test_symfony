<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Upload;
use App\Form\UploadType;

class HomeController extends AbstractController
{
    private $user = 'romain';
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $upload =new Upload();
        $form = $this->createForm(UploadType::class,$upload);
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'controller_user' => $this->user,
            
        ]);
    }
}
