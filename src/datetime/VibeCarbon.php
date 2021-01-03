<?php

namespace Vibe\Supports\Datetime;

use Carbon\Carbon;

class VibeCarbon extends Carbon
{
    public function toJSON(): string
    {
        return $this->toIso8601String();
    }
}
