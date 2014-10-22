<?php
namespace Sinergi\EmailQueue;

interface ConfigInterface
{
    /**
     * @return string
     */
    public function getTableName();

    /**
     * @param string $tableName
     * @return $this
     */
    public function setTableName($tableName);
}
