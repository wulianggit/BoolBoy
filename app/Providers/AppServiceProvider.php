<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        DB::listen(function($query) {
            $prepareSql = str_replace(["?","\r\n", "\r", "\n"], ["'%s'", '', '', ''], $query->sql);
            $prepareSql = preg_replace('/:[0-9a-z_]+/i', "'%s'", $prepareSql);
            $sql = vsprintf($prepareSql, $query->bindings);
            $this->app['log']->info(sprintf('sql:%s cost:%.2fms', $sql, $query->time));
        });
    }
}
