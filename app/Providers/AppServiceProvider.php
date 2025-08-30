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
            
            // Railway-specific HTTPS configuration
            $this->app['request']->server->set('HTTPS', 'on');
            $this->app['request']->server->set('SERVER_PORT', 443);
            $this->app['request']->server->set('HTTP_X_FORWARDED_PROTO', 'https');
            $this->app['request']->server->set('HTTP_X_FORWARDED_PORT', 443);
            
            // Trust Railway's proxy
            $this->app['request']->setTrustedProxies(['*'], \Illuminate\Http\Request::HEADER_X_FORWARDED_ALL);
        }
    }
}
