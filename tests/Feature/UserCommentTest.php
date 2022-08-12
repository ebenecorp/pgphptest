<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/1');

        $response->assertStatus(200);
    }
   
    public function test_get_request_returns_view()
    {
        $response = $this->get('/1');

        $response->assertViewIs('index');
        
    }

    public function test_user_comment_save_comment()
    {
        $response = $this->postJson('/api/comments', [
            'comments' => "Test comments ",
            'id' => 1,
            'password' => "720DF6C2482218518FA20FDC52D4DED7ECC043AB"
        ]);

        $response->assertStatus(200);
        
    }
}
