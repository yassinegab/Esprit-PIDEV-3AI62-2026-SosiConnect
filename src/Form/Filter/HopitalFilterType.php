<?php

namespace App\Form\Filter;

use Spiriit\Bundle\FormFilterBundle\Filter\Form\Type as Filters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HopitalFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', Filters\TextFilterType::class, [
                'label'    => 'Nom',
                'required' => false,
            ])

            ->add('adresse', Filters\TextFilterType::class, [
                'label'    => 'Adresse',
                'required' => false,
            ])

            ->add('ville', Filters\ChoiceFilterType::class, [
                'label'       => 'Ville',
                'required'    => false,
                'placeholder' => 'Toutes',
                'choices'     => [
                    'Tunis'    => 'Tunis',
                    'Sfax'     => 'Sfax',
                    'Sousse'   => 'Sousse',
                    'Kairouan' => 'Kairouan',
                    'Bizerte'  => 'Bizerte',
                    'Gabès'    => 'Gabès',
                    'Ariana'   => 'Ariana',
                    'Gafsa'    => 'Gafsa',
                ],
            ])

            ->add('type', Filters\ChoiceFilterType::class, [
                'label'       => 'Type',
                'required'    => false,
                'placeholder' => 'Tous',
                'choices'     => [
                    'Public'       => 'public',
                    'Privé'        => 'prive',
                    'Centre'       => 'centre',
                    'Polyclinique' => 'polyclinique',
                ],
            ])

            ->add('serviceUrgenceDispo', Filters\ChoiceFilterType::class, [
                'label'       => 'Urgences',
                'required'    => false,
                'placeholder' => 'Tous',
                'choices'     => [
                    'Avec urgences' => true,
                    'Sans urgences' => false,
                ],
            ])

            ->add('specialites', Filters\TextFilterType::class, [
                'label'    => 'Spécialité',
                'required' => false,
            ]);
        
        // ✅ NE PAS AJOUTER capacite_min et capacite_max ici
        // Ils seront gérés directement dans le contrôleur
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'method'            => 'GET',
            'csrf_protection'   => false,
            'validation_groups' => ['filtering'],
            'allow_extra_fields' => true,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'filter_hopital';
    }
}