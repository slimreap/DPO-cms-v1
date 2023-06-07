<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UserOverview extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()->hasRole(['super-admin', 'admin']);
    }
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];
    protected function getCards(): array
    {
        $admin = Role::where('name', 'admin')->withCount('users')->first()->users_count;
        $editor = Role::where('name', 'editor')->withCount('users')->first()->users_count;
        // count all with editor role
        return [
            // Card::make('Total User', Role::all()->count())
            //     ->description('All User')
            //     ->descriptionIcon('heroicon-s-user')
            //     ->color('danger'),
            // Card::make('Total Admin' , $admin)
            //     ->description('All Admin')
            //     ->descriptionIcon('heroicon-s-user')
            //     ->color('danger'),
            // Card::make('Total editor', $editor)
            //     ->description('All Editor')
            //     ->descriptionIcon('heroicon-s-user')
            //     ->color('danger'),
        ];
    }
}
