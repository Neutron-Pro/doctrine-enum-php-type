<?php

declare(strict_types=1);

namespace NeutronStars\Doctrine\Enum\Type\Tests\Fixture;

use NeutronStars\Enum\Enum;

/**
 * @method static self FOO()
 * @method static self BAR()
 * Class FooBarEnum
 * @package NeutronStars\Doctrine\Enum\Type\Tests\Fixture
 */
class FooBarEnum extends Enum
{
    public const FOO = 'Foo';
    public const BAR = 'Bar';
}