<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\AdmissionForm;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Nuhel\FilamentCropper\Components\Cropper;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AdmissionFormResource\Pages;
use App\Filament\Resources\AdmissionFormResource\RelationManagers;

class AdmissionFormResource extends Resource
{
    protected static ?string $model = AdmissionForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Request';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('first_name')
                                    ->required(),

                                TextInput::make('middle_name'),

                                TextInput::make('last_name')
                                    ->required(),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('email')
                                    ->required(),

                                TextInput::make('phone')
                                    ->required(),

                                DatePicker::make('dob')
                                    ->required()
                                    ->label('Date of Birth')
                                    ->maxDate(now())
                                    ->displayFormat('F j, Y')
                                    ->timezone('Asia/Kolkata'),

                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(4)
                            ->schema([

                                Select::make('gender')
                                    ->required()
                                    ->options([
                                        'Male' => 'Male',
                                        'Female' => 'Female',
                                        'Other' => 'Other',
                                    ]),

                                TextInput::make('blood')
                                    ->label('Blood Group'),

                                Select::make('religion')
                                    ->required()
                                    ->options([
                                        'Hinduism' => 'Hinduism',
                                        'Islam' => 'Islam',
                                        'Christianity' => 'Christianity',
                                        'Judaism' => 'Judaism',
                                        'Buddhism' => 'Buddhism',
                                        'Jainism' => 'Jainism',
                                        'Sikhism' => 'Sikhism',
                                    ]),

                                Select::make('caste')
                                    ->required()
                                    ->options([
                                        'General' => 'General',
                                        'OBC-A' => 'OBC-A',
                                        'OBC-B' => 'OBC-B',
                                        'SC' => 'SC',
                                        'ST' => 'ST',
                                    ]),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('tongue')
                                    ->label('Mother Tongue')
                                    ->required(),

                                TextInput::make('aadhaar')
                                    ->label('Aadhaar No')
                                    ->required(),

                                Select::make('is_disable')
                                    ->label('Physically Disabled')
                                    ->required()
                                    ->options([
                                        'Yes' => 'Yes',
                                        'No' => 'No',
                                    ]),
                            ]),

