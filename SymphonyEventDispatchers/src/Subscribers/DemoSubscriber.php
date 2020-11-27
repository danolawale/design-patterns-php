<?php
namespace EventDispatchers\Subscribers;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use EventDispatchers\Events\DemoEvent;

class DemoSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            DemoEvent::NAME => 'onDemoEvent',
        );
    }

    public function onDemoEvent(DemoEvent $event)
    {
      // fetch event information here
      echo "DemoListener is called!\n";
      echo "The value of the foo is :".$event->getFoo()."\n";
    }
}
