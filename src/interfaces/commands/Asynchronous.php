<?php

namespace hyperia\yii2\aws\s3\interfaces\commands;

/**
 * Interface Asynchronous
 *
 * @package hyperia\yii2\aws\s3\interfaces\commands
 */
interface Asynchronous
{
    /**
     * @return mixed
     */
    public function async();

    /**
     * @return bool
     */
    public function isAsync(): bool;
}
