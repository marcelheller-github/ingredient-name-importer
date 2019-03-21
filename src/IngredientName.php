<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

final class IngredientName
{
    /** @var string */
    private $value;

    private function __construct(string $value)
    {
        if ($value === ''){
            throw new InvalidValueException('IngredientName must not be empty.');
        }

        $this->value = $value;
    }

    public static function from(string $value): IngredientName
    {
        return new self($value);
    }

    public function asString(): string
    {
        return $this->value;
    }
}
