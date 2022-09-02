<?php

namespace App\Form;

use App\Entity\Matiere;
use App\Entity\Formateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MatiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nommatiere')
            ->add('idformateur', EntityType::class, [
                'class' => Formateur::class,
                'choice_label' => function ($formateur) {
                    return $formateur->getNom()." ".$formateur->getPrenom();
                }
// ->add('idformateur', EntityType::class, [
            //     'class' => Formateur::class,
            //     'placeholder' => '-- Veuillez sélectionner un visiteur --',
            //     'query_builder' => function (MatiereRepository $matiereRepository) {
            //         return $matiereRepository->createQueryBuilder('m')
            //             ->orderBy('m.nommatiere', 'ASC');
            //     }
            // ])
           // ->add('idformateur', EntityType::class, [
                // 'class' => Formateur::class,
                // 'choice_label' => 'nom',

            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matiere::class,
        ]);
    }
}
