<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 */
class City
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
     * @return City
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
     * @return City
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
     * @return City
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
}
