<form wire:submit.prevent="authenticate" class="space-y-8">
    {{ $this->form }}
    <div class="w-full flex justify-center underline"><a class="mx-auto" href="{{route('sendotp')}}">reset password</a></div>
    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>
</form>
