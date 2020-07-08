<?php

namespace App\Controller;

use App\Form\SaveetudiantType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Etudiants;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Doctrine\ORM\EntityManagerInterface;

class AjoutetudiantController extends AbstractController
{
    /**
     * @Route("/ajoutetudiant", name="ajoutetudiant")
     */
    public function registration(Request $request, EntityManagerInterface $em):Response
    {
        $etudiant = new Etudiants();
        $form = $this->createForm(SaveetudiantType::class, $etudiant);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
         //dd($etudiant);
         //$em = $this->getDoctrine()->getManager();
         $em->persist($etudiant);
         $em->flush();
      }
      //dump($form);
      return $this->render('ajoutetudiant\index.html.twig',[
          'form' => $form->createView(),
      ]);
    
    }
}
