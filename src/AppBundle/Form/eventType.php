<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class eventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
        ->add('dateTime', DateTimeType::class, array('label'=>'Date and Time'))
        ->add('descrip', TextareaType::class, array('label'=>'Description'))
        ->add('img', TextType::class, array('label'=>'Image url'))
        ->add('capacity')
        ->add('email')
        ->add('phone')
        ->add('streetNum', TextType::class, array('label'=>'Street and number'))
        ->add('postalCode')
        ->add('city')
        ->add('web')
        ->add('type', ChoiceType::class, [
                'choices'  => [
                    'music' => 'music',
                    'theater' => 'theater',
                    'movie' => 'movie',
                    'sport' => 'sport',
                ],
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_event';
    }


}
