<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Filament\Forms\Contracts\HasForms;

class SendOtp extends Component implements HasForms 
{
    use Forms\Concerns\InteractsWithForms; 

    public $email = '';

    public function mount(): void 
    {
        $this->form->fill();
    } 
 
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')

        ];
    }

    public function submit(): void
    {
        // ...
    }

    public function render(): View
    {
        return view('livewire.send-otp');
    }
}
