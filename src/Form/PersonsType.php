<?php

namespace App\Form;

use App\Entity\Persons;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonsType extends AbstractType
{
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('email')
            ->add('expected_cost', ChoiceType::class, [
                'choices' => array_flip(Persons::$expectedCostList),
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('travel_type', ChoiceType::class, [
                'choices' => array_flip(Persons::$travelTypeList),
                'multiple' => false,
            ])
            ->add('comments')
        ;
    
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Persons::class,
        ]);
    }
}