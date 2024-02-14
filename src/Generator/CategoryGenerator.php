<?php

namespace FakeStore\Generator;


use Exception;
use FakeStore\Categories\Category;
use FakeStore\Categories\MainCategory;
use FakeStore\Categories\SubCategory;

class CategoryGenerator
{

    private static function randomize(Category $category)
    {

        //todo instance beide uitwerken
        if($category instanceof  MainCategory){
            $mainCategory = new MainCategory();
            $mainCategory->setName('oempaloempa');
        }
        if($category instanceof  SubCategory){
            SubCategory::create();
        }

    }

    public static function create( Category $class,  bool|array $randomize, ?array $given = [])
    {
        if(is_bool($randomize))
        {
           return self::randomize($class);
        }

        // bool type afgevangen
        else if(is_array($randomize))
        {
            self::deconstructRandomArray($randomize);

            if(is_null($given))
            {
                throw new Exception('niet alle vereisten zijn opgegeven');
            }

            self::deconstructGivenArray($given);

        }

    }

    private static function deconstructRandomArray(array $random)
    {

    }

    private static function deconstructGivenArray(array $given)
    {

    }
}