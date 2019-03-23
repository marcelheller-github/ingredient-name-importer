<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SocialFoodSolutions\IngredientName
 */
class IngredientNameTest extends TestCase
{
    public function testCanGetIngredientName(): void
    {
        $ingredientName = IngredientName::from('Tomate');

        $this->assertInstanceOf(IngredientName::class, $ingredientName);
        $this->assertEquals('Tomate', $ingredientName->asString());
    }

    public function testThrowsExceptionWhenNameIsEmpty(): void
    {
        $this->expectException(InvalidValueException::class);
        $this->expectExceptionMessage('IngredientName must not be empty.');

        IngredientName::from('');
    }
}
