<?php

namespace App\Form\Filter;

use Spiriit\Bundle\FormFilterBundle\Filter\Form\Type as Filters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezVousFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('statut', Filters\ChoiceFilterType::class, [
                'label'       => 'Statut',
                'required'    => false,
                'placeholder' => 'Tous',
                'choices'     => [
                    'En attente' => 'En attente',
                    'Confirmé'   => 'Confirmé',
                    'Terminé'    => 'Terminé',
                    'Annulé'     => 'Annulé',
                ],
            ])

            ->add('typeConsultation', Filters\ChoiceFilterType::class, [
                'label'       => 'Type',
                'required'    => false,
                'placeholder' => 'Tous',
                'choices'     => [
                    'Présentiel'       => 'Présentiel',
                    'Téléconsultation' => 'Téléconsultation',
                    'Urgence'          => 'Urgence',
                ],
            ])

            ->add('dateRendezVous', Filters\DateRangeFilterType::class, [
                'label'    => 'Période',
                'required' => false,
                'left_date_options'  => [
                    'label'  => 'Du',
                    'widget' => 'single_text',
                ],
                'right_date_options' => [
                    'label'  => 'Au',
                    'widget' => 'single_text',
                ],
            ])

            ->add('patient', Filters\TextFilterType::class, [
                'label'    => 'Patient',
                'required' => false,
                'attr'     => ['placeholder' => 'Nom...'],
                'apply_filter' => function ($qb, $field, $values) {
                    if (empty($values['value'])) {
                        return null;
                    }
                    $qb->andWhere(
                        $qb->expr()->orX(
                            $qb->expr()->like('p.nom', ':patient_search'),
                            $qb->expr()->like('p.prenom', ':patient_search')
                        )
                    );
                    $qb->setParameter('patient_search', '%' . $values['value'] . '%');
                    return true;
                },
            ])

            ->add('medecin', Filters\TextFilterType::class, [
                'label'    => 'Médecin',
                'required' => false,
                'attr'     => ['placeholder' => 'Dr...'],
                'apply_filter' => function ($qb, $field, $values) {
                    if (empty($values['value'])) {
                        return null;
                    }
                    $qb->andWhere(
                        $qb->expr()->orX(
                            $qb->expr()->like('m.nom', ':medecin_search'),
                            $qb->expr()->like('m.prenom', ':medecin_search')
                        )
                    );
                    $qb->setParameter('medecin_search', '%' . $values['value'] . '%');
                    return true;
                },
            ])

            ->add('hopital', Filters\TextFilterType::class, [
                'label'    => 'Hôpital',
                'required' => false,
                'attr'     => ['placeholder' => 'CHU...'],
                'apply_filter' => function ($qb, $field, $values) {
                    if (empty($values['value'])) {
                        return null;
                    }
                    $qb->andWhere('h.nom LIKE :hopital_search');
                    $qb->setParameter('hopital_search', '%' . $values['value'] . '%');
                    return true;
                },
            ]);
        
        // ✅ NE PAS AJOUTER scoreAI_min et scoreAI_max ici
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
        return 'filter_rdv';
    }
}