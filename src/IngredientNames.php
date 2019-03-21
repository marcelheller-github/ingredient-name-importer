<?php declare(strict_types=1);

namespace SocialFoodSolutions;

class IngredientNames
{
    /** @var IngredientName[] */
    private $names;

    public function __construct(array $names = [])
    {
        $this->names = $names;
    }

    public function hasName(IngredientName $name): bool
    {
        foreach ($this->names as $ingredientName) {
            if ($ingredientName->asString() === $name->asString()) {
                return true;
            }
        }

        return false;
    }
}
