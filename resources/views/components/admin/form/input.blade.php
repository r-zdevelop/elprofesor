@props([
    'label',
    'name',
    'type' => 'text',
    'required' => false,
    'value' => null,
    'placeholder' => null,
    'colSpan' => 'col-span-6'
])

<div class="{{ $colSpan }}">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <input type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           @if($required) required @endif
           value="{{ old($name, $value) }}"
           @if($placeholder) placeholder="{{ $placeholder }}" @endif
           class="mt-1 focus:ring-secondary focus:border-secondary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error($name) border-red-500 @enderror">
    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
