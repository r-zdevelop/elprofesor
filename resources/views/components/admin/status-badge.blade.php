@props([
    'status'
])

@php
    $statusClasses = match($status) {
        'published' => 'bg-green-100 text-green-800',
        'draft' => 'bg-yellow-100 text-yellow-800',
        'active', true => 'bg-green-100 text-green-800',
        'inactive', false => 'bg-gray-100 text-gray-800',
        default => 'bg-gray-100 text-gray-800'
    };

    $displayStatus = is_bool($status) ? ($status ? 'Active' : 'Inactive') : ucfirst($status);
@endphp

<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClasses }}">
    {{ $displayStatus }}
</span>
