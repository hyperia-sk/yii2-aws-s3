<?php

namespace hyperia\yii2\aws\s3\interfaces;

use hyperia\yii2\aws\s3\interfaces\commands\Command;
use hyperia\yii2\aws\s3\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package hyperia\yii2\aws\s3\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \hyperia\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return \hyperia\yii2\aws\s3\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
