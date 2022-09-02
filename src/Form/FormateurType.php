<?php

namespace App\Form;

use App\Entity\Formateur;
use App\Entity\Matiere;
use App\Repository\MatiereRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class FormateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom')
            ->add('nom')
            ->add('email')
            // ->add('idmatiere', EntityType::class, [
            //     'class' => Matiere::class,
            //     'placeholder' => '-- Veuillez sélectionner un visiteur --',
            //     'query_builder' => function (MatiereRepository $matiereRepository) {
            //         return $matiereRepository->createQueryBuilder('m')
            //             ->orderBy('m.nommatiere', 'ASC');
            //     }
            // ]);
            
            ->add('idmatiere', EntityType::class, [
                'class' => Matiere::class,
                'choice_label' => 'nommatiere'
            ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formateur::class,
        ]);
    }
}
