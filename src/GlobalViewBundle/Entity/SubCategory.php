<?php

namespace GlobalViewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubCategory
 *
 * @ORM\Table(name="sub_category")
 * @ORM\Entity(repositoryClass="GlobalViewBundle\Repository\SubCategoryRepository")
 */
class SubCategory
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
     * @ORM\Column(name="nom_fr", type="string", length=255)
     */
    private $nom_fr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=255)
     */
    private $nom_en;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_de", type="string", length=255)
     */
    private $nom_de;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="subcategories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return SubCategory
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set langue
     *
     * @param string $langue
     *
     * @return SubCategory
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return SubCategory
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
     * Set category
     *
     * @param \GlobalViewBundle\Entity\CategoryFr $category
     *
     * @return SubCategory
     */
    public function setCategory(\GlobalViewBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \GlobalViewBundle\Entity\CategoryFr
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set nomFr
     *
     * @param string $nomFr
     *
     * @return SubCategory
     */
    public function setNomFr($nomFr)
    {
        $this->nom_fr = $nomFr;

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string
     */
    public function getNomFr()
    {
        return $this->nom_fr;
    }

    /**
     * Set nomEn
     *
     * @param string $nomEn
     *
     * @return SubCategory
     */
    public function setNomEn($nomEn)
    {
        $this->nom_en = $nomEn;

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string
     */
    public function getNomEn()
    {
        return $this->nom_en;
    }

    /**
     * Set nomDe
     *
     * @param string $nomDe
     *
     * @return SubCategory
     */
    public function setNomDe($nomDe)
    {
        $this->nom_de = $nomDe;

        return $this;
    }

    /**
     * Get nomDe
     *
     * @return string
     */
    public function getNomDe()
    {
        return $this->nom_de;
    }
}
