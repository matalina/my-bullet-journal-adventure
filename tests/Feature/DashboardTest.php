<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_shown_when_logged_in()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('dashboard'));

        $response->assertStatus(200);
    }

    public function test_dashboard_redirected_when_not_logged_in()
    {
        $response = $this->get(route('dashboard'));

        $response->assertRedirect(route('home'));
    }

    public function test_dashboard_contains_widgets()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('dashboard'))
            ->assertSeeLivewire('mini-calendar');
    }
}
