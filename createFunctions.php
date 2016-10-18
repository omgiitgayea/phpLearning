<?php

function booksByAuthorYear($tempName, $tempYear = 1910)     // default value set
{
    echo $tempYear;
    echo "\n";
    echo $tempName;
    echo "\n";
}

$authorName = "Joe Blow";
$year = 1920;
booksByAuthorYear($authorName, $year);
booksByAuthorYear($authorName);

$authors = array(
    "Charles Dickens",
    "Jane Austin",
    "William Shakespeare",
    "Mark Twain",
    "William Gibson"
);

echo in_array("William Gibson", $authors);
echo in_array("Maren Hansen", $authors);
echo "\n";

asort($authors);

print_r($authors);

foreach($authors as $val)
{
    echo $val."\n";
}