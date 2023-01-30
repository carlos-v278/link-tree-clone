<?php

namespace App\EventListener;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class UserSubscriber implements EventSubscriberInterface
{
    public function getSubscribedEvents(): array
    {
        return [
            Events::prePersist
        ];
    }
    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        if (!$entity instanceof User) {
            return;
        }
        $firstName = $entity->getFirstName();
        $lastName = $entity->getLastname();
        $id = $entity->getId();
        $slug = $id . '-' . $firstName . '-' . $lastName;
        $entity->setSlug(strtolower($slug));
    }
}
