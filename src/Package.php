<?php

declare(strict_types=1);

namespace PhpQueues\Transport;

interface Package
{
    /**
     * @psalm-return non-empty-string
     */
    public function id(): string;

    /**
     * @psalm-return non-empty-string
     */
    public function content(): string;
    public function headers(): array;
    public function ack(): void;
    public function nack(bool $requeue, ?string $withReason = null): void;
    public function reject(bool $requeue, ?string $withReason = null): void;
}
