<?php

namespace hyperia\yii2\aws\s3;

use hyperia\yii2\aws\s3\commands\DeleteCommand;
use hyperia\yii2\aws\s3\commands\ExistCommand;
use hyperia\yii2\aws\s3\commands\GetCommand;
use hyperia\yii2\aws\s3\commands\GetPresignedUrlCommand;
use hyperia\yii2\aws\s3\commands\GetUrlCommand;
use hyperia\yii2\aws\s3\commands\PutCommand;
use hyperia\yii2\aws\s3\commands\RestoreCommand;
use hyperia\yii2\aws\s3\commands\UploadCommand;
use hyperia\yii2\aws\s3\commands\ListCommand;
use hyperia\yii2\aws\s3\interfaces;

/**
 * Class CommandFactory
 *
 * @package hyperia\yii2\aws\s3
 */
class CommandFactory
{
    /** @var \hyperia\yii2\aws\s3\interfaces\CommandBuilder */
    protected $builder;

    /**
     * CommandFactory constructor.
     *
     * @param \hyperia\yii2\aws\s3\interfaces\CommandBuilder $builder
     */
    public function __construct(interfaces\CommandBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param string $filename
     *
     * @return \hyperia\yii2\aws\s3\commands\GetCommand
     */
    public function get(string $filename): GetCommand
    {
        /** @var GetCommand $command */
        $command = $this->builder->build(GetCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $body
     *
     * @return \hyperia\yii2\aws\s3\commands\PutCommand
     */
    public function put(string $filename, $body): PutCommand
    {
        /** @var PutCommand $command */
        $command = $this->builder->build(PutCommand::class);
        $command->withFilename($filename)->withBody($body);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \hyperia\yii2\aws\s3\commands\DeleteCommand
     */
    public function delete(string $filename): DeleteCommand
    {
        /** @var DeleteCommand $command */
        $command = $this->builder->build(DeleteCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $source
     *
     * @return \hyperia\yii2\aws\s3\commands\UploadCommand
     */
    public function upload(string $filename, $source): UploadCommand
    {
        /** @var UploadCommand $command */
        $command = $this->builder->build(UploadCommand::class);
        $command->withFilename($filename)->withSource($source);

        return $command;
    }

    /**
     * @param string $filename
     * @param int    $days      lifetime of the active copy in days
     *
     * @return \hyperia\yii2\aws\s3\commands\RestoreCommand
     */
    public function restore(string $filename, int $days): RestoreCommand
    {
        /** @var RestoreCommand $command */
        $command = $this->builder->build(RestoreCommand::class);
        $command->byFilename($filename)->withLifetime($days);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \hyperia\yii2\aws\s3\commands\ExistCommand
     */
    public function exist(string $filename): ExistCommand
    {
        /** @var ExistCommand $command */
        $command = $this->builder->build(ExistCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $prefix
     *
     * @return \hyperia\yii2\aws\s3\commands\ListCommand
     */
    public function list(string $prefix): ListCommand
    {
        /** @var ListCommand $command */
        $command = $this->builder->build(ListCommand::class);
        $command->byPrefix($prefix);

        return $command;
    }

    /**
     * @param string $filename
     *
     * @return \hyperia\yii2\aws\s3\commands\GetUrlCommand
     */
    public function getUrl(string $filename): GetUrlCommand
    {
        /** @var GetUrlCommand $command */
        $command = $this->builder->build(GetUrlCommand::class);
        $command->byFilename($filename);

        return $command;
    }

    /**
     * @param string $filename
     * @param mixed  $expires
     *
     * @return \hyperia\yii2\aws\s3\commands\GetPresignedUrlCommand
     */
    public function getPresignedUrl(string $filename, $expires): GetPresignedUrlCommand
    {
        /** @var GetPresignedUrlCommand $command */
        $command = $this->builder->build(GetPresignedUrlCommand::class);
        $command->byFilename($filename)->withExpiration($expires);

        return $command;
    }
}
