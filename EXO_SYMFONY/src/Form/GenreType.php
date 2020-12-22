<?php

namespace App\Form;

use App\Entity\Genre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class GenreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champs ne peut être vide !',
                    ]),
                    new Length([
                        'min' => 4,
                        'minMessage' => 'Ce nom est trop court, il faut au moint {{ limit }} caractères.'
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le nom du genre ne doit contenir que des lettres',
                    ]),
                ],
                'help' => 'Entrez un genre de film que vous connaissez et qui n\'existe pas dans la BDD',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Genre::class,
        ]);
    }
}
