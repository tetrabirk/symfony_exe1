<?php

namespace Birk\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $news = [
            ['PictureLink'=>'test.jpg', 'description'=>'blablabla','href'=>'#'],
            ['PictureLink'=>'test.jpg', 'description'=>'blablabla','href'=>'#'],
            ['PictureLink'=>'test.jpg', 'description'=>'blablabla','href'=>'#'],
            ['PictureLink'=>'test.jpg', 'description'=>'blablabla','href'=>'#']

        ];
        dump($news);
        $content = $this
            ->renderView('BirkNewsBundle:News:home.html.twig',['news'=>$news]);
        return new Response($content);
    }
}
