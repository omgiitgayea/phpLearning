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