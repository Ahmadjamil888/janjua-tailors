<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https'); // ✅ Forces HTTPS for all URLs (routes, assets, etc.)
            
            // Railway-specific HTTPS configuration - simpler approach
            if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
                URL::forceScheme('https');
            }
            
            // Trust all proxies for Railway
            $this->app['request']->setTrustedProxies(['*'], -1);
        }
    }
}
