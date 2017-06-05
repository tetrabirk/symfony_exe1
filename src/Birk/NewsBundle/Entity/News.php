<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 5/06/2017
 * Time: 14:14
 */

namespace Birk\NewsBundle\Entity;


class News
{
    private $id;
    private $image;
    private $titre;
    private $texte;

    public function __construct(array $data)){
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value){
            $nomMethode = "set".ucfirst($key);
            if (method_exists($this,$nomMethode)){
                $this->$nomMethode($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }


}