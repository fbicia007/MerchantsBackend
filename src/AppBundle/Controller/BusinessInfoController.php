<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Shop;
use AppBundle\Entity\Country;
use AppBundle\Form\BrandType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class BusinessInfoController extends Controller
{
    /**
     * @Route("/info", name="businessInfo")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $userName = $user->getusername();
        $userEmail = $user->getemail();


        $country_obj = $this->getDoctrine()
            ->getRepository(Country::class)
            ->findAll();

        $country_key = [];
        $country_value = [];
        foreach ($country_obj as &$value) {

            $value = $value->getName();
            array_push($country_key,$value);
            array_push($country_value,$value);
        }

        $country = array_combine($country_key,$country_value);


        dump($country);



        $form = $this->createFormBuilder()
            ->add('company_name', TextType::class,[
                'attr'=>['placeholder'=>'Company Name'],
            ])
            ->add('store_name', TextType::class,[
                'attr'=>['placeholder'=>'Store Name'],
            ])
            ->add('manager_title', ChoiceType::class, [
                'choices'=>['Mr.'=>'Mr.','Miss.'=>'Miss.','Dr.'=>'Dr.','Pr.'=>'Pr.'],
            ])
            ->add('manager_firstname', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; margin-top: 2%; display:inline-block;','placeholder'=>'Firstname'],
            ])
            ->add('manager_lastname', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; margin-left: 2%; display:inline-block;','placeholder'=>'Lastname'],
            ])
            ->add('street', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:60%; display:inline-block;','placeholder'=>'Street'],
            ])
            ->add('street_number', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:35%; margin: 0 0 2% 5%; display:inline-block;','placeholder'=>'Number'],
            ])
            ->add('zip', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; display:inline-block;','placeholder'=>'Zip Code'],
            ])
            ->add('city', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; margin: 0 0 2% 2%; display:inline-block;','placeholder'=>'City'],
            ])
            ->add('country', ChoiceType::class,[
                'choices'=> $country,
                'attr'=>['class'=>'form-control','style'=>'margin: 0 0 2% 0;'],
            ])
            ->getForm();


        //$form = $this->createForm(BrandType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            dump($form->getData());
            $em = $this->getDoctrine()->getManager();

            $brand = $form->getData();

            $em->persist($brand);
            $em->flush();

        }

        return $this->render('default/businessInfo.html.twig', [
            'user_name' => $userName,
            'email' => $userEmail,
            'myForm' => $form->createView()
        ]);
    }
}
