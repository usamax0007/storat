<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\DashboardStats;
use App\Filament\Widgets\DashboardStats2;
use App\Filament\Widgets\LanguageSwitcher;
use App\Http\Middleware\SetLocale;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Facades\Filament;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        Filament::serving(function () {
            Filament::registerRenderHook(
                'navbar.end',
                fn () => view('filament.partials.language-switcher')
            );
        });
        return $panel
            ->default()
            ->id('admin')
            ->darkMode(false)
            ->path('admin')
            ->login()
            ->colors([
                'primary' => [
                    50  => '#f2f7fb',
                    100 => '#d9e6f2',
                    200 => '#b3cee3',
                    300 => '#8db6d4',
                    400 => '#5f95bf',
                    500 => '#10568f',
                    600 => '#0e4a7b',
                    700 => '#0c3e66',
                    800 => '#092f4d',
                    900 => '#071f33',
                    950 => '#04111f',
                ],

            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                DashboardStats2::class,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->brandName('Storat')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                SetLocale::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
