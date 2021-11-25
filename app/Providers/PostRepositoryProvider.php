<?php

namespace App\Providers;

use App\Interfaces\PostRepositoryInterface;
use App\Repository\PostRepository;
use Illuminate\Support\ServiceProvider;

class PostRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PostRepositoryInterface::class ,PostRepository::class );
    }
}
