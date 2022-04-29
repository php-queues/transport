<?php

declare(strict_types=1);

namespace PhpQueues\Transport;

/**
 * @psalm-template D as Destination
 * @psalm-template M as Message
 */
interface Producer
{
    /**
     * @psalm-param D $destination
     * @psalm-param M ...$messages
     */
    public function publish(Destination $destination, Message ...$messages): void;
}
