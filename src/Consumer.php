<?php

declare(strict_types=1);

namespace PhpQueues\Transport;

interface Consumer
{
    /**
     * @psalm-param callable(Package):void $consumer
     * @psalm-param non-empty-string $queue
     */
    public function consume(callable $consumer, string $queue): void;

    /**
     * @psalm-param non-empty-string $queue
     */
    public function once(string $queue): ?Package;
}
