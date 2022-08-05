<?php

namespace App\MessageHandler\Command;

use App\Message\Command\SaveOrder;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SaveOrderHandler implements MessageHandlerInterface
{
    public function __invoke(SaveOrder $saveOrder)
    {
        // Save an order to the database
        $orderId = 123;

        echo 'Order being saved' . PHP_EOL;

        // Dispatch an event message on an event bus
    }
}