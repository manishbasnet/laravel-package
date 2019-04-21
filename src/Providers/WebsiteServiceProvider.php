<?php

namespace ManishBasnet\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
	public function boot()
	{
		dd("We are loading our package service provider");
	}

	public function register()
	{

	}
}