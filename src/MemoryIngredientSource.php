<?php declare(strict_types=1);

namespace SocialFoodSolutions;

class MemoryIngredientSource implements IngredientSource
{
    public function getIngredientNames(): array
    {
        return [
            IngredientName::from('Apfel'),
            IngredientName::from('Birne'),
            IngredientName::from('Banane'),
        ];
    }
}
