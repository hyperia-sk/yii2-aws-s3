<?php

namespace hyperia\yii2\aws\s3\interfaces;

use hyperia\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package hyperia\yii2\aws\s3\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \hyperia\yii2\aws\s3\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
