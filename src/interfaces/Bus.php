<?php

namespace hyperia\yii2\aws\s3\interfaces;

use hyperia\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package hyperia\yii2\aws\s3\interfaces
 */
interface Bus
{
    /**
     * @param \hyperia\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
