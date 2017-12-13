<?php

namespace GlobalViewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="GlobalViewBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="title_en", type="string", length=255)
     */
    private $title_en;

    /**
     * @var string
     *
     * @ORM\Column(name="title_de", type="string", length=255)
     */
    private $title_de;

    /**
     * @var string
     *
     * @ORM\Column(name="title_fr", type="string", length=255)
     */
    private $title_fr;

    /**
     * @var string
     *
     * @ORM\Column(name="description_fr", type="text")
     */
    private $description_fr;

    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="text")
     */
    private $description_en;

    /**
     * @var string
     *
     * @ORM\Column(name="description_de", type="text")
     */
    private $description_de;

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrl", type="string", length=255, nullable=true)
     */
    private $imageUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="SubCategory")
     * @ORM\JoinColumn(name="subcategory_id", referencedColumnName="id")
     */
    private $subcategory;


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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     *
     * @return Post
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Post
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Post
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set subcategory
     *
     * @param \GlobalViewBundle\Entity\SubCategory $subcategory
     *
     * @return Post
     */
    public function setSubcategory(\GlobalViewBundle\Entity\SubCategory $subcategory = null)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return \GlobalViewBundle\Entity\SubCategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return Post
     */
    public function setTitleEn($titleEn)
    {
        $this->title_en = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->title_en;
    }

    /**
     * Set titleDe
     *
     * @param string $titleDe
     *
     * @return Post
     */
    public function setTitleDe($titleDe)
    {
        $this->title_de = $titleDe;

        return $this;
    }

    /**
     * Get titleDe
     *
     * @return string
     */
    public function getTitleDe()
    {
        return $this->title_de;
    }

    /**
     * Set titleFr
     *
     * @param string $titleFr
     *
     * @return Post
     */
    public function setTitleFr($titleFr)
    {
        $this->title_fr = $titleFr;

        return $this;
    }

    /**
     * Get titleFr
     *
     * @return string
     */
    public function getTitleFr()
    {
        return $this->title_fr;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     *
     * @return Post
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->description_fr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->description_fr;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     *
     * @return Post
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->description_en = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->description_en;
    }

    /**
     * Set descriptionDe
     *
     * @param string $descriptionDe
     *
     * @return Post
     */
    public function setDescriptionDe($descriptionDe)
    {
        $this->description_de = $descriptionDe;

        return $this;
    }

    /**
     * Get descriptionDe
     *
     * @return string
     */
    public function getDescriptionDe()
    {
        return $this->description_de;
    }
}
