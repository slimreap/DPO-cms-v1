<x-layouts.filamentlayout>
<form wire:submit.prevent="sendotp">
    {{ $this->form }}

    <button type="submit">
        Submit
    </button>
</form>

</x-layouts.filamentlayout>