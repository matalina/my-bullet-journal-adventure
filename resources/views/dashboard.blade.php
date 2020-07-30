@extends('layouts.app')

@section('content')

<div class="flex">
    <div class="w-1/4 m-2">
        <div id="calendar" class="w-full d-block">
            <div class="flex">
                <x-button
                    type="button"
                >          
                    <i class="fal fa-angle-left"></i>
                </x-button>
                <h2 class="flex-1 text-center self-center">July 2020</h2>
                <x-button
                    type="button"
                >          
                    <i class="fal fa-angle-right"></i>
                </x-button>
            </div>
            <div class="grid grid-cols-7 gap-2">
                @for($i = 1; $i <= 31; $i++)
                     <div class="p-2 border border-gray-300 text-center">{{ $i }}</div>                 
                @endfor                     
            </div>
        </div>
        <div id="habits" class="w-full d-block mt-5">
            <h2>Habits</h2>
           
            <div class="mb-1">Habit to track 1</div>
            <div class="grid grid-cols-7 gap-2 mb-3">
                @for($i = 1; $i <= 7; $i++)
                     <div class="p-2 border border-gray-300 text-center"><i class="fal fa-check"></i></div>                 
                @endfor 
            </div>
            <div class="mb-1">Habit to track 2</div>
            <div class="grid grid-cols-7 gap-2 mb-3">
                @for($i = 1; $i <= 7; $i++)
                     <div class="p-2 border border-gray-300 text-center">&nbsp;</div>                 
                @endfor 
            </div>
            <div class="mb-1">Habit to track 3</div>
            <div class="grid grid-cols-7 gap-2 mb-3">
                @for($i = 1; $i <= 7; $i++)
                     <div class="p-2 border border-gray-300 text-center">&nbsp;</div>                 
                @endfor 
            </div>
        </div>
    </div>
    <div class="w-1/2 m-2">
        <h2>Thursday, July 30, 2020</h2>
        <form class="flex items-start">
            <div class="m-2">
                <div class="mb-1 text-sm text-gray-500">Signifiers</div>
                <div class="grid grid-flow-col grid-rows-6">
                    <div class="p-2"><i class="fal fa-sticky-note"></i> </div>
                    <div class="p-2"><i class="fal fa-dollar-sign"></i></div>
                    <div class="p-2"><i class="fas fa-exclamation"></i></div>
                    <div class="p-2"><i class="fal fa-star"></i></div>
                    <div class="p-2"><i class="fal fa-heart"></i></div>
                    <div class="p-2"><i class="fal fa-alarm-clock"></i></div>
                    <div class="p-2"><i class="fal fa-asterisk"></i></div>
                    <div class="p-2"><i class="fal fa-bell"></i></div>
                    <div class="p-2"><i class="fal fa-birthday-cake"></i></div>
                    <div class="p-2"><i class="fal fa-bolt"></i></div>
                    <div class="p-2"><i class="fal fa-bomb"></i></div>
                    <div class="p-2"><i class="fal fa-broom"></i></div>
                    <div class="p-2"><i class="fal fa-clock"></i></div>
                    <div class="p-2"><i class="fal fa-flag"></i></div>
                    <div class="p-2"><i class="fal fa-lightbulb-on"></i></div>
                    <div class="p-2"><i class="fal fa-phone-alt"></i></div>
                    <div class="p-2"><i class="fal fa-prescription-bottle"></i></div>
                    <div class="p-2"><i class="fal fa-poo"></i></div>
                    <div class="p-2"><i class="fas fa-question"></i></div>
                    <div class="p-2"><i class="fal fa-shopping-cart"></i></div>
                    <div class="p-2"><i class="fal fa-tag"></i></div>
                    <div class="p-2"><i class="fal fa-thumbtack"></i></div>
                    <div class="p-2"><i class="fal fa-trash"></i></div>
                    <div class="p-2"><i class="fal fa-bed"></i></div>
                    <div class="p-2"><i class="fal fa-gift"></i></div>
                    <div class="p-2"><i class="fal fa-heartbeat"></i></div>
                    <div class="p-2"><i class="fal fa-paperclip"></i></div>
                    <div class="p-2"><i class="fal fa-piggy-bank"></i></div>
                    <div class="p-2"><i class="fal fa-snooze"></i></div>
                    <div class="p-2"><i class="fal fa-utensils-alt"></i></div>
                    <div class="p-2"><i class="fal fa-glass"></i></div>
                    <div class="p-2"><i class="fal fa-walking"></i></div>
                    <div class="p-2"><i class="fal fa-washer"></i></div>
                    <div class="p-2"><i class="fal fa-receipt"></i></div>
                    <div class="p-2"><i class="fal fa-lock"></i></div>
                    <div class="p-2"><i class="fal fa-quote-left"></i></div>
                </div>
            </div>
            
            <div class="m-2">
                <div class="mb-1 text-sm text-gray-500 text-center">B</div>
                <div class="grid grid-cols-1">
                    <div class="p-2"><i class="fal fa-circle" title="event"></i></div>
                    <div class="p-2"><i class="fas fa-circle" title="task"></i></div>
                    <div class="p-2"><i class="fal fa-tilde" title="note"></i></div>
                    <div class="p-2"><i class="fal fa-check" title="habit"></i></div>
                </div>
            </div>
            
            <div class="flex-1 w-full m-2">
                <div class="mb-1 text-sm text-gray-500">Task/Event/Note</div>
                <textarea rows="5" class="form-textarea w-full"></textarea>
                <div class="text-right">
                    <x-button
                        type="button"          
                    >
                       <i class="fal fa-plus"></i> Add Bullet
                    </x-button>
                </div>
            </div>
            
        </form>
        <hr/>
        <h3>Daily Log</h3>
        <table class="table-auto">
            <thead>
                <tr>
                    <th>S</th>
                    <th>B</th>
                    <th class="text-left">Task/Event/Note</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td><i class="fas fa-circle"></i></td>
                    <td>Item to do</td>
                </tr>
                <tr>
                    <td><i class="fal fa-birthday-cake"></i></td>
                    <td><i class="fal fa-circle"></i></td>
                    <td>Happy Birthday to Me!</td>
                </tr>
                <tr>
                    <td><i class="fal fa-poo"></i></td>
                    <td><i class="fal fa-tilde"></i></td>
                    <td>Today has been a crappy day!</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><i class="fal fa-tilde"></i></td>
                    <td>dui id ornare arcu odio ut sem nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit sed vulputate mi</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="w-1/4 m-2">
        <h2>Index</h2>
        <ul id="index">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">2020</a>
                <ul>
                    <li>
                        <a href="#">June</a>
                        <ul>
                            <li>
                                <a href="#">Week 1</a>
                                <ul>
                                    <li><a href="#">May 30, 2020</a></li>
                                    <li><a href="#">June 1, 2020</a></li>
                                    <li><a href="#">June 2, 2020</a></li>
                                    <li><a href="#">June 3, 2020</a></li>
                                    <li><a href="#">June 4, 2020</a></li>
                                    <li><a href="#">June 5, 2020</a></li>
                                    <li><a href="#">June 6, 2020</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Habits</a>
                <ul>
                    <li><a href="#">Habit 1</a></li>
                    <li><a href="#">Habit 2</a></li>
                    <li><a href="#">Habit 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Project Collection</a>
            </li>
            <li>
                <a href="#">Book Collection</a>
            </li>
        </ul>
    </div>
</div>

@endsection
