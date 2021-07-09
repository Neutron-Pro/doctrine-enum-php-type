<?php

declare(strict_types=1);

namespace NeutronStars\Doctrine\Enum\Type\Tests\Fixture;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use NeutronStars\Doctrine\Enum\Type\EnumType;

class FooBarEnumType extends EnumType
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'foo_bar_enum_type';
    }

    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return string|void|null
     * @throws \ReflectionException
     */
    public function convertToPHPValue($value, $platform)
    {
        return FooBarEnum::from($value);
    }
}