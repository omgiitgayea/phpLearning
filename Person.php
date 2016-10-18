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

    public $firstName;
    public $lastName;
    public $yearBorn;

    function __construct($firstName = "", $lastName = "", $yearBorn = 0)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->yearBorn = $yearBorn;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($newName)
    {
        $this->firstName = $newName;
    }
}

$myObject = new Person("Alexander", "Luthor", 1939);

echo $myObject->firstName."...hmmm, no wait\n";
$myObject->firstName = "Lena";
echo $myObject->firstName."\n";
echo $myObject->lastName."\n";
echo $myObject->yearBorn."\n";

echo Person::AVG_LIFE_SPAN."\n";

$myObject->setFirstName("Lex");
echo $myObject->getFirstName();