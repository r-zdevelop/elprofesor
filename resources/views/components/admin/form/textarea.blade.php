@props([
    'label',
    'name',
    'required' => false,
    'value' => null,
    'rows' => 3,
    'colSpan' => 'col-span-6'
])

<div class="{{ $colSpan }}">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <textarea name="{{ $name }}"
              id="{{ $name }}"
              rows="{{ $rows }}"
              @if($required) required @endif
              class="mt-1 focus:ring-secondary focus:border-secondary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error($name) border-red-500 @enderror">{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
