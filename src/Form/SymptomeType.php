<?php
namespace App\Form;

use App\Entity\Symptome;
use App\Entity\Cycle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SymptomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Maux de tête' => 'maux_de_tete',
                    'Fatigue' => 'fatigue',
                    'Nausée' => 'nausee',
                    // ajoute tous tes symptômes ici
                ],
                'label' => 'Type de symptôme',
            ])
            ->add('intensite', ChoiceType::class, [
                'choices' => [
                    'Très légère 🌱' => 'Très légère 🌱',
                    'Légère 🙂' => 'Légère 🙂',
                    'Modérée 😐' => 'Modérée 😐',
                    'Forte 😣' => 'Forte 😣',
                    'Très forte 🔥' => 'Très forte 🔥',
                ],
                'label' => 'Intensité',
            ])
            ->add('dateObservation', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date d\'observation',
            ])
            ->add('cycle', EntityType::class, [
                'class' => Cycle::class,
                'choice_label' => function (Cycle $cycle) {
                    return $cycle->getDateDebutM() ? $cycle->getDateDebutM()->format('Y-m-d') : '';
                },
                'placeholder' => 'Sélectionner un cycle',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Symptome::class,
        ]);
    }
}