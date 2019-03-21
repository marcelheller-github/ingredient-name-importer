<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

class IngredientNameTest extends TestCase
{
    public function testCanGetIngredientName()
    {
        $ingredientName = IngredientName::from('Tomate');

        $this->assertInstanceOf(IngredientName::class, $ingredientName);
        $this->assertEquals('Tomate', $ingredientName->asString());
    }

    public function testThrowsExceptionWhenNameIsEmpty()
    {
        $this->expectException(InvalidValueException::class);
        $this->expectExceptionMessage('IngredientName must not be empty.');

        IngredientName::from('');
    }
}
