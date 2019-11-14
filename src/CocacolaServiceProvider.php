<?php
namespace Infinite\Cocacola;

use Illuminate\Support\ServiceProvider;

class CocacolaServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/resources/views/','cocacola');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations/');
		$this->mergeConfigFrom(__DIR__.'/config/coke.php', 'coke' );
		$this->publishes([__DIR__.'/config/coke.php' => config_path('coke.php')]);
	}

	public function register()
	{
		//
	}

}