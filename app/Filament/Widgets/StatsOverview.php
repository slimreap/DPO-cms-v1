<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Contracts\Role as ContractsRole;

class StatsOverview extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()->hasRole(['super-admin', 'admin']);
    }
    protected static ?int $sort = 1;
    protected static ?string $model = Media::class;
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];
    protected function getCards(): array
    {
        $total_memory_used = Media::sum('size') / 100000;
        return [
            Card::make('Total memory used', $total_memory_used . 'mb'),
            Card::make('Total Editors', User::where('role_id', 3)
            // ->orWhere('role_id', 3)
            ->count())
                ->description('All User')
                ->descriptionIcon('heroicon-s-user')
                ->color('danger'),
        ];
    }

}
