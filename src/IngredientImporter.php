<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

class IngredientImporter
{
    /** @var IngredientNames */
    private $existingIngredientNames;

    public function __construct(IngredientNames $existingIngredientNames)
    {
        $this->existingIngredientNames = $existingIngredientNames;
    }

    public function import(IngredientSource $source): array
    {
        $events = [];

        foreach ($source->getIngredientNames() as $ingredientName) {
            if ($this->existingIngredientNames->hasName($ingredientName) === false) {
                $events[] = new IngredientDiscoveredEvent($ingredientName);
            }
        }

        return $events;
    }
}
