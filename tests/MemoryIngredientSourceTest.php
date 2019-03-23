<?php declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

class MemoryIngredientSourceTest extends TestCase
{
    /**
     * @covers \SocialFoodSolutions\MemoryIngredientSource
     * @uses \SocialFoodSolutions\IngredientName
     */
    public function testHasSource(): void
    {
        $ingredientSource = new MemoryIngredientSource();
        $ingredientNames  = $ingredientSource->getIngredientNames();

        $expectedIngredientNames = [
            IngredientName::from('Apfel'),
            IngredientName::from('Birne'),
            IngredientName::from('Banane'),
        ];

        $this->assertEquals($expectedIngredientNames, $ingredientNames);
    }
}
