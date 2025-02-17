<?php

namespace App\Filament\Pages;

use App\Settings\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class ManageSite extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = SiteSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('site_name')
                ->label('Site Name')
                ->required(),
                TextInput::make('admin_email')
                ->label('Admin Email')
                ->required(),
                TextInput::make('admin_phone')
                ->label('Admin Phone')
                ->required(),
                TextInput::make('copyright_year')
                ->label('Copyright Year')
                ->required(),
                FileUpload::make('header_logo')
                ->label('Header Logo')
                ->required(),
                FileUpload::make('header_sticky_logo')
                ->label('Header Sticky Logo')
                ->required(),
                TextInput::make('facebook')
                ->label('Facebook Page'),
                TextInput::make('instgram')
                ->label('Instgram Page'),
                TextInput::make('twitter_x')
                ->label('Twitter/X Page'),
                TextInput::make('tagline')
                ->label('Tagline')
                ->required(),
                Textarea::make('description')
                ->label('Site Description')
                ->rows(8)
                ->cols(8)
                ->required(),
                FileUpload::make('footer_logo')
                ->label('Footer Logo'),
            ]);
    }
}
