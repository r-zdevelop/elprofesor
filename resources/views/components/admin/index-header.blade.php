@props([
    'title',
    'createRoute',
    'createLabel' => 'Create'
])

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-900">{{ $title }}</h1>
    <a href="{{ $createRoute }}"
       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-secondary hover:bg-dark transition-colors duration-200">
        {{ $createLabel }}
    </a>
</div>
