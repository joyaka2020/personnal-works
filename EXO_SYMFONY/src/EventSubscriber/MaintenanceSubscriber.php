<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class MaintenanceSubscriber implements EventSubscriberInterface
{
    public function onKernelResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
        $content = $response->getContent();
        // dd($content);

        $content = str_replace('<body>', '<body><div class="alert alert-danger">Maintenance prévue jeudi 17 décembre à 13h00</div>', $content);

        $response->setContent($content);

        // Ça y est on a fini, on a intercepté l'objet Response et on l'a modifié avant de l'envoyer au client
        // BONUS : On pourrait rendre ce message optionnel mais on ne corrige pas ce bonus aujourd'hui
        // Cependant, une piste pour s'en servir est expliquée ici : https://symfony.com/doc/current/configuration.html#configuring-environment-variables-in-env-files
    }

    public static function getSubscribedEvents()
    {
        return [
            'kernel.response' => 'onKernelResponse',
        ];
    }
}
