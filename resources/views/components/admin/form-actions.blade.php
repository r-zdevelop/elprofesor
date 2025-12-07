@props([
    'cancelRoute',
    'submitLabel' => 'Submit'
])

<div class="mt-6 flex items-center justify-end space-x-3">
    <a href="{{ $cancelRoute }}"
       class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary transition-colors duration-200">
        Cancel
    </a>
    <button type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-secondary hover:bg-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary transition-colors duration-200">
        {{ $submitLabel }}
    </button>
</div>
