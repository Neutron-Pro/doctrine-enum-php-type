<?php

declare(strict_types=1);

namespace NeutronStars\Doctrine\Enum\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use NeutronStars\Enum\Enum;

abstract class EnumType extends Type
{
    /**
     * @param array $column
     * @param AbstractPlatform $platform
     * @return string
     */
    public function getSQLDeclaration(array $column, $platform)
    {
        return Types::STRING;
    }

    /**
     * @param mixed $value
     * @param AbstractPlatform $platform
     * @return string|null
     */
    public function convertToDatabaseValue($value, $platform)
    {
        return ($value instanceof Enum) ? (string) $value : null;
    }
}