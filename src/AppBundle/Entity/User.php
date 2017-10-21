<?php
/**
 * Created by PhpStorm.
 * User: fbicia
 * Date: 2017/9/26
 * Time: 下午3:04
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstlogin", type="boolean")
     */
    private $firstlogin = 0;

    /**
     * @return string
     */
    public function getFirstlogin()
    {
        return $this->firstlogin;
    }

    /**
     * @param string $firstlogin
     */
    public function setFirstlogin($firstlogin)
    {
        $this->firstlogin = $firstlogin;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
