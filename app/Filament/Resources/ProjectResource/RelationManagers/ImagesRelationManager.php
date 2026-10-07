<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image_path')
                    ->label('Project Images')
                    ->image()
                    ->multiple(fn (?Model $record) => $record === null)
                    ->panelLayout('grid')
                    ->directory('projects/gallery')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->maxSize(5120)
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('caption')
                    ->label('Image Caption/Title (Optional)'),

                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('image_path')
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')->label('Image'),
                Tables\Columns\TextColumn::make('caption')->label('Caption')->searchable(),
                Tables\Columns\TextColumn::make('sort_order')->label('Order')->sortable(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Add New Images')
                    ->using(function (array $data, RelationManager $livewire): Model {
                        $imagePaths = $data['image_path'];
                        $firstRecord = null;

                        foreach ($imagePaths as $index => $path) {
                            $createdRecord = $livewire->getOwnerRecord()->images()->create([
                                'image_path' => $path,
                                'caption' => $data['caption'] ?? null,
                                'sort_order' => ($data['sort_order'] ?? 0) + $index,
                            ]);

                            if (!$firstRecord) {
                                $firstRecord = $createdRecord;
                            }
                        }

                        return $firstRecord;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}