<?php

/* this class helps in giving the basic details to a publication */

namespace ZollieProject\Study;

trait Title
{
    /**
    * Title of the publication
    *
    * @var    string
    * @since  1.0.0
    */
    private $title = null;

    /**
    * Short description of the publication
    *
    * @var    string
    * @since  1.0.0
    */
    public $short_desc = null;

    /**
    * Constructor creating the publication title and short description
    *
    * @param   string      $identifier  The primary key of the user to load (optional).
    *
    * @since   1.7.0
    */

    public function giveTitle(string $title)
    {
        $this->title = $title;
        // echo "<br><h2>The title is: " . $this->title;
    }

    public function shortDescription(string $short_desc)
    {
        $this->short_desc = $short_desc;
        echo "<br><h2>The short description is: " . $this->short_desc;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
