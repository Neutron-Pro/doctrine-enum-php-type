# Doctrine Enum PHP Type

---

## Read the enum php doc:

> https://github.com/Neutron-Pro/enum-php

---

## Installation

`composer require neutronstars/doctrine-enum-php-type`

---

## Doctrine Configuration

If you use it, you must create a Type class for your enum:

```php
namespace App\Types;

class MyEnumType extends \NeutronStars\Enum\Types\EnumType {
  public const MY_ENUM = 'my_enum';
  
  public function getName(): string
  {
    return self::MY_ENUM;
  }
  
  public function convertToPHPValue($value,\Doctrine\DBAL\Platforms\AbstractPlatform $platform): MyEnum
  {
    return MyEnum::from($value);
  }
}
```

You must add this to the `doctrine.yaml` configuration file:

```yml
doctrine:
  dbal:
    types:
      my_enum:
        class: App\Types\MyEnumType
```


On the annotation that contains the field of your entity, you must put the type:

```php
/**
 * @ORM\Column(type="my_enum")
 * @var MyEnum|null
 */
private ?MyEnum $myEnum;
```

you must comment out the column that contains the enum during your sql migration:

```php
$this->addSql('COMMENT ON COLUMN "your_table"."your_column" IS \'(DC2Type:my_enum)\';');
```

---