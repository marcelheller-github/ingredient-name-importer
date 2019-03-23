<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

class IngredientNamesTest extends TestCase
{
    /**
     * @covers \SocialFoodSolutions\IngredientNames
     * @uses \SocialFoodSolutions\IngredientName
     */
    public function testHasName(): void
    {
        $ingredientNames = new IngredientNames([
            IngredientName::from('Gurke'),
        ]);

        $status = $ingredientNames->hasName(IngredientName::from('Tomate'));
        $this->assertFalse($status);

        $status = $ingredientNames->hasName(IngredientName::from('Gurke'));
        $this->assertTrue($status);
    }
}
