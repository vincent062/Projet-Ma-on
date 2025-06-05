<?php

namespace App\Form;

use App\Entity\Contacts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                "label" => "Nom : ",
                "attr" => [ "class" => "mt-4, mb-4, style => border-radius: 15px; margin-top: 0.5rem; margin-bottom:0.5rem "] 
            ])

            ->add('prenom', TextType::class, [
                "label" => "Prenom : ",
                "attr" => [ "class" => "mt-4, mb-4, style =>  border-radius: 15px; margin-top: 0.5rem; margin-bottom: 0.5rem "]          //  travailler CSS à l'intérieur
            ])

            ->add('email', TextType::class , [
                 "label" => "Email : ",
                "attr" => [ "class" => "mt-4, mb-4, style =>  border-radius: 15px; margin-top: 0.5rem; margin-bottom: 0.5rem "] 
            ])

            ->add('phone', TextType::class , [
                "label" => "Phone : ",
                "attr" => [ "class" => "mt-4, mb-4,style =>  border-radius: 15px; margin-top: 0.5rem; margin-bottom: 0.5rem  "]
            ])
            



        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}
