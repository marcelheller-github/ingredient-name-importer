<?php declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SocialFoodSolutions\MemoryIngredientSource
 */
class MemoryIngredientSourceTest extends TestCase
{
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
