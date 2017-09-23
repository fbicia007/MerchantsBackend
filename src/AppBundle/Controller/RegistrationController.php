<?php

namespace AppBundle\Controller;

use AppBundle\Form\MemberType;
use AppBundle\Entity\Member;
use AppBundle\Entity\Shop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="registration")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $member = new Member();
        $shop = new Shop();
        //$member->setUsername('kaufhof1');

        $form = $this->createForm(MemberType::class, $member);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $password = $this
                ->get('security.password_encoder')
                ->encodePassword(
                    $member,
                    $member->getPlainPassword()
                )
            ;

            $member->setPassword($password);

            $em = $this->getDoctrine()->getManager();

            $em->persist($member);
            $em->flush();

            $shop->setUserId($member->getId());
            $em->persist($shop);
            $em->flush();

            $token = new UsernamePasswordToken(
                $member,
                $password,
                'main',
                $member->getRoles()
            );

            $this->get('security.token_storage')->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));

            //$this->addFlash('success', 'You are now successfully registered!');
            //return $this->redirectToRoute('default/index.html.twig');

        }

        return $this->render('registration/register.html.twig', [
            'registration_form' => $form->createView(),
        ]);
    }
}