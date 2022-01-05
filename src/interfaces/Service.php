<?php

namespace hyperia\yii2\aws\s3\interfaces;

use hyperia\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package hyperia\yii2\aws\s3\interfaces
 */
interface Service
{
    /**
     * @param \hyperia\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \hyperia\yii2\aws\s3\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
