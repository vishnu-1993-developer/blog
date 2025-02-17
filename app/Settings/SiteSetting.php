<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSetting extends Settings
{
    public string $site_name;
    public string $header_logo;
    public string $header_sticky_logo;
    public string $footer_logo;
    public ?string $facebook;
    public ?string $instgram;
    public ?string $twitter_x;
    public string $description;
    public string $tagline;
    public string $admin_email;
    public string $admin_phone;
    public string $copyright_year;

    public static function group(): string
    {
        return 'site';
    }
}