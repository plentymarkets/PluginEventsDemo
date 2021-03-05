<?php

namespace PluginEventsDemo\Migrations;

use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;
use PluginEventsDemo\Models\Log;

class CreateLogTable
{
    public function run(Migrate $migrate)
    {
        $migrate->createTable(Log::class);
    }
}
