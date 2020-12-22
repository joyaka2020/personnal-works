<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class UserVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, ['ADD', 'EDIT', 'DELETE'])
            && $subject instanceof User;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $connectedUser = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$connectedUser instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case 'ADD':
                // On autorise l'ajout que pour un Administrateur
                if (in_array('ROLE_ADMIN', $connectedUser->getRoles())) {
                    return true;
                }
                break;
            case 'EDIT':
                // On autorise l'édition pour un Administrateur
                if (in_array('ROLE_ADMIN', $connectedUser->getRoles())) {
                    return true;
                }
                // Sinon, on autorise l'édition si l'utilisateur connecté est le même que l'utilisateur à modifier
                if ($connectedUser === $subject) {
                    return true;
                }
                break;
            case 'DELETE':
                // On autorise la suppression pour un Administrateur
                // sauf s'il tente de se supprimer lui-même
                if (in_array('ROLE_ADMIN', $connectedUser->getRoles()) && $connectedUser != $subject) {
                    return true;
                }
                break;
        }

        // Version alternative du switch sans répétition de code
        switch ($attribute) {
            case 'EDIT':
                if ($connectedUser === $subject) {
                    return true;
                }
            case 'ADD':
                if (in_array('ROLE_ADMIN', $connectedUser->getRoles())) {
                    return true;
                }
                break;
            case 'DELETE':
                if (in_array('ROLE_ADMIN', $connectedUser->getRoles()) && $connectedUser != $subject) {
                    return true;
                }
                break;
        }

        return false;
    }
}
