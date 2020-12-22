<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents; // Contient les noms des événements dans des constantes

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, [
                'choices'  => [
                    'Administrateur' => 'ROLE_ADMIN',
                    'Utilisateur' => 'ROLE_USER',
                ],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les deux mots de passe doivent être identiques.',
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répétez le mot de passe'],
                'mapped' => false,
            ])
            ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
                $form = $event->getForm();
                $user = $event->getData();

                // Si on n'a pas affaire à un $user neuf, on a un ID 
                // et on souhaite rendre le champs plainPassword non obligatoire
                // Ça veut qu'on autorise le reset du password par un admin
                if ($user->getId() !== null) {
                    // On souhaite changer une seule option dans le champs et on devra
                    // le supprimer pour le remettre ensuite
                    $form
                        ->remove('plainPassword')
                        ->add('plainPassword', RepeatedType::class, [
                            'type' => PasswordType::class,
                            'required' => false,
                            'invalid_message' => 'Les deux mots de passe doivent être identiques.',
                            'first_options'  => ['label' => 'Mot de passe'],
                            'second_options' => ['label' => 'Répétez le mot de passe'],
                            'mapped' => false,
                        ])
                    ;
                }
            })
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
