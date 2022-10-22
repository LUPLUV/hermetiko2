<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageCon extends AbstractController
{

    #[Route('/', name: 'homepage_loader')]
    public function load(): Response
    {
        return $this->render('home/homepage.html.twig',[
            
        ]);
    }

}

?>