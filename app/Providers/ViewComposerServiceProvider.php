<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class ViewComposerServiceProvider extends ServiceProvider {
	
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
	}
	
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		
	}
	/**
	 * Compose the navigation
	 */
	private function composeNavigation() {
	}
	
	/**
	 * Compose the footer
	 */
	private function composeFooter() {
		// code
	}
	
	/**
	 * Compose the header
	 */
	private function composeHeader() {
		// code
	}
}
