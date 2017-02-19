<?php
/**
 * prooph (http://getprooph.org/)
 *
 * @see       https://github.com/prooph/service-bus-symfony-bundle for the canonical source repository
 * @copyright Copyright (c) 2016 prooph software GmbH (http://prooph-software.com/)
 * @license   https://github.com/prooph/service-bus-symfony-bundle/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace ProophTest\Bundle\ServiceBus\DependencyInjection\Fixture\Model;

class AcmeUserEventListener
{
    private $lastEvent;

    public function __invoke(AcmeUserWasRegisteredEvent $event)
    {
        $this->lastEvent = $event;
    }

    public function onEvent(AcmeUserWasRegisteredEvent $event)
    {
        $this->lastEvent = $event;
    }

    public function lastEvent()
    {
        return $this->lastEvent;
    }
}
