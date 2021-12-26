<?php

namespace App\Tests\Infrastructure\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerTest extends WebTestCase
{
    public function testIndexAdmin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/admin');
        $this->assertResponseStatusCodeSame(200);
    }
}
