@props([
    'type' => 'text', 'name', 'placeholder',
])

<input type="{{$type}}"
       name="{{$name}}"
       placeholder="{{$placeholder}}"
    {{ $attributes->merge([
        'class' => 'mt-2 w-1/4 h-8'
    ]) }}
>