@props(['active'])

@php
$classes = ($active ?? false)
            ? ' block pl-3 pr-4 py-2 border-l-4 border-sky-400 text-base font-medium text-sky-700 dark:text-white bg-sky-50 dark:bg-sky-700 focus:outline-none focus:text-sky-800 focus:bg-sky-100 focus:border-sky-700 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-white hover:text-sky-800 hover:bg-sky-50 dark:hover:bg-sky-700 hover:border-sky-300 focus:outline-none focus:text-sky-800 focus:bg-sky-50 focus:border-sky-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
