<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class HomePageLink extends Widget
{
    protected static string $view = 'filament.widgets.home-page-link';

    protected int | string | array $columnSpan = 'full';

    public static function canView(): bool
    {
        return true;
    }
}
