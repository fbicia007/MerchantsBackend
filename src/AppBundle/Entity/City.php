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
     * @ORM\Column(name="city_name", type="string", length=255)
     */
    private $cityName;

    /**
     * @var string
     *
     * @ORM\Column(name="city_cnname", type="string", length=255)
     */
    private $cityCnname;

    /**
     * @var string
     *
     * @ORM\Column(name="city_dename", type="string", length=255)
     */
    private $cityDename;


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
     * Set cityName
     *
     * @param string $cityName
     *
     * @return City
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set cityCnname
     *
     * @param string $cityCnname
     *
     * @return City
     */
    public function setCityCnname($cityCnname)
    {
        $this->cityCnname = $cityCnname;

        return $this;
    }

    /**
     * Get cityCnname
     *
     * @return string
     */
    public function getCityCnname()
    {
        return $this->cityCnname;
    }

    /**
     * Set cityDename
     *
     * @param string $cityDename
     *
     * @return City
     */
    public function setCityDename($cityDename)
    {
        $this->cityDename = $cityDename;

        return $this;
    }

    /**
     * Get cityDename
     *
     * @return string
     */
    public function getCityDename()
    {
        return $this->cityDename;
    }
}

