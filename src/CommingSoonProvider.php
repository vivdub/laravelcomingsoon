<?php
    // MyVendor\contactform\src\ContactFormServiceProvider.php
    namespace vivdub\CommingSoon;
    use Illuminate\Support\ServiceProvider;
    
    class CommingSoonProvider extends ServiceProvider {
    
    	public function boot(){
      	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
      	$this->loadViewsFrom(__DIR__.'/resources/views', 'commingsoon');
      	$this->publishes([
        __DIR__.'/public/assets' => public_path('vendor/vivdub/commingsoon'),
    			], 'public');
      }
    
    	public function register(){
      }
    }
?>