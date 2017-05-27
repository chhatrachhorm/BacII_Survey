<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class ComposerSurveyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('skillsurvey.survey', 'App\Http\SurveyViewComposers\SurveyComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
