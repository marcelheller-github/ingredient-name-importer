<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

final class IngredientDiscoveredEvent
{
    /** @var IngredientName */
    private $ingredientName;

    public function __construct(IngredientName $ingredientName)
    {
        $this->ingredientName = $ingredientName;
    }

    public function getIngredientName(): IngredientName
    {
        return $this->ingredientName;
    }
}
