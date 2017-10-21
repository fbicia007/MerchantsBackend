<?php
/**
 * Created by PhpStorm.
 * User: fbicia
 * Date: 2017/9/26
 * Time: 下午2:32
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Shop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class AngeboteController extends Controller
{
    /**
     * @Route("/angebote", name="angeboteInfo")
     */
    public function indexAction(Request $request)
    {

        $user = $this->getUser();
        $userId = $user->getid();

        $shop = $this->getDoctrine()
            ->getRepository(Shop::class)
            ->findOneBy(['user'=>$userId]);



        $form = $this->createFormBuilder($shop)
            ->add('coupon_code', TextType::class,[
                'attr'=>['placeholder'=>'Please input Coupon Code for your Store'],
            ])
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted()){

            $em = $this->getDoctrine()->getManager();

            $em->persist($shop);


            $em->flush();
            return $this->redirect($this->generateUrl('homepage'));

        }



        return $this->render('default/angeboteInput.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'myForm' => $form->createView()
        ]);
    }
}
