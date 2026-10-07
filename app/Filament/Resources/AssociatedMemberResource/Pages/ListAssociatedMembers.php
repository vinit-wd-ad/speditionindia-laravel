<?php

namespace App\Filament\Resources\AssociatedMemberResource\Pages;

use App\Filament\Resources\AssociatedMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssociatedMembers extends ListRecords
{
    protected static string $resource = AssociatedMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
