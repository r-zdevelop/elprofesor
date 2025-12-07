@props([
    'title',
    'editRoute',
    'deleteRoute',
    'status' => null,
    'deleteConfirmMessage' => 'Are you sure you want to delete this item?'
])

<li>
    <div class="px-4 py-4 flex items-center sm:px-6">
        <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
            <div class="truncate">
                <div class="flex text-sm">
                    <p class="font-medium text-secondary truncate">{{ $title }}</p>
                    @isset($subtitle)
                        <p class="ml-1 flex-shrink-0 font-normal text-gray-500">
                            {{ $subtitle }}
                        </p>
                    @endisset
                </div>
                @isset($metadata)
                    <div class="mt-2 flex">
                        <div class="flex items-center text-sm text-gray-500">
                            {{ $metadata }}
                        </div>
                    </div>
                @endisset
            </div>
            <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                <div class="flex items-center space-x-4">
                    @if($status)
                        <x-admin.status-badge :status="$status" />
                    @endif
                    <a href="{{ $editRoute }}"
                       class="text-sm font-medium text-secondary hover:text-dark transition-colors duration-200">
                        Edit
                    </a>
                    <form action="{{ $deleteRoute }}" method="POST" class="inline"
                          onsubmit="return confirm('{{ $deleteConfirmMessage }}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-medium">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</li>
