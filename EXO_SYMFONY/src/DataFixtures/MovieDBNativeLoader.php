<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator as FakerGenerator;
use Nelmio\Alice\Loader\NativeLoader;
// use Xylis\FakerCinema\Provider\Character as CharacterProvider;
// use Xylis\FakerCinema\Provider\Movie as MovieProvider;
// use Xylis\FakerCinema\Provider\Person as PersonProvider;

class MovieDBNativeLoader extends NativeLoader
{
    protected function createFakerGenerator(): FakerGenerator
    {
        $generator = Factory::create('fr_FR');

        // Je comptais utiliser xylis/faker-cinema-providers pour ajouter des providers custom
            // On ajoute les providers qui proviennent de 
        // https://packagist.org/packages/xylis/faker-cinema-providers
        // $generator->addProvider(new CharacterProvider($generator));
        // $generator->addProvider(new MovieProvider($generator));
        // $generator->addProvider(new PersonProvider($generator));

        // Maintenant, dans fixtures.yaml, on peut utilise les noms des fonctions de FakerCinema

        /*
        App\Entity\Movie:
            movie_{1..70}:
                title (unique): '<movie()>'
                genres: '<numberBetween(1, 4)>x @genre_*'

        App\Entity\Genre:
            genre_{1..35}:
                name (unique): '<movieGenre()>'
        */

        return $generator;
    }
}