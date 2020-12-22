<?php

namespace App\Security\Voter;

use App\Entity\Movie;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class MovieVoter extends Voter
{
    /**
     * supports() répond un booléen indiquant si la classe de Voter prend en charge
     * le droit demandé, $attribute, sur l'objet demandé, $subject
     * Si supports() répond TRUE, la méthode voteOnAttribute est exécutée
     */
    protected function supports($attribute, $subject)
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, ['ADD', 'EDIT', 'DELETE'])
            && $subject instanceof Movie;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case 'ADD':
                // logic to determine if the user can ADD
                // return true or false

                // On souhaite autoriser l'ajout par un ROLE_USER du lundi au mercredi
                // Si l'utilisateur est un ROLE_ADMIN, on autorise toujours l'ajout d'un film
                if (in_array('ROLE_ADMIN', $user->getRoles())) {
                    // Si ROLE_ADMIN fait parti des rôles de l'utilisateur connecté, on répond TRUE
                    return true;
                }

                // On vérifie quel jour de la semaine on est
                $dateNow = new \DateTime();
                if ($dateNow->format('N') > 3) {
                    // N retourne un entier : 1 (pour Lundi) à 7 (pour Dimanche)
                    // Si on obtient 1, 2 ou 3 alors on autorise l'ajout
                    return true;
                }
                break;
            case 'EDIT':
            case 'DELETE':
                // logic to determine if the user can EDIT or DELETE
                // return true or false
                break;
        }

        return false;
    }
}
