<?php

namespace hyperia\yii2\aws\s3\handlers;

use hyperia\yii2\aws\s3\base\handlers\Handler;
use hyperia\yii2\aws\s3\commands\GetPresignedUrlCommand;

/**
 * Class GetPresignedUrlCommandHandler
 *
 * @package hyperia\yii2\aws\s3\handlers
 */
final class GetPresignedUrlCommandHandler extends Handler
{
    /**
     * @param \hyperia\yii2\aws\s3\commands\GetPresignedUrlCommand $command
     *
     * @return string
     */
    public function handle(GetPresignedUrlCommand $command): string
    {
        $awsCommand = $this->s3Client->getCommand('GetObject', $command->getArgs());
        $request = $this->s3Client->createPresignedRequest($awsCommand, $command->getExpiration());

        return (string)$request->getUri();
    }
}
