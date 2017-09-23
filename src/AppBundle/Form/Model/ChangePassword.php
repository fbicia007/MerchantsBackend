<?php
/**
 * Created by PhpStorm.
 * User: fbicia
 * Date: 2017/9/21
 * Time: 下午3:20
 */

namespace AppBundle\Form\Model;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

class ChangePassword
{
    /**
     * @SecurityAssert\UserPassword(
     *     message = "Wrong value for your current password"
     * )
     */
    protected $oldPassword;
}