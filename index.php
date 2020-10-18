<?php
require_once('vendor/autoload.php');

use IcyApril\ChapterOne\Book;
use ZollieProject\Study\bookCategory;

$title1 = 'Excuse Me';

$myFirstBook = new Book(); // it just give back a text "...we just started..."
$myFirstBook->giveTitle($title1);
echo "<br><h2>From index page - The title is: " . $myFirstBook->getTitle();

$descShort = "This book is all about money...";
$myFirstBook->shortDescription($descShort);

$childrenCatgr = new bookCategory("children");
$myFirstBook->setCategory($childrenCatgr);

echo "<br><h3>Heyyy, hooo</h3>";
