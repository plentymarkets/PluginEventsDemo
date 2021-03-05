<?php
namespace PluginEventsDemo\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use PluginEventsDemo\Repositories\InternalLogRepository;

/**
 * Class ContentController
 * @package PluginEventsDemo\Controllers
 */
class ContentController extends Controller
{
	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function outputEvents(Twig $twig):string
	{
	    /** @var InternalLogRepository $logRepo */
	    $logRepo= pluginApp(InternalLogRepository::class);

	    $eventsLog = $logRepo->getAll();
		return $twig->render('PluginEventsDemo::content.hello', ['events' => $eventsLog]);
	}
}
