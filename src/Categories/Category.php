<?php

namespace FakeStore\Categories;

class Category
{


    private function __construct(string $catName)
    {
       echo  'ik ben de category construct';
    }

    private static array $mainCategories = [
        'Elektronica',
        'Kleding en Mode',
        'Huis en Tuin',
        'Gezondheid en Schoonheid',
        'Sport en Vrije Tijd',
        'Boeken en Media',
        'Voeding en Drank',
        'Auto\'s en Motorfietsen',
        'Speelgoed en Kinderartikelen',
        'Kunst en Ambachten',
        ];

    private static $categoryCollection = [
        'Elektronica' => [
            'Smartphones',
            'Laptops',
            'Camera\'s',
            'Televisies',
            'Audioapparatuur',
        ],
        'Kleding en Mode' => [
            'Dameskleding',
            'Herenkleding',
            'Kinderkleding',
            'Schoenen',
            'Accessoires',
        ],
        'Huis en Tuin' => [
            'Meubels',
            'Keukengerei',
            'Beddengoed',
            'Tuinartikelen',
            'Decoratie',
        ],
        'Gezondheid en Schoonheid' => [
            'Cosmetica',
            'Verzorgingsproducten',
            'Vitaminen en supplementen',
            'Haarverzorging',
            'Gezondheidsapparaten',
        ],
        'Sport en Vrije Tijd' => [
            'Sportkleding',
            'Sportuitrusting',
            'Fitnessapparatuur',
            'Kampeeruitrusting',
            'Recreatieve activiteiten',
        ],
        'Boeken en Media' => [
            'Boeken',
            'Films',
            'Muziek',
            'Videogames',
            'Tijdschriften',
        ],
        'Voeding en Drank' => [
            'Kruidenierswaren',
            'Dranken',
            'Snoepgoed',
            'Versproducten',
            'Dieetproducten',
        ],
        'Auto\'s en Motorfietsen' => [
            'Auto-onderdelen',
            'Accessoires',
            'Motorfietsen',
            'Onderhoudsproducten',
            'Gereedschap',
        ],
        'Speelgoed en Kinderartikelen' => [
            'Educatief speelgoed',
            'Knuffels',
            'Bordspellen',
            'Kinderkleding',
            'Kinderwagens',
        ],
        'Kunst en Ambachten' => [
            'Schilderijen',
            'Handgemaakte producten',
            'Ambachtelijke materialen',
            'Kunstbenodigdheden',
            'Decoratieve kunst',
        ],
    ];

    public static function getMainCategoryCollection() : array {
        return self::$mainCategories;
    }
    public static function getCategoryCollection() : array {
        return self::$categoryCollection;
    }

}
