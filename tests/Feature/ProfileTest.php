<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \Mockery;

use \App\Models\User;

class ProfileTest extends TestCase
{   
    use RefreshDatabase;
    
    public function test_view_profile_page_not_logged_in()
    {
        $response = $this->get('/profile');

        $response->assertRedirect(route('home'));
    }
    
    public function test_view_profile_page_success()
    {
        $user = factory(User::class)->create();
        
        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('Profile');
        $response->assertSee($user->name);
        $response->assertSee($user->email);
    }
}
