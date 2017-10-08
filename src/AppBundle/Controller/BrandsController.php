<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Brand;
use AppBundle\Form\BrandType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class BrandsController extends Controller
    {
    /**
    * @Route("/brands", name="brandsInfo")
    */
    public function indexAction(Request $request)
    {
    // replace this example code with whatever you need
        $brand = new Brand();

        $form = $this->createFormBuilder($brand)
            ->add('name',BrandType::class)
            ->add('test',TextType::class)
            ->getForm();


        return $this->render('default/brandsInput.html.twig', [
        'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
        ]);
    }
}
