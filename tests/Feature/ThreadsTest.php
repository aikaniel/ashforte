<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_all_threads()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');
        $response->assertSee($thread->title); 
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_read_a_single_thread()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads/'. $thread->id);
        $response->assertSee($thread->title); 
    }
}
