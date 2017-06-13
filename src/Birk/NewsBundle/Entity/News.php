<?php

namespace Birk\NewsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="Birk\NewsBundle\Repository\NewsRepository")
 */
class News
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="image_url", type="string", length=255, nullable=true)
     */
    private $imageUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="datetimetz")
     */
    private $datePublication;

    /**
     * @var string
     * 
     * @ORM\ManyToOne(targetEntity="\Birk\NewsBundle\Entity\Auteur", inversedBy="auteur")
     */
    private $auteur;

    
    
    public function __construct(){
        $this->auteur = new Auteur();
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return News
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return News
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     *
     * @return News
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return News
     */
    public function setDatePublication($datePublication)
    {
        if (isset($datePublication)){
            $this->datePublication = $datePublication;
        }else{
            $this->datePublication = new \DateTime();
        }

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set auteur
     *
     * @param \Birk\NewsBundle\Entity\Auteur $auteur
     *
     * @return News
     */
    public function setAuteur(\Birk\NewsBundle\Entity\Auteur $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \Birk\NewsBundle\Entity\Auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}
