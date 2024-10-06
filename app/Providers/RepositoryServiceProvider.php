<?php

namespace App\Providers;

use App\Http\Controllers\ContatoController;
use App\Repositories\ContatoRepository;
use App\Repositories\Repository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->when(ContatoController::class)->needs(Repository::class)->give(ContatoRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
