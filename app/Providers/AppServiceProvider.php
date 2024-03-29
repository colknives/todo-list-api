<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Item\ItemInterface;
use App\Services\Item\ItemService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ItemInterface::class, ItemService::class);
    }
}
