<?php

namespace App\Service;

class DbLogger implements LoggerInterface
{
    public function log(int $level, string $message, array $context = []): void
    {
        // TODO: implement saving to DB
    }
}
