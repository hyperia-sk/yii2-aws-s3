<?php

namespace hyperia\yii2\aws\s3\interfaces\commands;

/**
 * Interface HasBucket
 *
 * @package hyperia\yii2\aws\s3\interfaces\commands
 */
interface HasBucket
{
    /**
     * @param string $name
     */
    public function inBucket(string $name);
}
