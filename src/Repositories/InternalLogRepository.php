<?php
/**
 * Created by PhpStorm.
 * User: plenty
 * Date: 2019-10-08
 * Time: 10:52
 */

namespace PluginEventsDemo\Repositories;

use PluginEventsDemo\Models\Log;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use Zend\Ldap\Collection;

class InternalLogRepository
{
    /** @var DataBase */
    protected $dataBase;

    public function __construct()
    {
        $this->dataBase = pluginApp(DataBase::class);
    }

    /**
     * @param Log $log
     * @return bool
     */
    public function saveLog($log)
    {
        /** @var Log $log */
        $log->createdAt = date("Y-m-d H:i:s");

        try {
            $model = $this->dataBase->save($log);
            if ($model instanceof Log) {
                return $model;
            }
        } catch(\Exception $e) {
            return false;
        }

        return false;
    }

    /** @return Log[] | Collection */
    public function getAll()
    {
        return $this->dataBase
            ->query(Log::class)
            ->get();
    }

}