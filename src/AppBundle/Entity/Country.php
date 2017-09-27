<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 */
class Country
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
     * @ORM\Column(name="country_name", type="string", length=255)
     */
    private $countryName;

    /**
     * @var string
     *
     * @ORM\Column(name="country_cnname", type="string", length=255)
     */
    private $countryCnname;

    /**
     * @var string
     *
     * @ORM\Column(name="country_dename", type="string", length=255)
     */
    private $countryDename;


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
     * Set countryName
     *
     * @param string $countryName
     *
     * @return Country
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set countryCnname
     *
     * @param string $countryCnname
     *
     * @return Country
     */
    public function setCountryCnname($countryCnname)
    {
        $this->countryCnname = $countryCnname;

        return $this;
    }

    /**
     * Get countryCnname
     *
     * @return string
     */
    public function getCountryCnname()
    {
        return $this->countryCnname;
    }

    /**
     * Set countryDename
     *
     * @param string $countryDename
     *
     * @return Country
     */
    public function setCountryDename($countryDename)
    {
        $this->countryDename = $countryDename;

        return $this;
    }

    /**
     * Get countryDename
     *
     * @return string
     */
    public function getCountryDename()
    {
        return $this->countryDename;
    }
}

