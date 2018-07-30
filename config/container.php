<?php

return [
    \App\Service\LoggerInterface::class => DI\create(\App\Service\DbLogger::class),
];
