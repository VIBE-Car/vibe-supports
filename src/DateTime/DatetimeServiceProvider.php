<?php

namespace Vibe\Supports\DateTime;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;

class DatetimeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Date::useClass(VibeCarbon::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/vibe_supports.php', 'vibe_supports');
    }
}
