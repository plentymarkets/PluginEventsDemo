<?php
namespace PluginEventsDemo\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class PluginEventsDemoRouteServiceProvider
 * @package PluginEventsDemo\Providers
 */
class PluginEventsDemoRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('pluginEventsLog', 'PluginEventsDemo\Controllers\ContentController@outputEvents');
	}

}
