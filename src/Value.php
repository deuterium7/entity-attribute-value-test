<?php

namespace AlexanderZabornyi\EntityAttributeValueTest;

class Value
{
    private $attribute;
    private $name;

    /**
     * Value constructor.
     *
     * @param Attribute $attribute
     * @param string $name
     */
    public function __construct(Attribute $attribute, string $name)
    {
        $this->attribute = $attribute;
        $this->name = $name;

        $attribute->addValue($this);
    }

    /**
     * Вернуть описание
     *
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('%s: %s', $this->attribute, $this->name);
    }
}