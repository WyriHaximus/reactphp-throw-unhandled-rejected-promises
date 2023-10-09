<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\React;

use React\EventLoop\Loop;
use RuntimeException;
use WyriHaximus\TestUtilities\TestCase;

use function React\Promise\reject;

final class ThrowTest extends TestCase
{
    /**
     * @test
     */
    public function throwNcatch(): void
    {
        self::expectException(RuntimeException::class);

        reject(new RuntimeException('Tik, tok, boom!'));

        Loop::run();
    }

    /**
     * @test
     */
    public function doubleThrowNcatchBoth(): void
    {
        self::expectException(RuntimeException::class);

        reject(new RuntimeException('Tik, tok!'));
        reject(new RuntimeException('Boom!'));

        Loop::run();
    }
}
