<?php

declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SocialFoodSolutions\IngredientImporter
 */
class IngredientImporterTest extends TestCase
{
    public function testCanImportIngredients(): void
    {
        $existingIngredientNames = new IngredientNames([
            IngredientName::from('Apfel'),
        ]);
        $source   = new MemoryIngredientSource();
        $importer = new IngredientImporter($existingIngredientNames);
        $events   = $importer->import($source);

        $expectedEvents = [
            new IngredientDiscoveredEvent(IngredientName::from('Birne')),
            new IngredientDiscoveredEvent(IngredientName::from('Banane')),
        ];

        $this->assertEquals($expectedEvents, $events);
    }
}