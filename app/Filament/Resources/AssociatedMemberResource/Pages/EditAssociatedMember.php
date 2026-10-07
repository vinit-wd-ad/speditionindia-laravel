<?php

namespace App\Filament\Resources\AssociatedMemberResource\Pages;

use App\Filament\Resources\AssociatedMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssociatedMember extends EditRecord
{
    protected static string $resource = AssociatedMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
