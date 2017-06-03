<?php

namespace Birk\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @Route("/")
     * name="home"
     */
    public function homeAction()
    {
        $news = [
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],
            ['image'=>'http://www.placecage.com/c/185/185','titre'=>'ceci est un titre', 'texte'=>'blablabla','href'=>'#'],

        ];
        dump($news);
        $content = $this
            ->renderView('BirkNewsBundle:News:home.html.twig',['news'=>$news]);
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
