<?php

namespace hyperia\yii2\aws\s3\base\commands\traits;

/**
 * Trait Async
 *
 * @package hyperia\yii2\aws\s3\base\commands\traits
 */
trait Async
{
    /** @var bool */
    private $isAsync = false;

    /**
     * @return $this
     */
    final public function async()
    {
        $this->isAsync = true;

        return $this;
    }

    /**
     * @return bool
     */
    final public function isAsync(): bool
    {
        return $this->isAsync;
    }
}
