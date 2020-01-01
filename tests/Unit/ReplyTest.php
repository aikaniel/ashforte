<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();

        $this->reply = factory('App\Reply')->create();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_has_a_user()
    {

        $this->assertInstanceOf('App\User', $this->reply->user);
    }
}
