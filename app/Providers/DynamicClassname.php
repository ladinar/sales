<?php 
	namespace App\Providers;
	use App\TB_Company;
	use App\TB_Position;
	use Illuminate\Support\ServiceProvider;

	class DynamicClassname extends ServiceProvider
	{
		public function boot()
		{
			view()->composer('*', function($view){
				$view->with('company', TB_Company::all());		
			});

			view()->composer('*', function($view){
				$view->with('position', TB_Position::all());		
			});
		}
	}
 ?>