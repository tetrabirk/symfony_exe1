<?php

namespace Birk\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Birk\NewsBundle\Entity\Generator;
use Symfony\Component\HttpFoundation\Request;



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
        $generateur = new Generator();
        $news = $generateur->createNews();

        $doctrine = $this->getDoctrine();

        $em=$doctrine->getManager();
        $em->persist($news);
        $em->flush();

        $this->addFlash('notice','nouvelle news');

        $repo = $doctrine->getRepository('BirkNewsBundle:News');
        $allNews = $repo->findAll();
        $content =$this
            ->renderView('BirkNewsBundle:News:newsAll.html.twig',['news'=>$allNews]);
        return new Response($content);



    }


}
