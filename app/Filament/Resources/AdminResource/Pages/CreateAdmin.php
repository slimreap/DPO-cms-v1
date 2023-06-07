<?php

namespace App\Filament\Resources\AdminResource\Pages;

use App\Filament\Resources\AdminResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
} 

protected function getCreatedNotificationTitle(): ?string
{
    return 'User Created';
}

}
