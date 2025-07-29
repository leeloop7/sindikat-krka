<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\BadgeColumn;
use App\Models\User;


use Filament\Tables\Columns\TextColumn;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('description')
                    ->label('Opis dogodka')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote'
                    ])
                    ->maxLength(2000),
                DatePicker::make('event_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('event_date')
                    ->label('Date')
                    ->date('d.m.Y')
                    ->sortable(),

                BadgeColumn::make('responses_going')
                    ->label('Grem')
                    ->getStateUsing(
                        fn($record) =>
                        $record->users()->wherePivot('response', 'going')->count()
                    )
                    ->color('success'),

                BadgeColumn::make('responses_not_going')
                    ->label('Ne grem')
                    ->getStateUsing(
                        fn($record) =>
                        $record->users()->wherePivot('response', 'not_going')->count()
                    )
                    ->color('danger'),

                BadgeColumn::make('responses_none')
                    ->label('Neodgovorjeni')
                    ->getStateUsing(function ($record) {
                        $respondedUserIds = $record->users()->pluck('users.id')->toArray();
                        return User::whereNotIn('id', $respondedUserIds)->count();
                    })
                    ->color('gray'),
            ])
            ->filters([])
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
