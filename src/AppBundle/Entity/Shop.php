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
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="store_name", type="string", length=255)
     */
    private $storeName;

    /**
     * @var string
     *
     * @ORM\Column(name="sm_title", type="string", length=20)
     */
    private $smTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="sm_firstname", type="string", length=255)
     */
    private $smFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="sm_lastname", type="string", length=255)
     */
    private $smLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="street_number", type="string", length=255)
     */
    private $streetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=255)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="homepage", type="string", length=255)
     */
    private $homepage;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var bool
     *
     * @ORM\Column(name="tax_refund", type="boolean")
     */
    private $taxRefund;

    /**
     * @var array
     *
     * @ORM\Column(name="payment", type="array")
     */
    private $payment;

    /**
     * @var array
     *
     * @ORM\Column(name="language", type="array")
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="thumb", type="string", length=255)
     */
    private $thumb;

    /**
     * @var array
     *
     * @ORM\Column(name="pictures", type="array")
     */
    private $pictures;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="suffix", type="integer")
     */
    private $suffix;

    /**
     * @var array
     *
     * @ORM\Column(name="opentime", type="array")
     */
    private $opentime;

    /**
     * @var string
     *
     * @ORM\Column(name="coupon_code", type="string", length=255)
     */
    private $couponCode;


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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Shop
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set storeName
     *
     * @param string $storeName
     *
     * @return Shop
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Get storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Set smTitle
     *
     * @param string $smTitle
     *
     * @return Shop
     */
    public function setSmTitle($smTitle)
    {
        $this->smTitle = $smTitle;

        return $this;
    }

    /**
     * Get smTitle
     *
     * @return string
     */
    public function getSmTitle()
    {
        return $this->smTitle;
    }

    /**
     * Set smFirstname
     *
     * @param string $smFirstname
     *
     * @return Shop
     */
    public function setSmFirstname($smFirstname)
    {
        $this->smFirstname = $smFirstname;

        return $this;
    }

    /**
     * Get smFirstname
     *
     * @return string
     */
    public function getSmFirstname()
    {
        return $this->smFirstname;
    }

    /**
     * Set smLastname
     *
     * @param string $smLastname
     *
     * @return Shop
     */
    public function setSmLastname($smLastname)
    {
        $this->smLastname = $smLastname;

        return $this;
    }

    /**
     * Get smLastname
     *
     * @return string
     */
    public function getSmLastname()
    {
        return $this->smLastname;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Shop
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetNumber
     *
     * @param string $streetNumber
     *
     * @return Shop
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get streetNumber
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Shop
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Shop
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Shop
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Shop
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Shop
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set homepage
     *
     * @param string $homepage
     *
     * @return Shop
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * Get homepage
     *
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Shop
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set taxRefund
     *
     * @param boolean $taxRefund
     *
     * @return Shop
     */
    public function setTaxRefund($taxRefund)
    {
        $this->taxRefund = $taxRefund;

        return $this;
    }

    /**
     * Get taxRefund
     *
     * @return bool
     */
    public function getTaxRefund()
    {
        return $this->taxRefund;
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
     * Set language
     *
     * @param array $language
     *
     * @return Shop
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return array
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     *
     * @return Shop
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set pictures
     *
     * @param array $pictures
     *
     * @return Shop
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Get pictures
     *
     * @return array
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Shop
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set suffix
     *
     * @param integer $suffix
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
     * @return int
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set opentime
     *
     * @param array $opentime
     *
     * @return Shop
     */
    public function setOpentime($opentime)
    {
        $this->opentime = $opentime;

        return $this;
    }

    /**
     * Get opentime
     *
     * @return array
     */
    public function getOpentime()
    {
        return $this->opentime;
    }

    /**
     * Set couponCode
     *
     * @param string $couponCode
     *
     * @return Shop
     */
    public function setCouponCode($couponCode)
    {
        $this->couponCode = $couponCode;

        return $this;
    }

    /**
     * Get couponCode
     *
     * @return string
     */
    public function getCouponCode()
    {
        return $this->couponCode;
    }
}

