<?php

namespace AppBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

class AppFixtures extends DataFixtureLoader
{
    /**
     * {@inheritDoc}
     */
    protected function getFixtures()
    {
        return  array(
            __DIR__ . '/news.yml',
        );
    }
    public function imageUrl($width,$height){
        $imageSrc =
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
        
        $imgSrcSize = sizeof($this->imageSrc);
        $randKey = rand(0,$imgSrcSize-1);
        $link = $this->imageSrc[$randKey].$width.'/'.$height;
        
        return $link;
        
    }
}
