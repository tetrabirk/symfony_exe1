<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 5/06/2017
 * Time: 14:39
 */

namespace Birk\NewsBundle\Manager;
use \Birk\NewsBundle\Entity\News;

class NewsManager
{

    public function randomNews(){
        $news =[];
        $faker = \Faker\Factory::create('fr_BE');

        $news['image'] = 'http://www.placecage.com/c/185/185';
        $news['texte'] = $faker->text(200);
        $news['titre'] = $faker->text(30);
        $news['href'] = '#';

        return $news;
    }

    public function create($n){
        $groupe = [];
        for ($i=0;$i<$n; $i++){
            $news = $this->randomNews();
            $news['id']=$i+1;
            $groupe[$i]= new News();
            $groupe[$i]->hydrate($news);

        }
        dump($groupe);
        return $groupe;
    }
}