<?php

namespace hyperia\yii2\aws\s3;

use hyperia\yii2\aws\s3\interfaces;

/**
 * Class Bus
 *
 * @package hyperia\yii2\aws\s3
 */
class Bus implements interfaces\Bus
{
    /** @var interfaces\HandlerResolver */
    protected $resolver;

    /**
     * Bus constructor.
     *
     * @param \hyperia\yii2\aws\s3\interfaces\HandlerResolver $inflector
     */
    public function __construct(interfaces\HandlerResolver $inflector)
    {
        $this->resolver = $inflector;
    }

    /**
     * @param \hyperia\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(interfaces\commands\Command $command)
    {
        $handler = $this->resolver->resolve($command);

        return call_user_func([$handler, 'handle'], $command);
    }
}
