<?php

namespace Birk\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Birk\NewsBundle\Tools\Generator;
use Symfony\Component\HttpFoundation\Request;
use Birk\NewsBundle\Entity\News;
use Birk\NewsBundle\Entity\Auteur;
use DateTime;

//
//redirect to route
//join ou je ne sais quoi article et auteur? ->configuration dans le fichier directement)(2 ligne par document)
//
//
//hydrate?-> NON
//construct? -> new array collection ("creer un array vide pour les table liée" au cas ou il n'y en a pas)
//  @var: arrayCollection ? what's that ?

class NewsController extends Controller
{

    /**
     * @Route("/")
     * name="home"
     */
    public function homeAction()
    {   $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository('BirkNewsBundle:News');
        $allNews = $repo->findAll();
        $content =$this
            ->renderView('BirkNewsBundle:News:newsAll.html.twig',['news'=>$allNews]);

        return new Response($content);
    }
    /**
     * @Route("/news/{id}")
     * name="newsdetail"
     * requirements={'id':"\d+"}
     */

    public function newsDetailAction($id=0){
        if ($id!==0){
            $doctrine = $this->getDoctrine();
            $repo = $doctrine->getRepository('BirkNewsBundle:News');
            $news = $repo->find($id);
            $content = $this
                ->renderView('BirkNewsBundle:News:newsOne.html.twig',['news'=>$news]);
            return new Response($content);
        }else{
            return new Response('404');
        }

    }

    /**
     * @Route("/addnewstest")
     * name="addnewstest"
     *
     */
    public function createNewstest(Request $request){
        $news = new News();
        $news->setContenu("hohoho c'est t'y pas un bel article que voila");
        $news->setDatePublication(new Datetime);
        $news->setImageUrl('http://lorempixel.com/185/185/cats/');
        $news->setTitre('ceci est un titre');
        $auteur = new Auteur();
        $auteur->setNom('Boberson');
        $auteur->setPrenom('Bob');
        $auteur->setDateNaissance(new Datetime);
        $auteur->setBio('lol comme on dit');
        $news->setAuteur($auteur);
        
        $doctrine = $this->getDoctrine();

        $em=$doctrine->getManager();
        $em->persist($news);
        $em->flush();

        $this->addFlash('notice','nouvelle news');

        return $this->redirectToRoute('birk_news_news_home');



    }


}
