<div id="calendar" class="w-full d-block">
    <div class="flex">
        <x-button
                type="button"
                wire:click="prev()"
        >
            <i class="fal fa-angle-left"></i>
        </x-button>
        <h2 class="flex-1 text-center self-center">{{ $month }} {{ $year }}</h2>
        <x-button
                type="button"
                wire:click="next()"
        >
            <i class="fal fa-angle-right"></i>
        </x-button>
    </div>
    <div class="grid grid-cols-7 gap-2">
        @for($i = 0; $i < $start; $i++)
            <div class="p-2 border border-gray-300 text-center">&nbsp;</div>
        @endfor
        @for($i = 1; $i <= $days; $i++)
            <div>
                @if($today == $year.'-'.$month.'-'.$i)
                <a
                    class="p-2 border border-blue-900 bg-blue-300 text-center text-blue-900"
                    href="{{ route('daily',['year' => $year, 'month' => $month, 'day' => $i]) }}"
                >
                    {{ $i }}
                </a>
                @else
                    <a
                        href="{{ route('daily',['year' => $year, 'month' => $month, 'day' => $i]) }}"
                        class="p-2 border border-blue-900 text-center"
                    >
                        {{ $i }}
                    </a>
                @endif
            </div>
        @endfor
            @for($i = 0; $i < $end; $i++)
                <div class="p-2 border border-gray-300 text-center">&nbsp;</div>
            @endfor
    </div>
</div>
