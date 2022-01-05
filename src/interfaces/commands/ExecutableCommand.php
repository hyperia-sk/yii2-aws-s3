<?php

namespace hyperia\yii2\aws\s3\interfaces\commands;

/**
 * Interface ExecutableCommand
 *
 * @package hyperia\yii2\aws\s3\interfaces\commands
 */
interface ExecutableCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute();
}
