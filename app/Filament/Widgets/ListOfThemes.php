<?php

namespace App\Filament\Widgets;

use Closure;
use Filament\Tables;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;


class ListOfThemes extends BaseWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];
    protected function getTableQuery(): Builder
    {
        return Theme::query()->latest();
    }

    public static function canView(): bool
    {
        return auth()->user()->hasRole(['super-admin', 'admin']);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('name')
                ->label('Theme')->url(function ($record) {
                    
                    $name = urlencode($record->name); // Encode the name for URL safety
                    return "http://privacy.wmsu.edu.ph/admin/{$record->name}/Homepage";
                })->searchable(),
                Tables\Columns\TextColumn::make('approval_date')
        ];
    }
}
