<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
if (!function_exists('get_setting')) {
    /**
     * Retrieve a setting value by key.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    // function get_setting($key, $default = null)
    // {
    //     $cacheKey = 'settings_' . $key;

    //     return Cache::remember($cacheKey, 60 * 60, function () use ($key, $default) {
    //         $setting = Setting::where('key', $key)->first();
    //         return $setting ? $setting->value : $default;
    //     });
    // }

    function get_setting($key, $default = null)
    {
        $setting = Setting::where('key', $key)->first();

        return $setting ? $setting->value : $default;
    }
}
