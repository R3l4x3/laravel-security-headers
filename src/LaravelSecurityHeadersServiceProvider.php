<?php

namespace LaravelSecurityHeaders;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use LaravelSecurityHeaders\Middleware\SecureHeaders;

class LaravelSecurityHeadersServiceProvider extends ServiceProvider
{
    public function boot(Kernel $kernel)
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', SecureHeaders::class);
    }

    public function register()
    {
    }
}
