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
    public $imageSrc =
        [
            'http://loremflickr.com/',
            'http://www.placecage.com/c/',
            'http://www.placecage.com/',
            'http://www.placecage.com/g/',
            'http://www.placecage.com/gif/',
            'http://www.fillmurray.com/',
            'http://www.fillmurray.com/g/',
            'http://www.stevensegallery.com/',
            'http://www.stevensegallery.com/g/',
            'http://lorempixel.com/',
            'http://lorempixel.com/',
        ];

    public function randomNews(){
        $news =[];
        $faker = \Faker\Factory::create('fr_BE');

        $news['image'] = $this->randomImageSrc(185,185);
        $news['texte'] = $faker->text(200);
        $news['titre'] = $faker->text(30);

        return $news;
    }

    public function create($n){
        $groupe = [];
        for ($i=0;$i<$n; $i++){
            $news = $this->randomNews();
            $news['id']=$i+1;
            $news['href'] = '/news/'.$news['id'];
            $groupe[$i]= new News();
            $groupe[$i]->hydrate($news);

        }
        return $groupe;
    }

    public function randomImageSrc($width,$height){
        $imgSrcSize = sizeof($this->imageSrc);
        $randKey = rand(0,$imgSrcSize-1);
        $link = $this->imageSrc[$randKey].$width.'/'.$height;
        return $link;

    }

}