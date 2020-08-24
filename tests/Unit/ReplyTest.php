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
     * @test
     */
    public function replies_have_a_user()
    {

        $this->assertInstanceOf('App\User', $this->reply->user);
    }
}
