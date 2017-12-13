<?php

namespace GlobalViewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="GlobalViewBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="libelle_fr", type="string", length=255)
     */
    private $libelle_fr;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_en", type="string", length=255)
     */
    private $libelle_en;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_de", type="string", length=255)
     */
    private $libelle_de;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=3)
     */
    private $langue;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity="SubCategory", mappedBy="category")
     */
    private $subcategories;


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
     * Set langue
     *
     * @param string $langue
     *
     * @return Category
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
     * @return Category
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
     * Set libelleFr
     *
     * @param string $libelleFr
     *
     * @return Category
     */
    public function setLibelleFr($libelleFr)
    {
        $this->libelle_fr = $libelleFr;

        return $this;
    }

    /**
     * Get libelleFr
     *
     * @return string
     */
    public function getLibelleFr()
    {
        return $this->libelle_fr;
    }

    /**
     * Set libelleEn
     *
     * @param string $libelleEn
     *
     * @return Category
     */
    public function setLibelleEn($libelleEn)
    {
        $this->libelle_en = $libelleEn;

        return $this;
    }

    /**
     * Get libelleEn
     *
     * @return string
     */
    public function getLibelleEn()
    {
        return $this->libelle_en;
    }

    /**
     * Set libelleDe
     *
     * @param string $libelleDe
     *
     * @return Category
     */
    public function setLibelleDe($libelleDe)
    {
        $this->libelle_de = $libelleDe;

        return $this;
    }

    /**
     * Get libelleDe
     *
     * @return string
     */
    public function getLibelleDe()
    {
        return $this->libelle_de;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subcategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subcategory
     *
     * @param \GlobalViewBundle\Entity\SubCategory $subcategory
     *
     * @return Category
     */
    public function addSubcategory(\GlobalViewBundle\Entity\SubCategory $subcategory)
    {
        $this->subcategories[] = $subcategory;

        return $this;
    }

    /**
     * Remove subcategory
     *
     * @param \GlobalViewBundle\Entity\SubCategory $subcategory
     */
    public function removeSubcategory(\GlobalViewBundle\Entity\SubCategory $subcategory)
    {
        $this->subcategories->removeElement($subcategory);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
}
