<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateThreadsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        
    }

    /** @test */
    function test_guests_may_not_create_threads()
    {
        $this->get('/threads/create')
        ->assertRedirect('/login');

        $this->post('/threads')
        ->assertRedirect('/login');

    }


    /** @test */
    function test_an_authenticated_user_can_create_new_forum_threads()
    {
        // $this->actingAs(create('App\User'));
        $this->signIn();

        $thread = create('App\Thread');

        $this->post('/threads', $thread->toArray());

        $this->get($thread->path())
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }
}
