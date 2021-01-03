<?php

namespace Vibe\Supports\DateTime;


use Carbon\Carbon;
use Carbon\CarbonTimeZone;

class DateTimeUtil
{
    /**
     * Create utc datetime
     *
     * @param string $datetimeString
     * @param string $fromTimezone
     *
     * @return Carbon
     */
    public static function createUtcDateTime(string $datetimeString, string $fromTimezone): Carbon
    {
        return Carbon::createFromFormat(config('vibe.datetime_input_format'), $datetimeString, CarbonTimeZone::create($fromTimezone)->toOffsetName());
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
