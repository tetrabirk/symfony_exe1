<?php

namespace Birk\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Birk\NewsBundle\Manager\NewsManager;

class NewsController extends Controller
{
    /**
     * @Route("/")
     * name="home"
     */
    public function homeAction()
    {
        $newsManager = new NewsManager();
        $news = $newsManager->create(5);
        dump($news);
        $content = $this
            ->renderView('BirkNewsBundle:News:newsAll.html.twig',['news'=>$news]);
        return new Response($content);
    }
    /**
     * @Route("/news/{id}")
     * name="newsDetail"
     * requirements={'id':"\d+"}
     */

    public function newsDetailAction($id=0){

    }
}
