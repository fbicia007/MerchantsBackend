<?php
/**
 * Created by PhpStorm.
 * User: fbicia
 * Date: 2017/10/8
 * Time: 下午6:29
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Shop;
use AppBundle\Entity\Suffix;
use AppBundle\Entity\Type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;

class DistributionController extends Controller
{
    /**
     * @Route("/distribution", name="distribution")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need

        $shop = $this->getDoctrine()
            ->getRepository(Shop::class)
            ->findOneBy(['user'=>1]);



        $form = $this->createFormBuilder($shop)
            ->add('type', EntityType::class,[
                'class'   => Type::class,
                'choice_label' => 'name',
            ])
            ->add('suffix', EntityType::class, [
                'class'   => Suffix::class,
                'choice_label' => 'name',
            ])
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted()){

            $em = $this->getDoctrine()->getManager();

            $test = $form->getData();
            dump($test);
            $em->persist($shop);


            $em->flush();

        }

        return $this->render('default/distribution.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'myForm1' => $form->createView()
        ]);
    }
}
