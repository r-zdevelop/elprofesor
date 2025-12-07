@props([
    'label',
    'name',
    'options' => [],
    'required' => false,
    'value' => null,
    'colSpan' => 'col-span-6 sm:col-span-3'
])

<div class="{{ $colSpan }}">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <select name="{{ $name }}"
            id="{{ $name }}"
            @if($required) required @endif
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-secondary focus:border-secondary sm:text-sm">
        {{ $slot }}
    </select>
</div>
