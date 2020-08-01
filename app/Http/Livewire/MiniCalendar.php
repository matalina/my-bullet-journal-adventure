<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class MiniCalendar extends Component
{
    public $month;
    public $year;
    public $start;
    public $days;
    public $end;
    public $today;

    public function mount()
    {
        $date = Carbon::now();
        $this->month = $date->monthName;
        $this->year = $date->year;
        $this->today = $date->day;
    }

    public function render()
    {
        $date = Carbon::parse($this->month.' 1,'.$this->year);
        $this->start = $date->dayOfWeek;
        $this->days = $date->daysInMonth;

        $last_week_day_count = ($this->start + $this->days) % 7;
        if($last_week_day_count == 0) {
            $this->end = 0;
        }
        else {
            $this->end = 7 - $last_week_day_count;
        }

        return view('livewire.mini-calendar');
    }

    public function prev()
    {
        $date = Carbon::parse($this->month.' 1,'.$this->year);
        $date->subMonth();
        $this->month = $date->monthName;
        $this->year = $date->year;
    }

    public function next()
    {
        $date = Carbon::parse($this->month.' 1,'.$this->year);
        $date->addMonth();
        $this->month = $date->monthName;
        $this->year = $date->year;
    }
}
