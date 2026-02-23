<?php

namespace App\Form;

use App\Entity\Front_office\DossierMedical;
use App\Entity\Front_office\User;
use App\Enum\UserRole;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossierMedicalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('antecedentsMedicaux', TextareaType::class, [
                'label' => 'Antécédents Médicaux',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg',
                    'rows' => 4,
                    'placeholder' => 'Décrivez les antécédents médicaux du patient...'
                ]
            ])
            ->add('maladiesChroniques', TextareaType::class, [
                'label' => 'Maladies Chroniques',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg',
                    'rows' => 4,
                    'placeholder' => 'Listez les maladies chroniques...'
                ]
            ])
            ->add('allergies', TextareaType::class, [
                'label' => 'Allergies',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg',
                    'rows' => 3,
                    'placeholder' => 'Décrivez les allergies connues...'
                ]
            ])
            ->add('traitementsEnCours', TextareaType::class, [
                'label' => 'Traitements en Cours',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg',
                    'rows' => 4,
                    'placeholder' => 'Listez les traitements actuels avec dosages...'
                ]
            ])
            ->add('diagnostics', TextareaType::class, [
                'label' => 'Diagnostics',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg',
                    'rows' => 4,
                    'placeholder' => 'Décrivez les diagnostics établis...'
                ]
            ])
            ->add('notesMedecin', TextareaType::class, [
                'label' => 'Notes du Médecin',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg',
                    'rows' => 4,
                    'placeholder' => 'Remarques et observations du médecin...'
                ]
            ])
            ->add('objectifSante', TextareaType::class, [
                'label' => 'Objectif de Santé',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg',
                    'rows' => 3,
                    'placeholder' => 'Définissez les objectifs de santé...'
                ]
            ])
            ->add('niveauActivite', ChoiceType::class, [
                'label' => 'Niveau d\'Activité',
                'required' => false,
                'choices' => [
                    'Sédentaire' => 'Sédentaire',
                    'Modéré' => 'Modéré',
                    'Actif' => 'Actif',
                    'Très Actif' => 'Très Actif'
                ],
                'placeholder' => 'Choisissez un niveau',
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg'
                ]
            ]);
            
            // ✅ OPTIONNEL : Champ médecin (commenté car pas dans votre entité DossierMedical)
            // Si vous voulez ajouter un médecin responsable, il faut d'abord ajouter
            // la relation dans l'entité DossierMedical
            /*
            ->add('medecin', EntityType::class, [
                'label' => 'Médecin Responsable',
                'class' => User::class,
                'choice_label' => function(User $user) {
                    return $user->getPrenom() . ' ' . $user->getNom();
                },
                'placeholder' => 'Sélectionner un médecin',
                'required' => false,
                'attr' => [
                    'class' => 'w-full px-4 py-2 border border-gray-300 rounded-lg'
                ],
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.userRole = :role')  // ✅ CORRECTION: userRole au lieu de role
                        ->setParameter('role', UserRole::MEDECIN)
                        ->orderBy('u.prenom', 'ASC');
                }
            ]);
            */
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DossierMedical::class,
        ]);
    }
}