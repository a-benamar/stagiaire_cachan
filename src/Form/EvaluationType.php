<?php

namespace App\Form;

use App\Entity\Evaluation;
use App\Entity\Matiere;
use App\Entity\Stagiaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EvaluationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('note')
            ->add('dateevaluation')
            ->add('idmatiere')
            ->add('idstagiaire', EntityType::class, [
                'class' => Stagiaire::class,
                'choice_label' => function ($formateur) {
                    return $formateur->getNom()." ".$formateur->getPrenom();
                }
            ])

        //     ->add('idstagiaire', EntityType::class, [
        //     'class' => Stagiaire::class,
        //     'choice_label' => 'nom'
        // ])
            ->add('idmatiere', EntityType::class, [
            'class' => Matiere::class,
            'choice_label' => 'nommatiere',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
