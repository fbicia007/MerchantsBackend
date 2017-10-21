<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="manager_title", type="string", length=20)
     */
    private $managerTitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="manager_firstname", type="string", length=255)
     */
    private $managerFirstname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="manager_lastname", type="string", length=255)
     */
    private $managerLastname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street = '';

    /**
     * @var string
     *
     * @ORM\Column(name="street_number", type="string", length=255)
     */
    private $streetNumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=255)
     */
    private $zip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=255)
     */
    private $web = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="tax_refund", type="boolean")
     */
    private $taxRefund = '';

    /**
     * @var array
     *
     * @ORM\Column(name="payment", type="array", nullable=true)
     */
    private $payment;

    /**
     * @var array
     *
     * @ORM\Column(name="language", type="array", nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail", type="string", length=255 ,nullable=true)
     *
     * @Assert\NotBlank(message="Please, upload the shop Thumbnail as a Image file.")
     * @Assert\File(mimeTypes={ "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "application/pdf",
     *          "application/x-pdf" })
     */
    private $thumbnail;

    /**
     * @var array
     *
     * @ORM\Column(name="pictures", type="array", nullable=true)
     *
     * @Assert\All({
     *     @Assert\NotBlank,
     *     @Assert\File(mimeTypes={ "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "application/pdf",
     *          "application/x-pdf" })
     * })
     *
     */
    private $pictures;

    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="shops")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Suffix", inversedBy="shops")
     * @ORM\JoinColumn(name="suffix_id", referencedColumnName="id")
     */
    private $suffix;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer")
     */
    private $user;

    /**
     * @var array
     *
     * @ORM\Column(name="opening_hours", type="json_array", nullable=true)
     */
    private $openingHours;

    /**
     * @var string
     *
     * @ORM\Column(name="coupon_code", type="string", length=255)
     */
    private $couponCode = '';

    /**
     * @var array
     *
     * @ORM\Column(name="brands", type="json_array", nullable=true)
     */
    private $brands = '';


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
     * Set company
     *
     * @param string $company
     *
     * @return Shop
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Shop
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
     * Set managerTitle
     *
     * @param string $managerTitle
     *
     * @return Shop
     */
    public function setManagerTitle($managerTitle)
    {
        $this->managerTitle = $managerTitle;

        return $this;
    }

    /**
     * Get managerTitle
     *
     * @return string
     */
    public function getManagerTitle()
    {
        return $this->managerTitle;
    }

    /**
     * Set managerFirstname
     *
     * @param string $managerFirstname
     *
     * @return Shop
     */
    public function setManagerFirstname($managerFirstname)
    {
        $this->managerFirstname = $managerFirstname;

        return $this;
    }

    /**
     * Get managerFirstname
     *
     * @return string
     */
    public function getManagerFirstname()
    {
        return $this->managerFirstname;
    }

    /**
     * Set managerLastname
     *
     * @param string $managerLastname
     *
     * @return Shop
     */
    public function setManagerLastname($managerLastname)
    {
        $this->managerLastname = $managerLastname;

        return $this;
    }

    /**
     * Get managerLastname
     *
     * @return string
     */
    public function getManagerLastname()
    {
        return $this->managerLastname;
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
     * Set web
     *
     * @param string $web
     *
     * @return Shop
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
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
     * Set thumbnail
     *
     * @param string $thumbnail
     *
     * @return Shop
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
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

    /**
     * Set brands
     *
     * @param array $brands
     *
     * @return Shop
     */
    public function setBrands($brands)
    {
        $this->brands = $brands;

        return $this;
    }

    /**
     * Get brands
     *
     * @return array
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Type $type
     *
     * @return Shop
     */
    public function setType(\AppBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Shop
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }
}
