<?php 

namespace MarkVilludo\Calculator;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MarkVilludo\Calculator\Calculator;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        include __DIR__.'/routes.php';
        
        $this->publishes([
            __DIR__ . '/../../config/calculator.php' => config_path('calculator.php'),
        ]);
        
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/calculator.php', 'calculator'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('calculator', function() {
            return new Calculator();
        });
    }

}
