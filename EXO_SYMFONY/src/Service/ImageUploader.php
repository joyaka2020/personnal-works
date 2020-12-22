<?php

namespace App\Service;

use App\Entity\Movie;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{
    /**
     * Prend un objet UploadedFile qui représente un fichier envoyé par formulaire
     * et le déplace dans la cible demandé
     *
     * @param UploadedFile|null $image Le fichier image récupéré depuis un formulaire
     * @param string $folder Le dossier cible où on envoie l'image
     * @param string $filename Le nom du fichier à créer dans le dossier $folder
     * @return bool
     */
    public function moveImage(?UploadedFile $image, string $folder, $filename): bool
    {
        // Peut-être qu'on n'a pas d'image dans le champs, donc $image vaudrait null
        // On ne déplace le fichier que si $image est différent de null
        if ($image !== null) {
            // On déplace le fichier du dossier temporaire du systême vers le dossier /public/posters
            $image->move($folder, $filename);
            return true;
        }
        return false;
    }

    /**
     * Fonction spécifique pour envoyer le poster d'un film
     *
     * @param Form $form Le formulaire qui contient un champ `poster`
     * @param Movie $movie Le film dont on ajoute le poster
     * @return boolean On retourne le booléen retourné par moveImage()
     */
    public function movePoster(Form $form, Movie $movie): bool
    {
        return $this->moveImage(
            $form->get('poster')->getData(),
            'posters',
            $movie->getId() . '.jpg'); 
    }
}