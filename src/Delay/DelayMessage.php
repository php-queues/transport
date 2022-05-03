<?php

declare(strict_types=1);

namespace PhpQueues\Transport\Delay;

use PhpQueues\Transport\Message;
use PhpQueues\Transport\Destination;
use PhpQueues\Transport\Producer;

/**
 * @psalm-template M as Message
 * @psalm-template D as Destination
 */
interface DelayMessage
{
    /**
     * @psalm-param M $message
     * @psalm-param D $destination
     * @psalm-param positive-int $delay
     *
     * @throws DelaysAreNotSupported
     */
    public function delay(
        Producer $producer,
        Message $message,
        Destination $destination,
        int $delay
    ): void;
}
