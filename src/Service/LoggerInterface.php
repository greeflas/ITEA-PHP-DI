<?php

namespace App\Service;

interface LoggerInterface
{
    public function log(int $level, string $message, array $context = []): void;
}
