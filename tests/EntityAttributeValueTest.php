<?php

namespace AlexanderZabornyi\EntityAttributeValueTest\Tests;

use AlexanderZabornyi\EntityAttributeValueTest\Attribute;
use AlexanderZabornyi\EntityAttributeValueTest\Entity;
use AlexanderZabornyi\EntityAttributeValueTest\Value;
use PHPUnit\Framework\TestCase;

class EntityAttributeValueTest extends TestCase
{
    public function testCanAddAttributeToEntity()
    {
        $colorAttribute = new Attribute('color');
        $colorSilver = new Value($colorAttribute, 'silver');

        $memory = new Attribute('memory');
        $memory8Gb = new Value($memory, '8Gb');

        $entity = new Entity('MacBook Pro', [$colorSilver, $memory8Gb]);

        $this->assertEquals('MacBook Pro, color: silver, memory: 8Gb', (string) $entity);
    }
}