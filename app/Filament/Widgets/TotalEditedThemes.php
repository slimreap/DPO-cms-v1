<?php

namespace App\Filament\Widgets;

use App\Models\Theme;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class TotalEditedThemes extends BaseWidget
{
        protected int | string | array $columnSpan = [
        'md' => 1,

    ];
    protected function getCards(): array
    {
        return [
            Card::make('Total Edited Themes', Theme::where('user_id',auth()->user()->id)->count()),
            Card::make('Total Edited Pages',function(){
                $themes = Theme::with('pages')->get();
                
                return $pageCount = $themes->count();
            }),
            Card::make('Total Approved Themes',function(){
                $themes = Theme::where('user_id', auth()->user()->id)
                ->whereNotNull('approval_date')
                ->with('pages')
                ->get();
 
                return $pageCount = $themes->count();
            }),
        ];
    }

    public static function canView(): bool
    {
        return auth()->user()->hasRole(['editor']);
    }
}
