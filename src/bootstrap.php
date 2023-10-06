<?php

declare(strict_types=1);

use function React\Promise\set_rejection_handler;

set_rejection_handler(static function (\Throwable $throwable): void {
    throw $throwable;
});
