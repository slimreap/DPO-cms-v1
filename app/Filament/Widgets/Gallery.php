<?php

namespace App\Filament\Widgets;

use Closure;
use App\Models\User;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class Gallery extends BaseWidget
{

    public static function canView(): bool
    {
        return auth()->user()->hasRole(['editor']);
    }
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getTableQuery(): Builder 
    {
        $userid = auth()->user()->id;
        return Media::query()
        ->where('model_type', 'App\\Models\\User')
        ->where('model_id', $userid)
        ->latest();
    } 

    protected function getTableColumns(): array
    {
        return [

            // Tables\Columns\TextColumn::make('name')->label('file name')->searchable(),
            Tables\Columns\TextColumn::make('file_name')
                ->label('file name'),
                ImageColumn::make('images')
                ->label('Image')
                ->getStateUsing(function ($record) {
                    return $record->getUrl();
                })
                     

        ];
    }
}
