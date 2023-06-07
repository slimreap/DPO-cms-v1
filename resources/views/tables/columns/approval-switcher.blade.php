<div>
    {{ $getState() }}
</div>

<div class="flex items-center">
    <button wire:click="dispatchFormEvent('approvalSwitcher')" type="button" class="relative inline-flex items-center h-6 rounded-full w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        <span class="sr-only">Toggle</span>
        <span class="absolute h-5 w-5 rounded-full bg-white border-2 border-gray-300"></span>
        <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-gray-300"></span>
        @if ($record)
            <span aria-hidden="true" class="translate-x-5 inline-block h-5 w-5 rounded-full bg-blue-500 shadow transform ring-0 transition ease-in-out duration-200"></span>
        @endif
    </button>
    <span class="ml-3">{{ $record ? 'Enabled' : 'Disabled' }}</span>
</div>
