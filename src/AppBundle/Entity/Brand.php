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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_cn", type="string", length=255, unique=true)
     */
    private $nameCn;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=255, unique=true)
     */
    private $nickname;


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
     * @return Brand
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
     * @return Brand
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
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Brand
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }
}
