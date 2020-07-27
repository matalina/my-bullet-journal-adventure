@if($type == 'link')
<a 
    href="{{ $href }}"
    {{ $attributes->merge(['class' => $class]) }}
>
    {{ $slot }}
</a>
@elseif($type == 'button')
<button 
    href="{{ $href }}"
    {{ $attributes->merge(['class' => $class]) }}
>
    {{ $slot }}
</button>

@elseif($type == 'router-link')
<router-link 
    to="{{ $href }}"
    {{ $attributes->merge(['class' => $class]) }}
>
    {{ $slot }}
</router-link>
@endif