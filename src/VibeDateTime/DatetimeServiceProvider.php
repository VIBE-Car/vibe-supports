<?php

namespace Vibe\Supports\VibeDateTime;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;

class DatetimeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Date::useClass(VibeCarbon::class);
    }
}
