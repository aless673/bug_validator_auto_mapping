<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @package App\EventSubscriber
 */
class TestSubscriber implements EventSubscriberInterface
{
    public function __construct(ValidatorInterface $validator)
    {
    }

    public static function getSubscribedEvents()
    {
        return [];
    }
}
