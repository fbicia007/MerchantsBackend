<?php
/**
 * Created by PhpStorm.
 * User: fbicia
 * Date: 2017/9/21
 * Time: 下午3:23
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ChangePasswordType;
use AppBundle\Form\Model\ChangePassword;

class DemoController extends Controller
{
    /**
     *
     * @Route("/change-password", name="change_password")
     *
     */
    public function changePasswdAction(Request $request)
    {
        $changePasswordModel = new ChangePassword();
        $form = $this->createForm(new ChangePasswordType(), $changePasswordModel);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // perform some action,
            // such as encoding with MessageDigestPasswordEncoder and persist
            return $this->redirect($this->generateUrl('change_passwd_success'));
        }

        return $this->render('security/changePassword.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}