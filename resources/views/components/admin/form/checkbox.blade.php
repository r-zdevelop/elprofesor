@props([
    'label',
    'name',
    'value' => '1',
    'checked' => false,
    'colSpan' => 'col-span-6 sm:col-span-3'
])

<div class="{{ $colSpan }}">
    <div class="flex items-center h-full">
        <input type="checkbox"
               name="{{ $name }}"
               id="{{ $name }}"
               value="{{ $value }}"
               {{ old($name, $checked) ? 'checked' : '' }}
               class="h-4 w-4 text-secondary focus:ring-secondary border-gray-300 rounded">
        <label for="{{ $name }}" class="ml-2 block text-sm text-gray-900">
            {{ $label }}
        </label>
    </div>
</div>
