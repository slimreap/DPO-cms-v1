<?php

namespace App\Tables\Columns;

use App\Models\Processes;
use Filament\Tables\Columns\Column;

class ApprovalSwitcher extends Column
{
    protected string $view = 'tables.columns.approval-switcher';

    public $status;

    public function approvalSwitcher ($record) {
        $this->status = $record->is_approved;
        // dd($isApproved);
        if ($this->status) {
            // Check if any other row is already set to true
            // dd($isApproved);
            // $otherApprovedRow = Processes::query()
            //     ->where('id', '<>', $record->id)
            //     ->where('is_approved', true)
            //     ->first();  
            //     // dd($otherApprovedRow);
            // if ($otherApprovedRow) {
            //     //   dd($otherApprovedRow);
            //     // If there is another row set to true, update it to false
            //     $record->where('id','<>', $record->id)
            //     ->update(['is_approved' => false]);                    // dd($state);
              
            // }
            $record->where('id', $record->id)
            ->update(['is_approved' => false]);
            
            // Update the current row to true

            // dd($state);
        }

        else
        {
              
            $state = $record->where('id', $record->id)
            ->update(['is_approved' => true]);
            // dd($state);
            $otherApprovedRow = Processes::query()
            ->where('id', '<>', $record->id)
            ->where('is_approved', true)
            ->first();  
            
        if ($otherApprovedRow) {
            // dd($otherApprovedRow);
            // If there is another row set to true, update it to false
            $record->where('id','<>', $record->id)
            ->update(['is_approved' => false]);
        }
       
            // dd($state);
        }
        
        // Return the current value of is_approved
        // return $record->is_approved;
    }
}
