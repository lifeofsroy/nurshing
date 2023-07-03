<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\SiteDetail;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SiteDetailResource\Pages;
use App\Filament\Resources\SiteDetailResource\RelationManagers;

class SiteDetailResource extends Resource
{
    protected static ?string $model = SiteDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextInput::make('site_title')
                                    ->label('Title')
                                    ->required(),

                                Textarea::make('site_desc')
                                    ->required()
                                    ->label('Description')
                                    ->rows(2),

                                TextInput::make('site_keys')
                                    ->label('Keywords')
                                    ->required(),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(4)
                            ->schema([
                                ColorPicker::make('primary_color')
                                    ->required(),

                                ColorPicker::make('secondary_color')
                                    ->required(),

                                ColorPicker::make('preloader_color')
                                    ->required(),

                                ColorPicker::make('preback_color')
                                    ->label('Preloader Backgrond')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('site_title')
                    ->wrap(),

                ColorColumn::make('primary_color'),

                ColorColumn::make('secondary_color'),

                ColorColumn::make('preloader_color'),

                ColorColumn::make('preback_color')
                    ->label('Preloader Backgrond'),

                TextColumn::make('updated_at')
                    ->since()
                    ->color('primary')
                    ->size('sm')
                    ->label('Updated'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteDetails::route('/'),
            'create' => Pages\CreateSiteDetail::route('/create'),
            'edit' => Pages\EditSiteDetail::route('/{record}/edit'),
        ];
    }
}
