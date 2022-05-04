<?php

declare(strict_types=1);

namespace PhpQueues\Transport;

/**
 * @psalm-template M as Message
 */
interface Producer
{
    /**
     * @psalm-param M ...$messages
     */
    public function publish(Message ...$messages): void;
}
