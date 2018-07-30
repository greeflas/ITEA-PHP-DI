<?php


namespace App\Service;

class TextChecker
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function check(string $text): array
    {
        return [];
    }
}
