<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
// use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            // null permet de ne pas précser de type de champs pour qu'on puisse envoyer
            // des options à l'input en troisième argument
            ->add('genres', null, [
                'multiple' => true, // Permet de préciser qu'on autorise la sélection de plusieurs Genres
                'expanded' => true, // Transforme un <select> en plusieurs checkbox
            ])
            ->add('poster', FileType::class, [
                'mapped' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
