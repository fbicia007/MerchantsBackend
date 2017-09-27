<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrandType
 *
 * @ORM\Table(name="brand_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BrandTypeRepository")
 */
class BrandType
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
     * @ORM\Column(name="bt_name", type="string", length=255)
     */
    private $btName;

    /**
     * @var string
     *
     * @ORM\Column(name="bt_cnname", type="string", length=255)
     */
    private $btCnname;

    /**
     * @var string
     *
     * @ORM\Column(name="bt_dename", type="string", length=255)
     */
    private $btDename;


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
     * Set btName
     *
     * @param string $btName
     *
     * @return BrandType
     */
    public function setBtName($btName)
    {
        $this->btName = $btName;

        return $this;
    }

    /**
     * Get btName
     *
     * @return string
     */
    public function getBtName()
    {
        return $this->btName;
    }

    /**
     * Set btCnname
     *
     * @param string $btCnname
     *
     * @return BrandType
     */
    public function setBtCnname($btCnname)
    {
        $this->btCnname = $btCnname;

        return $this;
    }

    /**
     * Get btCnname
     *
     * @return string
     */
    public function getBtCnname()
    {
        return $this->btCnname;
    }

    /**
     * Set btDename
     *
     * @param string $btDename
     *
     * @return BrandType
     */
    public function setBtDename($btDename)
    {
        $this->btDename = $btDename;

        return $this;
    }

    /**
     * Get btDename
     *
     * @return string
     */
    public function getBtDename()
    {
        return $this->btDename;
    }
}

