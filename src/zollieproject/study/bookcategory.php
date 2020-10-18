<?php

namespace ZollieProject\Study;

use \ZollieProject\Study\Category;

class bookCategory extends Category
{
    // name of the category
    protected $book_category_name;

    public function __construct(string $cat_name)
    {
        $this->book_category_name = $cat_name;
    }

    public function getCategory()
    {
        return $this->book_category_name;
    }

    public function print()
    {
        parent::printOut();
    }
}
