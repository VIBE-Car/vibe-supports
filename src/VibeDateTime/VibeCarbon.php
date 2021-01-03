<?php

namespace Vibe\Supports\VibeDateTime;

use Carbon\Carbon;

class VibeCarbon extends Carbon
{
    public function toJSON(): string
    {
        return $this->toIso8601String();
    }
}
