@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'dark:bg-gray-800 border-sky-400 dark:border-sky-500 focus:border-sky-600 focus:ring focus:ring-sky-300 dark:focus:ring-sky-500 rounded-md shadow-sm',
]) !!}>
