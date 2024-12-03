<?php

namespace App\Providers;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Carbon::setWeekStartsAt(CarbonInterface::SATURDAY);
        Carbon::setWeekEndsAt(CarbonInterface::FRIDAY);
        date_default_timezone_set('Asia/Dhaka');

        LogViewer::auth(function ($request) {
            return true; //$request->who == 'devbose';
        });
    }
}
