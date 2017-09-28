<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suffix
 *
 * @ORM\Table(name="suffix")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SuffixRepository")
 */
class Suffix
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_cn", type="string", length=255)
     */
    private $nameCn;

    /**
     * @var string
     *
     * @ORM\Column(name="name_de", type="string", length=255)
     */
    private $nameDe;

    /**
     * @ORM\OneToMany(targetEntity="Shop", mappedBy="suffix")
     */
    private $shops;

    public function __construct()
    {
        $this->shops = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Suffix
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nameCn
     *
     * @param string $nameCn
     *
     * @return Suffix
     */
    public function setNameCn($nameCn)
    {
        $this->nameCn = $nameCn;

        return $this;
    }

    /**
     * Get nameCn
     *
     * @return string
     */
    public function getNameCn()
    {
        return $this->nameCn;
    }

    /**
     * Set nameDe
     *
     * @param string $nameDe
     *
     * @return Suffix
     */
    public function setNameDe($nameDe)
    {
        $this->nameDe = $nameDe;

        return $this;
    }

    /**
     * Get nameDe
     *
     * @return string
     */
    public function getNameDe()
    {
        return $this->nameDe;
    }

    /**
     * Add shop
     *
     * @param \AppBundle\Entity\Shop $shop
     *
     * @return Suffix
     */
    public function addShop(\AppBundle\Entity\Shop $shop)
    {
        $this->shops[] = $shop;

        return $this;
    }

    /**
     * Remove shop
     *
     * @param \AppBundle\Entity\Shop $shop
     */
    public function removeShop(\AppBundle\Entity\Shop $shop)
    {
        $this->shops->removeElement($shop);
    }

    /**
     * Get shops
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShops()
    {
        return $this->shops;
    }
}
