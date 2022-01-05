<?php

namespace hyperia\yii2\aws\s3\handlers;

use hyperia\yii2\aws\s3\base\handlers\Handler;
use hyperia\yii2\aws\s3\commands\GetUrlCommand;

/**
 * Class GetUrlCommandHandler
 *
 * @package hyperia\yii2\aws\s3\handlers
 */
final class GetUrlCommandHandler extends Handler
{
    /**
     * @param \hyperia\yii2\aws\s3\commands\GetUrlCommand $command
     *
     * @return string
     */
    public function handle(GetUrlCommand $command): string
    {
        return $this->s3Client->getObjectUrl($command->getBucket(), $command->getFilename());
    }
}
