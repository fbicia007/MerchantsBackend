<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BrandRepository")
 */
class Brand
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
     * @ORM\Column(name="brand_name", type="string", length=255)
     */
    private $brandName;

    /**
     * @var string
     *
     * @ORM\Column(name="brand_cnname", type="string", length=255)
     */
    private $brandCnname;

    /**
     * @var string
     *
     * @ORM\Column(name="brand_nickname", type="string", length=255)
     */
    private $brandNickname;


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
     * Set brandName
     *
     * @param string $brandName
     *
     * @return Brand
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set brandCnname
     *
     * @param string $brandCnname
     *
     * @return Brand
     */
    public function setBrandCnname($brandCnname)
    {
        $this->brandCnname = $brandCnname;

        return $this;
    }

    /**
     * Get brandCnname
     *
     * @return string
     */
    public function getBrandCnname()
    {
        return $this->brandCnname;
    }

    /**
     * Set brandNickname
     *
     * @param string $brandNickname
     *
     * @return Brand
     */
    public function setBrandNickname($brandNickname)
    {
        $this->brandNickname = $brandNickname;

        return $this;
    }

    /**
     * Get brandNickname
     *
     * @return string
     */
    public function getBrandNickname()
    {
        return $this->brandNickname;
    }
}

