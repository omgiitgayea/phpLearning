<?php

define('NEW_CONSTANT', "Hey, I'm constant!");

$bool = true;
$binNum = 0b11101110011111;
$scientific = 1234E-4;
$string = "Look, a string!";

echo is_int($binNum);
echo is_bool($bool);
echo is_string($string);
echo is_float($scientific);
echo is_int($scientific);
echo is_string($string);

echo defined('NEW_CONSTANT');
echo defined('NEW_CONS');
// is_whatever or defined when false gives nothing, not 0, nothing. echo is_whatever(is_not_whatever) displays nothing