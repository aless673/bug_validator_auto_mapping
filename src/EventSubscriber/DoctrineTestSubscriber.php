<?php

namespace App\EventSubscriber;

use Doctrine\Common\EventSubscriber;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @package App\EventSubscriber
 */
class DoctrineTestSubscriber implements EventSubscriber
{
    public function __construct(ValidatorInterface $validator)
    {
    }

    public function getSubscribedEvents()
    {
        return [
        ];
    }
}
