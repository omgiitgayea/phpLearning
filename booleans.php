<?php

$bool = true;
$hasValue = -1234;

var_dump($bool);
var_dump((bool)$hasValue);

$hasValue = "";
var_dump((bool)$hasValue);

// (bool)("") is false
// (bool)("Heya!" is true