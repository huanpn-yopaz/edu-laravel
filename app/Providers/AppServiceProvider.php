<?php

namespace App\Providers;

use App\Models\Objects;
use App\Models\Zoom;
use App\Repositories\BaseRepositoryInterface;
use App\Repositories\Elequent\BaseRepository;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        // $this->app->singleton(NewRepositoryInterface::class, function(){
        //     return new NewRepository(new Post());
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Carbon::setLocale('vi');
        View::composer('*', function ($view) {
            $zoom = Zoom::latest('id_zoom')->get(['id_zoom', 'name_zoom']);
            $object = Objects::latest('id_object')->get(['id_object', 'name_object']);
            $view->with(compact('object', 'zoom'));
        });
    }
}
