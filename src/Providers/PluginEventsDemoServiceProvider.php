<?php
namespace PluginEventsDemo\Providers;

use Plenty\Modules\Plugin\Events\AfterBuildPlugins;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use PluginEventsDemo\Hooks\StoreBuildLog;

/**
 * Class PluginEventsDemoServiceProvider
 * @package PluginEventsDemo\Providers
 */
class PluginEventsDemoServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(PluginEventsDemoRouteServiceProvider::class);
	}

    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->listen(AfterBuildPlugins::class, StoreBuildLog::class);
    }
}
