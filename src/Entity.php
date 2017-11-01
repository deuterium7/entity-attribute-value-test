<?php

namespace AlexanderZabornyi\EntityAttributeValueTest;

class Entity
{
    private $values;
    private $name;

    /**
     * Entity constructor.
     *
     * @param string $name
     * @param $values
     */
    public function __construct(string $name, $values)
    {
        $this->name = $name;
        $this->values = new \SplObjectStorage();

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    /**
     * Возвращаем полное описание
     *
     * @return string
     */
    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return join(', ', $text);
    }
}