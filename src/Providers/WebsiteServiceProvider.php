<?php

namespace ManishBasnet\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
	public function boot()
	{
		echo ("We are loading our package service provider");
		info('manishbasnet/website bootstrapped.');
	}

	public function register()
	{

	}
}