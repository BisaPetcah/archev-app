@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-orange-200 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50 shadow-sm rounded-lg']) !!}>
