<?php

namespace App\Form;

use App\Entity\Persons;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonsType extends AbstractType
{
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('first_name', TextType::class, [
                'label' => 'Imię'
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Nazwisko'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email'
            ])
            ->add('expected_cost', ChoiceType::class, [
                'choices' => array_flip(Persons::$expectedCostList),
                'multiple' => false,
                'expanded' => true,
                'label' => 'Oczekiwany koszt wycieczki', 
            ])
            ->add('travel_type', ChoiceType::class, [
                'choices' => array_flip(Persons::$travelTypeList),
                'multiple' => false,
                'label' => 'Rodzaj podróży', 
            ])
            ->add('comments', TextareaType::class ,[
                'label' => 'Opis',
                'required' => false,
            ])
        ;
    
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Persons::class,
        ]);
    }
}