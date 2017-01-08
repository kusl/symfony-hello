<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LuckyControllerTest extends WebTestCase
{
    public function testNumber()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lucky/number');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
