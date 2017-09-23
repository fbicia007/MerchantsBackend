<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShopRepository")
 */
class Shop
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
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="shopName", type="string", length=255)
     */
    private $shopName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shopEmail", type="string", length=255)
     */
    private $shopEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=255)
     */
    private $telefon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=255)
     */
    private $web = '';

    /**
     * @var string
     *
     * @ORM\Column(name="overview", type="string", length=255)
     */
    private $overview = '';

    /**
     * @var array
     *
     * @ORM\Column(name="payment", type="json_array")
     */
    private $payment = array('' => '');

    /**
     * @var array
     *
     * @ORM\Column(name="openingHours", type="json_array")
     */
    private $openingHours = array('','','','','','','');

    /**
     * @var string
     *
     * @ORM\Column(name="shopType", type="string", length=255)
     */
    private $shopType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=255)
     */
    private $suffix = '';

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mark", type="string", length=255)
     */
    private $mark = '';

    /**
     * @var array
     *
     * @ORM\Column(name="brand", type="json_array")
     */
    private $brand = array('','','','','','','','','','','','');

    /**
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * @param string $web
     */
    public function setWeb($web)
    {
        $this->web = $web;
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Shop
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set shopName
     *
     * @param string $shopName
     *
     * @return Shop
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;

        return $this;
    }

    /**
     * Get shopName
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * Set shopEmail
     *
     * @param string $shopEmail
     *
     * @return Shop
     */
    public function setShopEmail($shopEmail)
    {
        $this->shopEmail = $shopEmail;

        return $this;
    }

    /**
     * Get shopEmail
     *
     * @return string
     */
    public function getShopEmail()
    {
        return $this->shopEmail;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     *
     * @return Shop
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Shop
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set overview
     *
     * @param string $overview
     *
     * @return Shop
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;

        return $this;
    }

    /**
     * Get overview
     *
     * @return string
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * Set payment
     *
     * @param array $payment
     *
     * @return Shop
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return array
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set openingHours
     *
     * @param array $openingHours
     *
     * @return Shop
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    /**
     * Get openingHours
     *
     * @return array
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * Set shopType
     *
     * @param string $shopType
     *
     * @return Shop
     */
    public function setShopType($shopType)
    {
        $this->shopType = $shopType;

        return $this;
    }

    /**
     * Get shopType
     *
     * @return string
     */
    public function getShopType()
    {
        return $this->shopType;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     *
     * @return Shop
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Shop
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set mark
     *
     * @param string $mark
     *
     * @return Shop
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set brand
     *
     * @param array $brand
     *
     * @return Shop
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return array
     */
    public function getBrand()
    {
        return $this->brand;
    }
}

