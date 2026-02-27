<?php

namespace App\Form;

use App\Entity\Cycle;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CycleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
    $builder
    ->add('dateDebutM', DateType::class, [
        'widget' => 'single_text',
        'attr' => ['id' => 'cycle_start'] // <-- add this
    ])
    ->add('dateFinM', DateType::class, [
        'widget' => 'single_text',
        'attr' => ['id' => 'cycle_end'] // <-- add this
    ])
    ->add('user', EntityType::class, [
        'class' => User::class,
        'choice_label' => 'nom',
        'placeholder' => 'Sélectionner un utilisateur',
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cycle::class,
        ]);
    }
}
