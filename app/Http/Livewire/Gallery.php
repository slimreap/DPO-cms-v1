<?php

namespace App\Http\Livewire;


use App\Models\User;
use Filament\Tables;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Gallery extends Component implements Tables\Contracts\HasTable 
{
    use Tables\Concerns\InteractsWithTable; 

    protected function getTableQuery(): Builder 
    {
        $userid = auth()->user()->id;
        return Media::query()->where('user_id',$userid);
    } 

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('file_name')
                ->label('Customer'),
        ];
    }
    public function render()
    {
        return view('livewire.gallery');
    }
}
