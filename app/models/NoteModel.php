<?php

class NoteModel
{
    private $title;
    private $description;
    public $dbConection;

    public function __construct()
    {
        $this->dbConection = new DatabaseConnection('localhost', 'root', 'root', 'note_mvc');
    }
}
