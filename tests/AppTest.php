<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class AppTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A home page test.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->get('/');
        $this->assertResponseStatus(200);
    }

    public function testDbPage()
    {
        $this->get('/db');
        $this->assertResponseStatus(200);
    }

    public function testDomainsStoreAndShowPage()
    {
        $this->post('/domains', ['name' => 'https://hexlet.io']);
        $this->seeInDatabase('domains', ['name' => 'https://hexlet.io']);

        $this->get('/domains/1');
        $this->assertResponseStatus(200);
    }
}
