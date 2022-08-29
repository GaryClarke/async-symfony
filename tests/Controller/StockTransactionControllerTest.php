<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StockTransactionControllerTest extends WebTestCase
{

    public function testBuyStocks(): void
    {
        $client = static::createClient();

        $client->request('GET', '/buy');

        $this->assertResponseIsSuccessful();

        $transport = $this->getContainer()->get('messenger.transport.async');
        $this->assertCount(1, $transport->getSent());
    }
}