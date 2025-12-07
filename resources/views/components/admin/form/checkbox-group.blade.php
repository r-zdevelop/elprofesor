@props([
    'label',
    'name',
    'items' => [],
    'selectedIds' => [],
    'gridCols' => 'grid-cols-2 sm:grid-cols-3',
    'colSpan' => 'col-span-6'
])

<div class="{{ $colSpan }}">
    <label class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-2 grid {{ $gridCols }} gap-2">
        @foreach($items as $item)
            <div class="flex items-center">
                <input type="checkbox"
                       name="{{ $name }}[]"
                       value="{{ $item->id }}"
                       id="{{ $name }}-{{ $item->id }}"
                       {{ in_array($item->id, old($name, $selectedIds)) ? 'checked' : '' }}
                       class="h-4 w-4 text-secondary focus:ring-secondary border-gray-300 rounded">
                <label for="{{ $name }}-{{ $item->id }}" class="ml-2 block text-sm text-gray-900">
                    {{ $item->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
