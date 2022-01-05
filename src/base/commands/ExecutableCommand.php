<?php

namespace hyperia\yii2\aws\s3\base\commands;

use hyperia\yii2\aws\s3\interfaces\Bus;
use hyperia\yii2\aws\s3\interfaces\commands\ExecutableCommand as ExecutableCommandInterface;

/**
 * Class ExecutableCommand
 *
 * @package hyperia\yii2\aws\s3\base\commands
 */
abstract class ExecutableCommand implements ExecutableCommandInterface
{
    /** @var \hyperia\yii2\aws\s3\interfaces\Bus */
    private $bus;

    /**
     * ExecutableCommand constructor.
     *
     * @param \hyperia\yii2\aws\s3\interfaces\Bus $bus
     */
    public function __construct(Bus $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->bus->execute($this);
    }
}
