<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeRepository")
 */
class Type
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
     * @ORM\Column(name="type_name", type="string", length=20)
     */
    private $typeName;

    /**
     * @var string
     *
     * @ORM\Column(name="type_cnname", type="string", length=255)
     */
    private $typeCnname;

    /**
     * @var string
     *
     * @ORM\Column(name="type_dename", type="string", length=255)
     */
    private $typeDename;


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
     * Set typeName
     *
     * @param string $typeName
     *
     * @return Type
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get typeName
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set typeCnname
     *
     * @param string $typeCnname
     *
     * @return Type
     */
    public function setTypeCnname($typeCnname)
    {
        $this->typeCnname = $typeCnname;

        return $this;
    }

    /**
     * Get typeCnname
     *
     * @return string
     */
    public function getTypeCnname()
    {
        return $this->typeCnname;
    }

    /**
     * Set typeDename
     *
     * @param string $typeDename
     *
     * @return Type
     */
    public function setTypeDename($typeDename)
    {
        $this->typeDename = $typeDename;

        return $this;
    }

    /**
     * Get typeDename
     *
     * @return string
     */
    public function getTypeDename()
    {
        return $this->typeDename;
    }
}

