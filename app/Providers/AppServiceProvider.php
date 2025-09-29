<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // <-- importa Schema

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Limita el tamaño por defecto de strings a 191 chars (<= 767 bytes)
        Schema::defaultStringLength(191);
    }
}
