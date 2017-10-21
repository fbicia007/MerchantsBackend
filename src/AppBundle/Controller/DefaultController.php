<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Shop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $userName = $user->getusername();
        $userEmail = $user->getemail();
        $userId = $user->getid();

        if($userName != 'admin')
        {
            $userFirstlogin= $user->getFirstlogin();

            if($userFirstlogin){

                $shop = $this->getDoctrine()
                    ->getRepository(Shop::class)
                    ->findOneBy(['user'=>$userId]);

                // replace this example code with whatever you need
                return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
                ]);

            }else{

                //$member = new Member();

                $shop = new Shop();
                $em = $this->getDoctrine()->getManager();

                $shop->setUser($userId);
                $em->persist($shop);
                $em->flush();


                $user->setFirstlogin(1);
                $em->persist($user);
                $em->flush();

                return $this->render('default/index.html.twig');

            }


        }
        else{
            return $this->render('default/admin.html.twig', [
            ]);
        }
    }
}
