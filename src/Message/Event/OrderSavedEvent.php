<?php

namespace App\Message\Event;

class OrderSavedEvent
{
    public function __construct(private int|string $orderId)
    {
    }

    public function getOrderId(): int|string
    {
        return $this->orderId;
    }
}