                        TextInput::make('activity')
                            ->label('Extra-Academic Activities')
                            ->columnSpan('full'),
                    ]),


                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('vill')
                                    ->label('Vill / City')
                                    ->required(),

                                TextInput::make('po')
                                    ->label('Post Office')
                                    ->required(),

                                TextInput::make('ps')
                                    ->label('Police Station')
                                    ->required(),

                                TextInput::make('dist')
                                    ->label('District')
                                    ->required(),

                                TextInput::make('state')
                                    ->required(),

                                TextInput::make('pin')
                                    ->label('PIN')
                                    ->required(),
                            ]),

                        Textarea::make('parma_addr')
                            ->label('Parmanent Address')
                            ->rows(3)
                            ->hidden(
                                fn (Closure $get): bool => $get('addr_same') == true
                            ),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('ft_name')
                                    ->label('Father\'s Name')
                                    ->required(),

                                TextInput::make('ft_occup')
                                    ->label('Father\'s Occupation')
                                    ->required(),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('mt_name')
                                    ->label('Mother\'s Name')
                                    ->required(),

                                TextInput::make('mt_occup')
                                    ->label('Mother\'s Occupation')
                                    ->required(),
                            ]),

                        Textarea::make('guar_addr')
                            ->label('Guardian\'s Address')
                            ->rows(2),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('guar_pin')
                                    ->label('Guardian\'s PIN')
                                    ->required(),

                                TextInput::make('guar_ph')
                                    ->label('Guardian\'s Phone')
                                    ->required(),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('quali1')
                                    ->label('Qualification'),

                                TextInput::make('board1')
                                    ->label('Board / College'),
                            ]),

                        Grid::make(3)
                            ->schema([
                                TextInput::make('sub1')
                                    ->label('Subject'),

                                TextInput::make('percent1')
                                    ->label('Percentage')
                                    ->suffix('%'),

                                TextInput::make('passing1')
                                    ->label('Passing Year'),
                            ]),

                        Textarea::make('remark1')
                            ->label('Remark')
                            ->rows(3),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('quali2')
                                    ->label('Qualification'),

                                TextInput::make('board2')
                                    ->label('Board / College'),
                            ]),

                        Grid::make(3)
                            ->schema([
                                TextInput::make('sub2')
                                    ->label('Subject'),

                                TextInput::make('percent2')
                                    ->label('Percentage')
                                    ->suffix('%'),

                                TextInput::make('passing2')
                                    ->label('Passing Year'),
                            ]),

                        Textarea::make('remark2')
                            ->label('Remark')
                            ->rows(3),
                    ])
                    ->hidden(
                        fn (Closure $get): string => $get('quali2') == null
                    ),

                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('quali3')
                                    ->label('Qualification'),

                                TextInput::make('board3')
                                    ->label('Board / College'),
                            ]),

                        Grid::make(3)
                            ->schema([
                                TextInput::make('sub3')
                                    ->label('Subject'),

                                TextInput::make('percent3')
                                    ->label('Percentage')
                                    ->suffix('%'),

                                TextInput::make('passing3')
                                    ->label('Passing Year'),
                            ]),

                        Textarea::make('remark3')
                            ->label('Remark')
                            ->rows(3),
                    ])
                    ->hidden(
                        fn (Closure $get): string => $get('quali3') == null
                    ),

                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('quali4')
                                    ->label('Qualification'),

                                TextInput::make('board4')
                                    ->label('Board / College'),
                            ]),

                        Grid::make(3)
                            ->schema([
                                TextInput::make('sub4')
                                    ->label('Subject'),

                                TextInput::make('percent4')
                                    ->label('Percentage')
                                    ->suffix('%'),

                                TextInput::make('passing4')
                                    ->label('Passing Year'),
                            ]),

                        Textarea::make('remark4')
                            ->label('Remark')
                            ->rows(3),
                    ])
                    ->hidden(
                        fn (Closure $get): string => $get('quali4') == null
                    ),

                Card::make()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                Toggle::make('is_pay')
                                    ->inline()
                                    ->label('Already Paid ?'),

                                Cropper::make('tc_photo')
                                    ->label('Transaction Copy')
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        return (string)str("admission/tc" . $file->hashName());
                                    })->enableDownload()
                                    ->enableOpen()
                                    ->enableImageRotation()
                                    ->enableImageFlipping(),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Cropper::make('usr_photo')
                                    ->label('User Photo')
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        return (string)str("admission/usr" . $file->hashName());
                                    })->enableDownload()
                                    ->enableOpen()
                                    ->enableImageRotation()
                                    ->enableImageFlipping(),

                                Cropper::make('sgn_photo')
                                    ->label('User Sign')
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        return (string)str("admission/sgn" . $file->hashName());
                                    })->enableDownload()
                                    ->enableOpen()
                                    ->enableImageRotation()
                                    ->enableImageFlipping(),
                            ]),
                    ]),

                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                Cropper::make('adr_photo')
                                    ->label('Aadhaar Photo')
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        return (string)str("admission/adr" . $file->hashName());
                                    })->enableDownload()
                                    ->enableOpen()
                                    ->enableImageRotation()
                                    ->enableImageFlipping(),

                                Cropper::make('cer_photo')
                                    ->label('Caste Certificate')
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        return (string)str("admission/cer" . $file->hashName());
                                    })->enableDownload()
                                    ->enableOpen()
                                    ->enableImageRotation()
                                    ->enableImageFlipping()
                                    ->hidden(
                                        fn (Closure $get): string => $get('caste') == 'General'
                                    ),

                                Cropper::make('m10_photo')
                                    ->label('Class-X Marksheet')
                                    ->required()
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                        return (string)str("admission/m10" . $file->hashName());
                                    })->enableDownload()
                                    ->enableOpen()
                                    ->enableImageRotation()
                                    ->enableImageFlipping(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('usr_photo')
                    ->toggleable()
                    ->label('Photo'),

                TextColumn::make('email')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                TextColumn::make('course')
                    ->sortable()
                    ->toggleable()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->color('primary')
                    ->size('sm')
                    ->label('Updated'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAdmissionForms::route('/'),
            'create' => Pages\CreateAdmissionForm::route('/create'),
            'edit' => Pages\EditAdmissionForm::route('/{record}/edit'),
        ];
    }
}
