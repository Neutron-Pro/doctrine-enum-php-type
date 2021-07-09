<?php

declare(strict_types=1);

namespace NeutronStars\Doctrine\Enum\Type\Tests;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\PostgreSQL100Platform;
use Doctrine\DBAL\Types\Type;
use NeutronStars\Doctrine\Enum\Type\Tests\Fixture\FooBarEnum;
use NeutronStars\Doctrine\Enum\Type\Tests\Fixture\FooBarEnumType;
use PHPUnit\Framework\TestCase;

class TestDoctrineEnumType extends TestCase
{
    public function testConvertToDataBaseValue()
    {
        $enumType = new FooBarEnumType();
        $this->assertSame(
            'BAR',
            $enumType->convertToDatabaseValue(FooBarEnum::BAR(), new PostgreSQL100Platform())
        );
    }

    public function testConvertToPHPValue()
    {
        $enumType = new FooBarEnumType();
        $this->assertSame(
            FooBarEnum::FOO(),
            $enumType->convertToPHPValue('FOO', new PostgreSQL100Platform())
        );
    }
}