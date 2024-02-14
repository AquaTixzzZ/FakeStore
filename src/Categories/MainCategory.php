<?php

namespace FakeStore\Categories;

class MainCategory extends Category
{
    public function __construct(private string $name)
    {
    }


  public  function setName() {
      $mainCatName =  Category::getMainCategoryCollection()[array_rand(Category::getMainCategoryCollection())];

      return self();
  }
}