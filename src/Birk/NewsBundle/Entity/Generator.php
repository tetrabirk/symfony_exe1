<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 5/06/2017
 * Time: 14:39
 */

namespace Birk\NewsBundle\Entity;

class Generator
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

        $news['imageUrl'] = $this->randomImageSrc(185,185);
        $news['contenu'] = $faker->text(200);
        $news['titre'] = $faker->text(30);
        $news['datePublication'] = $faker->dateTimeThisYear;
        return $news;
    }

    public function randomAuteur(){
        $auteur =[];
        $faker = \Faker\Factory::create('fr_BE');

        $auteur['nom'] = $faker->lastName;
        $auteur['prenom'] = $faker->firstName;
        $auteur['dateNaissance'] = $faker->dateTimeThisCentury;
        $auteur['bio'] = $faker->text(200);

        return $auteur;
    }

    public function createAuteur(){
        $auteur = $this->randomAuteur();
        $auteur = new Auteur($auteur);
    }

    public function createNews(){

        $news = $this->randomNews();
        $news= new News($news);


        return $news;
    }

//
//    public function createNewsGroupe($n){
//        $groupe = [];
//        for ($i=0;$i<$n; $i++){
//            $news = $this->randomNews();
//            $news['id']=$i+1;
//            $news['href'] = '/news/'.$news['id'];
//            $groupe[$i]= new News();
//            $groupe[$i]= new News();
//
//        }
//        return $groupe;
//    }

    public function randomImageSrc($width,$height){
        $imgSrcSize = sizeof($this->imageSrc);
        $randKey = rand(0,$imgSrcSize-1);
        $link = $this->imageSrc[$randKey].$width.'/'.$height;
        return $link;

    }

}