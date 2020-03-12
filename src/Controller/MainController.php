<?php

namespace App\Controller;

use App\Entity\Persons;
use App\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    public function form()
    {
        $person = new Persons();

        $form = $this->createForm(PersonType::class, $person);

        return $this->render('persons/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
