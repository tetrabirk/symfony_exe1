<?php

namespace Birk\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Birk\NewsBundle\Entity\Generator;



class AuteurController extends Controller
{

    /**
     * @Route("/auteur")
     * name="auteurAll"
     */
    public function allAction()
    {   $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository('BirkNewsBundle:Auteur');
        $allAuteur = $repo->findAll();
        $content =$this
            ->renderView('BirkNewsBundle:News:AuteurAll.html.twig',['auteur'=>$allAuteur]);

        return new Response($content);
    }
    /**
     * @Route("/auteur/{id}")
     * name="auteurdetail"
     * requirements={'id':"\d+"}
     */

    public function auteurDetailAction($id=0){
        if ($id!==0){
            $doctrine = $this->getDoctrine();
            $repo = $doctrine->getRepository('BirkNewsBundle:Auteur');
            $auteur = $repo->find($id);
            $content = $this
                ->renderView('BirkNewsBundle:News:AuteurOne.html.twig',['auteur'=>$auteur]);
            return new Response($content);
        }else{
            return new Response('404');
        }

    }

    /**
     * @Route("/addauteurtest")
     * name="addauteurtest"
     *
     */
    public function creatAuteurtest(){
        $generateur = new Generator();
        $auteur = $generateur->createAuteur();

        $doctrine = $this->getDoctrine();

        $em=$doctrine->getManager();
        $em->persist($auteur);
        $em->flush();

        $this->addFlash('notice','nouvel auteur');


        $repo = $doctrine->getRepository('BirkNewsBundle:Auteur');
        $allAuteur = $repo->findAll();
        $content =$this
            ->renderView('BirkNewsBundle:News:AuteurAll.html.twig',['auteur'=>$allAuteur]);

        return new Response($content);



    }


}
