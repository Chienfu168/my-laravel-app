<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class LatestPosts extends Widget
{
    protected static string $view = 'filament.widgets.latest-posts';

    protected static ?int $sort = 1;

    public function getData(): array
    {
        return [
            // 可放資料給 Blade 使用
        ];
    }
}
