<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Broadcast::routes(['middleware' => ['auth']]);
        // Broadcast::routes(['middleware' => ['auth']]);

        Broadcast::routes();
        // Broadcast::routes(['middleware' => ['auth']]);
        // Broadcast::routes(['middleware' => ['web', 'auth']]);
        // Broadcast::routes(['middleware' => ['auth:sanctum']]);

        require base_path('routes/channels.php');
    }
}
