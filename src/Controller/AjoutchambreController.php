<?php

namespace App\Controller;

use App\Form\SavechambreType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Chambre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AjoutchambreController extends AbstractController
{
   

     /**
     * @Route("/ajoutchambre", name="ajoutchambre")
     */
    public function createchambre(Request $request, EntityManagerInterface $em):Response
    {
      $chambre = new Chambre();
      $form = $this->createForm(SavechambreType::class, $chambre);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
         // dd($etudiant);
         //$em = $this->getDoctrine()->getManager();
         $em->persist($chambre);
         $em->flush();

      }
      //dump($form);
      return $this->render('ajoutchambre\index.html.twig',[
          'form' => $form->createView(),
      ]);
    
    }
}
