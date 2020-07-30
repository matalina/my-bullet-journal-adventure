<?php

namespace Tests\Feature;

use App\Models\Social;
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
        $response->assertSee($user->name);
        $response->assertSee($user->email);
    }

    public function test_view_profile_page_with_no_connect_social()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('<i class="fab fa-twitter"></i> Connect', false);
        $response->assertSee('<i class="fab fa-google"></i> Connect', false);
        $response->assertSee('<i class="fab fa-facebook"></i> Connect', false);
        $response->assertSee('<i class="fab fa-github"></i> Connect', false);
    }

    public function test_view_profile_page_with_google_connected()
    {
        $social = factory(Social::class)->create([
            'type' => 'google',
            'user_id' => factory(User::class),
        ]);

        $user = User::find($social->user_id);

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('<i class="fab fa-twitter"></i> Connect', false);
        $response->assertSee('<i class="fab fa-google"></i> Connected', false);
        $response->assertSee('<i class="fab fa-facebook"></i> Connect', false);
        $response->assertSee('<i class="fab fa-github"></i> Connect', false);
    }

    public function test_view_profile_page_with_twitter_connected()
    {
        $social = factory(Social::class)->create([
            'type' => 'twitter',
            'user_id' => factory(User::class),
        ]);

        $user = User::find($social->user_id);

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('<i class="fab fa-twitter"></i> Connected', false);
        $response->assertSee('<i class="fab fa-google"></i> Connect', false);
        $response->assertSee('<i class="fab fa-facebook"></i> Connect', false);
        $response->assertSee('<i class="fab fa-github"></i> Connect', false);
    }

    public function test_view_profile_page_with_facebook_connected()
    {
        $social = factory(Social::class)->create([
            'type' => 'facebook',
            'user_id' => factory(User::class),
        ]);

        $user = User::find($social->user_id);

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('<i class="fab fa-twitter"></i> Connect', false);
        $response->assertSee('<i class="fab fa-google"></i> Connect', false);
        $response->assertSee('<i class="fab fa-facebook"></i> Connected', false);
        $response->assertSee('<i class="fab fa-github"></i> Connect', false);
    }

    public function test_view_profile_page_with_github_connected()
    {
        $social = factory(Social::class)->create([
            'type' => 'github',
            'user_id' => factory(User::class),
        ]);

        $user = User::find($social->user_id);

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('<i class="fab fa-twitter"></i> Connect', false);
        $response->assertSee('<i class="fab fa-google"></i> Connect', false);
        $response->assertSee('<i class="fab fa-facebook"></i> Connect', false);
        $response->assertSee('<i class="fab fa-github"></i> Connected', false);
    }

    public function test_view_profile_page_with_two_connected()
    {
        $social = factory(Social::class)->create([
            'type' => 'github',
            'user_id' => factory(User::class),
        ]);

        $user = User::find($social->user_id);

        $social = factory(Social::class)->create([
            'type' => 'google',
            'user_id' => $user->id,
        ]);

        $response = $this->actingAs($user)
            ->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('<i class="fab fa-twitter"></i> Connect', false);
        $response->assertSee('<i class="fab fa-google"></i> Connected', false);
        $response->assertSee('<i class="fab fa-facebook"></i> Connect', false);
        $response->assertSee('<i class="fab fa-github"></i> Connected', false);
    }
}
