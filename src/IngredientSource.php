<?php

namespace SocialFoodSolutions;

interface IngredientSource
{
    public function getIngredientNames(): array;
}