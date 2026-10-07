<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Wiebenieuwenhuis\FilamentCodeEditor\Components\CodeEditor;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\Select::make('parent_id')
                            ->label('Parent Category/Project')
                            ->relationship('parent', 'name')
                            ->searchable()
                            ->placeholder('None (Make Main Category)'),

                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn(string $operation, $state, Forms\Set $set) =>
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null
                            ),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(Project::class, 'slug', ignoreRecord: true),

                        Forms\Components\FileUpload::make('featured_image')
                            ->label('Featured Thumbnail')
                            ->image()
                            ->disk('public')
                            ->visibility('public')
                            ->directory('projects/thumbnails')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->maxSize(5120),
                            
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                            
                        Forms\Components\Toggle::make('has_content')
                            ->label('Has Detailed Page / Content')
                            ->default(false),

                        Forms\Components\Toggle::make('is_menu')
                            ->label('Show in Menu')
                            ->default(false),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Published / Active')
                            ->default(true),
                    ])->columns(2),

                Forms\Components\Section::make('Project Content & HTML Blocks')
                    ->description('Yahan aap project ka detailed content ya custom HTML code add kar sakte hain.')
                    ->schema([
                        Forms\Components\Builder::make('content')
                            ->blocks([
                                // Heading Block
                                Forms\Components\Builder\Block::make('heading')
                                    ->schema([
                                        Forms\Components\TextInput::make('text')->label('Heading Text')->required(),
                                        Forms\Components\Select::make('level')
                                            ->options(['h2' => 'H2', 'h3' => 'H3', 'h4' => 'H4'])
                                            ->default('h2'),
                                    ]),

                                Forms\Components\Builder\Block::make('paragraph')
                                    ->schema([
                                        Forms\Components\RichEditor::make('text')->label('Content Paragraph')->required(),
                                    ]),

                                Forms\Components\Builder\Block::make('html_code')
                                    ->label('Raw HTML Code Editor')
                                    ->icon('heroicon-o-code-bracket')
                                    ->schema([
                                        CodeEditor::make('html')
                                            ->label('HTML Code')
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                            ])
                            ->collapsible()
                            ->cloneable()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')->label('Thumbnail'),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('parent.name')->label('Parent Category'),
                Tables\Columns\IconColumn::make('has_content')->boolean()->label('Has Content'),
                Tables\Columns\IconColumn::make('is_menu')->boolean()->label('In Menu'),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Active'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                // 
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ImagesRelationManager::class, // 
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
