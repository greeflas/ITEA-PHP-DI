<?php

namespace App\Service;

class NullLogger implements LoggerInterface
{
    public function log(int $level, string $message, array $context = []): void
    {
    }
}
