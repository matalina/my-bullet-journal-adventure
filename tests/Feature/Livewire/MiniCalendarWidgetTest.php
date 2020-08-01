<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\MiniCalendar;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class MiniCalendarWidgetTest extends TestCase
{
    use RefreshDatabase;
    public function test_widget_loads()
    {
        $date = now();
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test(MiniCalendar::class)
            ->assertSee($date->format('F Y'));
    }

    public function test_prev_changes_date()
    {
        $date = Carbon::now()->subMonth();
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test(MiniCalendar::class)
            ->call('prev')
            ->assertSee($date->format('F Y'));
    }

    public function test_next_changes_date()
    {
        $date = Carbon::now()->addMonth();
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test(MiniCalendar::class)
            ->call('next')
            ->assertSee($date->format('F Y'));
    }

    public function test_widget_31_days_correctly()
    {
        $date = Carbon::parse('July 1, 2020');
        $start = 3;
        $days = 31;
        $end = 1;
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test(MiniCalendar::class)
            ->set('month',$date->monthName)
            ->set('year',$date->year)
            ->assertSet('start',$start)
            ->assertSet('days',$days)
            ->assertSet('end',$end);
    }

    public function test_widget_last_day_of_month_on_saturday_correctly()
    {
        $date = Carbon::parse('Feb 1, 2020');
        $start = 6;
        $days = 29;
        $end = 0;
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test(MiniCalendar::class)
            ->set('month',$date->monthName)
            ->set('year',$date->year)
            ->assertSet('start',$start)
            ->assertSet('days',$days)
            ->assertSet('end',$end);
    }

    public function test_widget_first_day_of_month_on_sunday_correctly()
    {
        $date = Carbon::parse('March 1, 2020');
        $start = 0;
        $days = 31;
        $end = 4;
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test(MiniCalendar::class)
            ->set('month',$date->monthName)
            ->set('year',$date->year)
            ->assertSet('start',$start)
            ->assertSet('days',$days)
            ->assertSet('end',$end);
    }

    public function test_widget_has_today()
    {
        $date = Carbon::now();
        $day = $date->day;
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test(MiniCalendar::class)
            ->assertSet('today', $day);
    }
}
