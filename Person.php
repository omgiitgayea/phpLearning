<?php

/**
 * Created by PhpStorm.
 * User: Godai Yuusaku
 * Date: 10/17/2016
 * Time: 9:11 PM
 */
class Person
{
    const AVG_LIFE_SPAN = 79;

    private $firstName;
    private $lastName;
    private $yearBorn;

    function __construct($firstName = "", $lastName = "", $yearBorn = 0)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->yearBorn = $yearBorn;
    }

    public function getFirstName()
    {
        return $this->firstName.PHP_EOL;
    }
    public function setFirstName($newName)
    {
        $this->firstName = $newName;
    }
    protected function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }
}

class Author extends Person
{
    private $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->getFullName().", aka, ".$this->penName;
    }
}

$newAuthor = new Author("Samuel", "Clemens", 1899);