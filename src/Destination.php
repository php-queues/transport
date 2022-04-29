<?php

declare(strict_types=1);

namespace PhpQueues\Transport;

/**
 * The destination is determined on the side of the particular transport.
 * It can be a pair of exchange and routing key in case of RabbitMQ
 * or a queue name in case of NSQ, SQS and so on.
 */
interface Destination
{
}
