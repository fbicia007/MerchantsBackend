<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Shop;
use AppBundle\Entity\Country;
use AppBundle\Entity\Type;
use AppBundle\Entity\Suffix;

use AppBundle\Form\BrandType;
use AppBundle\Form\OpeningType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
        $userId = $user->getid();



        //$shop = new Shop();


        $shop = $this->getDoctrine()
            ->getRepository(Shop::class)
            ->findOneBy(['user'=>$userId]);

        $payment =  ['VISA'=>'VISA', 'MasterCard'=>'MasterCard', 'Maestro'=>'Maestro', 'Cirrus'=>'Cirrus', 'PayPal'=>'PayPal'];
        $language =  ['English'=>'English', 'Chinese'=>'Chinese', 'Russian'=>'Russian', 'Japanese'=>'Japanese', 'Korean'=>'Korean', 'Thai'=>'Thai', 'Arabic'=>'Arabic'];



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

        $form = $this->createFormBuilder($shop)
            ->add('company', TextType::class,[
                'attr'=>['placeholder'=>'Company Name'],
            ])
            ->add('name', TextType::class,[
                'attr'=>['placeholder'=>'Store Name'],
            ])
            ->add('manager_title', ChoiceType::class, [
                'choices'=>['Mr.'=>'Mr.','Miss.'=>'Miss.','Dr.'=>'Dr.','Pr.'=>'Pr.'],
                'placeholder' => 'Title',
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
                'placeholder' => 'Choose a Country',
                'attr'=>['class'=>'form-control','style'=>'margin: 0 0 2% 0;'],
            ])
            ->add('tel', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; display:inline-block;','placeholder'=>'Telephone'],
            ])
            ->add('email', EmailType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; margin: 0 0 2% 2%; display:inline-block;','placeholder'=>'E-Mail'],
            ])
            ->add('fax', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; display:inline-block;','placeholder'=>'Fax'],
            ])
            ->add('web', TextType::class,[
                'attr'=>['class'=>'form-control','style'=>'width:49%; margin: 0 0 2% 2%; display:inline-block;','placeholder'=>'Homepage'],
            ])
            ->add('opening_hours', OpeningType::class)
            ->add('tax_refund', ChoiceType::class,[
                'choices'=> ['Yes'=>true,'No'=>false],
                'placeholder' => 'Yes or No',
            ])
            ->add('payment', ChoiceType::class, [
                'choices' => $payment,
                'multiple' => true,
                'expanded' => true,
                'attr'=>['class'=>'checkbox-inline col-md-2','style'=>'width: 30px;'],
            ])
            ->add('language', ChoiceType::class, [
                'choices' => $language,
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('thumbnail', FileType::class, [
                'label' => 'Your profile picture(jpg/png) must be smaller than 1 MB in file size.',
                'data_class' => null,
            ])
            ->add('pictures', FileType::class, [
                'label' => 'Your profile picture(jpg/png) must be smaller than 1 MB in file size.',
                'data_class' => null,
                'multiple' => true,

            ])
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){


            $fileThumbnail = $shop->getThumbnail();

            $pictures = $shop->getPictures();

            // Generate a unique name for the file before saving it

            $fileThumbnailName = $this->get('app.thumbs_uploader')->upload($fileThumbnail);

            //multi upload
            $files = $shop->getPictures();
            $images = array();

            if($files != null) {
                $key = 0;

                foreach ($files as $file)
                {
                    $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move(
                        $this->getParameter('pictures_directory'),
                        $fileName
                    );
                    $images[$key++] = $fileName;
                }
                $shop->setPictures($images);
            }

            //$picturesName = $this->get('app.pictures_uploader')->upload($pictures);


            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $shop->setThumbnail($fileThumbnailName);
            //$shop->setPictures($picturesName);

            $em = $this->getDoctrine()->getManager();

            $em->persist($shop);
            $em->flush();

            return $this->redirect($this->generateUrl('distribution'));

        }

        return $this->render('default/businessInfo.html.twig', [
            'user_name' => $userName,
            'email' => $userEmail,
            'myForm' => $form->createView()
        ]);
    }
}
