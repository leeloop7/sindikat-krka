<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Event;

class RespondToEvent extends Page
{
    protected static string $view = 'filament.pages.respond-to-event';

    public static ?string $navigationIcon = 'heroicon-o-calendar';
    public static ?string $title = 'Dogodki';
    public static ?string $navigationLabel = 'Moji dogodki';
    public static ?int $navigationSort = 99;

    // public static function shouldRegisterNavigation(): bool
    // {
    //     return auth()->user()?->is_admin === false;
    // }

    public function getEventsProperty()
    {
        return Event::orderBy('event_date')->get();
    }
}
