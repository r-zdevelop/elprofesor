@props([
    'action',
    'method' => 'POST'
])

<div class="bg-white shadow sm:rounded-lg">
    <form action="{{ $action }}" method="POST" class="px-4 py-5 sm:p-6">
        @csrf
        @if($method !== 'POST')
            @method($method)
        @endif

        {{ $slot }}
    </form>
</div>
