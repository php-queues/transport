<?php

declare(strict_types=1);

namespace PhpQueues\Transport\Delay;

use PhpQueues\Transport\Message;
use PhpQueues\Transport\Destination;

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
    public function delay(Message $message, Destination $destination, int $delay): void;
}
