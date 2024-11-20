<a {{ $attributes->merge(['class' => 'text-md font-semibold text-white hover:text-red-600 p-5 transition duration-300 fade-in-out']) }}
    href="{{ $attributes->get('href', '#') }}">
    {{ $slot }}
</a>
