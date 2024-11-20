<button {{ $attributes->merge(['class' => 'bg-red-600 hover:bg-red-800 active:bg-red-900 text-white font-bold py-3 px-6 rounded mt-10 transition duraction-150 ease-in-out']) }}>
    {{ $slot }}
</button>