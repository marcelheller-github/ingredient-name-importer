<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SocialFoodSolutions\ChefkochIngredientSource
 */
class ChefkochIngredientSourceTest extends TestCase
{
    /**
     * @dataProvider ingredientDataProvider
     */
    public function testHasSource(string $html, array $expectedIngredientNames): void
    {
        $ingredientSource = new ChefkochIngredientSource($html);
        $ingredientNames = $ingredientSource->getIngredientNames();

        $this->assertEquals($expectedIngredientNames, $ingredientNames);
    }

    public function ingredientDataProvider()
    {
        return [
            [
                'html' => file_get_contents(__DIR__ . '/_files/chefkoch-spagetti-bolognese.html'),
                'expectedIngredientNames' => [
                    IngredientName::from('Hackfleisch (Beefhack)'),
                    IngredientName::from('Tomate(n)'),
                    IngredientName::from('Zwiebel(n)'),
                    IngredientName::from('Knoblauch'),
                    IngredientName::from('Olivenöl'),
                    IngredientName::from('Salz'),
//            IngredientName::from('Oregano'),
//            IngredientName::from('Pfeffer'),
//            IngredientName::from('Tomatenmark'),
//            IngredientName::from('Spaghetti'),
//            IngredientName::from('Parmesan',),
//            IngredientName::from('Zucker'),
                ]
            ],
            [
                'html' => file_get_contents(__DIR__ . '/_files/chefkoch-tomatensuppe.html'),
                'expectedIngredientNames' => [
                    IngredientName::from('Tomate(n)'),
                    IngredientName::from('Zwiebel(n)'),
                    IngredientName::from('Knoblauch'),
                    IngredientName::from('Olivenöl'),
                    IngredientName::from('Salz'),
                ]
            ]
        ];
    }
}
