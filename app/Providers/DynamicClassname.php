<?php 
	namespace App\Providers;
	use App\TB_Company;
	use App\TB_Division;
	use App\TB_Position;
	use App\TB_Territory;
	use App\Sales;
	use Illuminate\Support\ServiceProvider;

	class DynamicClassname extends ServiceProvider
	{
		public function boot()
		{
			view()->composer('*', function($view){
				$view->with('company', TB_Company::all());		
			});

			view()->composer('*', function($view){
				$view->with('division', TB_Division::all());		
			});

			view()->composer('*', function($view){
				$view->with('position', TB_Position::all());		
			});

			view()->composer('*', function($view){
				$view->with('territory', TB_Territory::all());		
			});
			view()->composer('*', function($view){
				$view->with('contact_name', Sales::all());
			});
		}
	}
 ?>