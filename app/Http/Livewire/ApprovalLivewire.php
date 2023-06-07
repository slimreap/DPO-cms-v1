<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApprovalLivewire extends Component
{
    public function render()
    {
        return view('livewire.approval-livewire');
    }

    public function toggleIsApproved($id)
    {
        $this->update([
            'selectedRows' => [$id],
            'is_approved' => true,
        ]);
    }
}
