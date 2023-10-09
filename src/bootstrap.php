<?php

declare(strict_types=1);

use React\EventLoop\Loop;
use function React\Promise\set_rejection_handler;

(static function () {
    $handler = static function (\Throwable $throwable) use (&$handler): void {
        set_rejection_handler($handler);
        Loop::futureTick(static fn () => throw $throwable);
    };
    set_rejection_handler($handler);
})();
