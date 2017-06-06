<?php

namespace Birk\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Birk\NewsBundle\Manager\NewsManager;



class NewsController extends Controller
{
    private $newsManager;
    private $news;

    function __construct()
    {
        $this->setNewsManager();
        $this->setNews(12);
    }
//    public $newsManager = new NewsManager();
//    public $news = ;
    /**
     * @Route("/")
     * name="home"
     */
    public function homeAction()
    {

        $content = $this
            ->renderView('BirkNewsBundle:News:newsAll.html.twig',['news'=>$this->news]);
        return new Response($content);
    }
    /**
     * @Route("/news/{id}")
     * name="newsdetail"
     * requirements={'id':"\d+"}
     */

    public function newsDetailAction($id=0){
        if ($id!==0){
            $news = $this->getNews();
            $content = $this
                ->renderView('BirkNewsBundle:News:newsOne.html.twig',['news'=>$news[$id]]);
            dump($news[$id]);
            return new Response($content);
        }else{
            return new Response('404');
        }

    }

    /**
     * @return mixed
     */
    public function getNewsManager()
    {
        return $this->newsManager;
    }

    /**
     * @param mixed $newsManager
     */
    public function setNewsManager()
    {
        $this->newsManager = new NewsManager();
    }

    /**
     * @return mixed
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * @param mixed $news
     */
    public function setNews($nbre)
    {
        $this->news = $this->newsManager->create(12);
    }


}
