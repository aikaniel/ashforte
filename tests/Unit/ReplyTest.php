<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ReplyTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_has_a_user()
    {
        $reply = factory('App\Reply')->create();

        $this->assertInstanceOf('App\User', $reply->user);
    }
}
