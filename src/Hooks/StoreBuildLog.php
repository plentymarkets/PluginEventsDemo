<?php

namespace PluginEventsDemo\Hooks;

use Plenty\Modules\Plugin\Events\AfterBuildPlugins;
use PluginEventsDemo\Models\Log;
use PluginEventsDemo\Repositories\InternalLogRepository;
use Plenty\Plugin\Log\Loggable;

class StoreBuildLog
{
    use Loggable;

    public function handle(AfterBuildPlugins $afterBuildPlugins)
    {
        /** @var Log $log */
        $logModel = pluginApp(Log::class);
        $logMessage = 'After Build set:'.$afterBuildPlugins->getPluginSet()->id;
        $logModel->action = $logMessage;

        $this->getLogger(__CLASS__)->debug(
            "PluginEventsDemo::log.afterBuildEvent",
            [
                $logMessage
            ]
        );


        /** @var InternalLogRepository $logRepository */
        $logRepository = pluginApp(InternalLogRepository::class);

        $logRepository->saveLog($logModel);
    }
}
