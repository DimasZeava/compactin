<div class="shadow-lg shadow-red-950 rounded-lg p-6 w-60">
    <img src="{{ $imageSrc }}" alt="{{ $titleProduct }}" class="w-full h-32 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="text-2xl font-semibold text-white mb-2">{{ $titleProduct }}</h3>
        <p class="text-white mb-4">{{ $category }}</p>
        <x-button>View Details</x-button>
    </div>
</div>