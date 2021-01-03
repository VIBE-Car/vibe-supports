<?php

namespace Vibe\Supports\DateTime;

use Carbon\Carbon;
use Carbon\CarbonTimeZone;
use Illuminate\Support\Facades\Config;

class DateTimeUtil
{
    /**
     * Create utc datetime
     *
     * @param string $datetimeString
     * @param string $fromTimezone
     * @param string|null $fromFormat
     *
     * @return Carbon
     */
    public static function createUtcDateTime(string $datetimeString, string $fromTimezone, string $fromFormat = null): Carbon
    {
        if (empty($fromFormat)) {
            $fromFormat = Config::get('vibe_supports.datetime_input_format');
        }

        return Carbon::createFromFormat($fromFormat, $datetimeString, CarbonTimeZone::create($fromTimezone)->toOffsetName());
    }

    /**
     * Convert datetime to timezone
     *
     * @param Carbon $datetime
     * @param string $toTimezone
     *
     * @return Carbon
     */
    public static function transformToTimezone(Carbon $datetime, string $toTimezone = '+00:00'): Carbon
    {
        return $datetime->setTimezone(CarbonTimeZone::create($toTimezone)->toOffsetName());
    }
}
