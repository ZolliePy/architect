<?php
namespace IcyApril\ChapterOne;

use \ZollieProject\Study\Title;
use \ZollieProject\Study\bookCategory;

class Book
{
    use Title;

    public $bookCategory;
    // public $title;

    public function __construct()
    {
        echo "Ohh my friend, we just started here again...:)";
    }

    public function setCategory(bookCategory $bookCategory)
    {
        $this->bookCategory = $bookCategory;
        // echo "<br>This book is in the category: " . $this->bookCategory->book_category_name;

        // print using the bookCategory->print() method
        $this->bookCategory->print();

        // using the Category abstract class inherited printOut() method directly.
        echo "<br>Third from abstract printOut() function: ";
        $this->bookCategory->printOut();
    }
}
