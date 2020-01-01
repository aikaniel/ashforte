<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    use RefreshDatabase;

    protected $thread;

    public function setUp(): void
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_thread_has_replies()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_thread_has_a_creator()
    {
        $this->assertInstanceOf('App\User', $this->thread->user);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_thread_can_add_a_reply()
    {
        $this->thread->addReply([
            'body' => 'Foobar'
            , 'user_id' => 1
        ]);

        $this->assertCount(1, $this->thread->replies);
    }
}