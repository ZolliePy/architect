<?php

namespace ZollieProject\Study;

/* This class is giving the base of categories of publications */

abstract class Category
{
    // protected $children;
    // protected $adult;
    // protected $programming;
    public $cat_name;

    // Force Extending class to define this method
    abstract public function getCategory();

    /* not every function has to be abstact in an abstract class -
    commonly used functions can be defined in the abstact class
    **/
    public function printOut()
    {
        echo "<br>Secondly from abstract parent, this book is in: " . $this->getCategory() . "<br>";
    }
}
