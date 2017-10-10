<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpeningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mo_am',TextType::class,[
            'attr'=>[
                'class'=>'form-control',
                'style'=>'width:48%; display:inline-block;',
                'type'=>'time',
                'id'=>'mo_am',
                'value'=>'08:00'],
        ])
            ->add('mo_pm', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:47%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'mo_pm',
                    'value'=>'20:00'],
            ])
            ->add('tu_am', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:48%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'tu_am',
                    'value'=>'08:00'],
            ])
            ->add('tu_pm', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:47%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'tu_pm',
                    'value'=>'20:00'],
            ])
            ->add('wed_am', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:48%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'wed_am',
                    'value'=>'08:00'],
            ])
            ->add('wed_pm', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:47%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'wed_pm',
                    'value'=>'20:00'],
            ])
            ->add('thu_am', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:48%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'thu_am',
                    'value'=>'08:00'],
            ])
            ->add('thu_pm', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:47%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'thu_pm',
                    'value'=>'20:00'],
            ])
            ->add('fr_am', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:48%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'fr_am',
                    'value'=>'08:00'],
            ])
            ->add('fr_pm', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:47%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'fr_pm',
                    'value'=>'20:00'],
            ])
            ->add('sa_am', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:48%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'sa_am',
                    'value'=>'08:00'],
            ])
            ->add('sa_pm', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:47%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'su_am',
                    'value'=>'20:00'],
            ])
            ->add('su_am', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:48%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'su_pm',
                    'value'=>'08:00'],
            ])
            ->add('su_pm', TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                    'style'=>'width:47%; display:inline-block;',
                    'type'=>'time',
                    'id'=>'su_pm',
                    'value'=>'20:00'],
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'app_bundle_opening_type';
    }
}
