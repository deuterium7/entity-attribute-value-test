<?php

namespace AlexanderZabornyi\EntityAttributeValueTest;

class Attribute
{
    private $values;
    private $name;

    /**
     * Attribute constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->values = new \SplObjectStorage();
    }

    /**
     * Добавить значение
     *
     * @param Value $value
     */
    public function addValue(Value $value)
    {
        $this->values->attach($value);
    }

    /**
     * Вернуть значения
     *
     * @return \SplObjectStorage
     */
    public function getValues(): \SplObjectStorage
    {
        return $this->values;
    }

    /**
     * Вернуть имя атрибута
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }
}