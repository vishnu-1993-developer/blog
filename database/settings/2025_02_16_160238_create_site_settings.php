<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.site_name', 'Expert Info');
        $this->migrator->add('site.header_logo', '');
        $this->migrator->add('site.header_sticky_logo', '');
        $this->migrator->add('site.facebook', '');
        $this->migrator->add('site.instgram', '');
        $this->migrator->add('site.twitter_x', '');
        $this->migrator->add('site.description', '');
        $this->migrator->add('site.tagline', '');
        $this->migrator->add('site.admin_email', '');
        $this->migrator->add('site.admin_phone', '');
        $this->migrator->add('site.copyright_year', '');
    }
};
