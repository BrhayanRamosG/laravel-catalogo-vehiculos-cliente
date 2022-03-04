{{-- <div class="left-5 z-50"> --}}
    <label class="dark:text-white">{{ $title }}</label>
    <select
        class="rounded-md border-sky-400 dark:border-sky-500 focus:border-sky-600 focus:ring focus:ring-sky-300 dark:focus:ring-sky-500 shadow-sm dark:bg-gray-700 dark:text-white"
        {!! $attributes !!}>

        @foreach ($options as $key => $val)
            @if ($key == 0)
                <option select value="{{ $key }}">{{ $val }}</option>
            @endif
            @if ($key > 0)
                <option value="{{ $key }}">{{ $val }}</option>
            @endif
        @endforeach
    </select>
{{-- </div> --}}
