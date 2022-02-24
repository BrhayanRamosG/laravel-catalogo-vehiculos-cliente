<div class="mb-14 top-40 left-5 z-50">
    <select
        class="rounded-md border-sky-400 dark:border-sky-500 focus:border-sky-600 focus:ring focus:ring-sky-300 dark:focus:ring-sky-500 shadow-sm dark:bg-gray-700 dark:text-white"
        {!! $attributes !!}>
        <option select disabled value="">{{ $title }}</option>
        @foreach ($options as $key => $val)
            <option value="{{ $key }}">{{ $val }}</option>
        @endforeach
    </select>
</div>
