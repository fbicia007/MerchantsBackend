<?php

namespace AppBundle\Form;

use AppBundle\Entity\Brand;
use function PHPSTORM_META\type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BrandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class)
            ->add('nameCn', TextType::class)
            ->add('nickname', TextType::class);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Brand'
        ]);

    }

    public function getBlockPrefix()
    {
        return 'app_bundle_brand_type';
    }
}
