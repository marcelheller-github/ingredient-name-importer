<?php declare(strict_types=1);

namespace SocialFoodSolutions;

class ChefkochIngredientSource implements IngredientSource
{
    /** @var string */
    private $html;

    public function __construct(string $html)
    {
        $this->html = $html;
    }


    public function getIngredientNames(): array
    {
        // TODO: Auch Ingrediens ohne Link müssen ausgelesen werden können.

        $xpathValue = '//*[@id="recipe-incredients"]/div[1]/div[2]/table/tr/td[2]/a/text()';

        $doc = new \DOMDocument();
        @$doc->loadHTML($this->html);
        $xpath = new \DOMXPath($doc);
        $elements = $xpath->query($xpathValue);

        $ingredientNames = [];

        foreach ($elements as $element) {
            $ingredientName = IngredientName::from(trim($element->nodeValue));
            $ingredientNames[] = $ingredientName;
        }

        return $ingredientNames;
    }
}
