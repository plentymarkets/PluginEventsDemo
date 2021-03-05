<?php

namespace PluginEventsDemo\Models;
use Plenty\Modules\Plugin\DataBase\Contracts\Model;

/**
 * Class Log
 * @package PluginEventsDemo\Models
 * @property int $id
 * @property string $action
 * @property string $createdAt Created timestamp
 */

class Log extends Model
{
    public $id;
    public $action;
    public $createdAt;

    public function getTableName(): string
    {
        return 'PluginEventsDemo::Log';
    }
}
