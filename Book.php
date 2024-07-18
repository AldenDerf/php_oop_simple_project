<?php
class Book
{
    public $id;
    public $title;
    public $author;
    public $isbn;

    public function __construct($id, $title, $author, $isbn)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
    }

    public function getDetails()
    {
        return "
                ID: $this->id,
                Title: $this->title,
                Author: $this->author,
                ISBN: $this->isbn
            ";
    }
}
