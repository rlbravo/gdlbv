<?php

namespace Arrayan\GimnasioBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FitnessControllerTest extends WebTestCase
{
    public function testStart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/start');
    }

    public function testFeedback()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/feedback');
    }

    public function testAttainment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/attainment');
    }

}
