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
use AppBundle\Entity\Brand;
use AppBundle\Form\BrandType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class DistributionController extends Controller
{
    /**
     * @Route("/distribution", name="distribution")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $userId = $user->getid();

        $shop = $this->getDoctrine()
            ->getRepository(Shop::class)
            ->findOneBy(['user'=>$userId]);



        $form = $this->createFormBuilder($shop)
            ->add('type', EntityType::class,[
                'class'   => Type::class,
                'choice_label' => 'name',
                'label' =>'Store Type',
                'attr'=>['placeholder'=>'Please a Type for your Store'],
            ])
            ->add('suffix', EntityType::class, [
                'class'   => Suffix::class,
                'choice_label' => 'name',
                'label' =>'Store Suffix',
                'attr'=>['placeholder'=>'Please a Type for your Store'],
            ])
            ->add('brands', TextareaType::class,[
                'attr'=>['placeholder'=>'Please input Brands for your Store'],
            ])
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted()){

            $em = $this->getDoctrine()->getManager();

            $em->persist($shop);


            $em->flush();
            return $this->redirect($this->generateUrl('angeboteInfo'));

        }

        return $this->render('default/distribution.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'myForm' => $form->createView()
        ]);
    }
}
