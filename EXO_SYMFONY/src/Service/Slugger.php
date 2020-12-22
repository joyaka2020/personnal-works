<?php

namespace App\Service;

use App\Entity\Movie;
use Symfony\Component\String\Slugger\SluggerInterface;

class Slugger
{
    private $symfonySlugger;

    public function __construct(SluggerInterface $symfonySlugger)
    {
        $this->symfonySlugger = $symfonySlugger;
    }

    /**
     * Create a slug from a string
     *
     * @return string
     */
    public function slugify(string $toSlug): string
    {
        return strtolower($this->symfonySlugger->slug($toSlug));
        // return preg_replace('/[^a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*/', '-', strtolower($toSlug));
    }

    /**
     * Create a slug from the title in $movie and sets it in its $slug property
     *
     * @param Movie $movie
     * @return void
     */
    public function movieCreateSlug(Movie $movie): void
    {
        $title = $movie->getTitle();
        $slug = $this->slugify($title);
        $movie->setSlug($slug);
    }
}
