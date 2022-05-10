<h1>2. Stringai (movie edition)</h1>

<h2>1.</h2>

<?php
$BR = '<br>';
$a = 'Bruce';
$b = 'Campbell';
if (strlen($a) > strlen($b)) {
    echo $a;
} else {
    echo $b;
}

?>

<h2>2.</h2>

<?php
$name = 'Bruce';
$surname = 'Campbell';

$nameUpper = strtoupper($name);
$surnameLower = strtolower($surname);

echo "$nameUpper $surnameLower";


?>

<h2>3.</h2>

<?php

$actorName = 'Bruce';
$actorSurname = 'Campbell';
$firstLetters = "$actorName[0]$actorSurname[0]";
echo $firstLetters;

?>

<h2>4.</h2>

<?php

$actorN = 'Bruce';
$actorS = 'Campbell';
$lastThreeLetters = substr($actorN, -3) . substr($actorS, -3);

echo $lastThreeLetters;

?>

<h2>5.</h2>

<?php

$american = 'An American In Paris';
$find = ['A', 'a'];
$americans = str_replace($find, '*', $american);

echo $americans;
?>

<h2>6.</h2>

<?php

?>

<h2>7.</h2>

<?php

$am = 'An American In Paris';
$br = "Breakfast at Tiffany's";
$od = '2001: A Space Odyssey';
$it = "It's a Wonderful Life";

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$am = str_replace($vowels, "", $am);
$br = str_replace($vowels, "", $br);
$od = str_replace($vowels, "", $od);
$it = str_replace($vowels, "", $it);

echo $am;
echo $BR;
echo $br;
echo $BR;
echo $od;
echo $BR;
echo $it;

?>

<h2>8.</h2>

<?php

?>

<h2>9.</h2>

<?php


?>

<h2>10.</h2>

<?php

function generateRandomString($length = 3) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo generateRandomString();

?>

<h2>11.</h2>

<?php

$pirmas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$antras = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$masyvas = explode(' ', $pirmas.' '.$antras);

shuffle($masyvas);
array_splice($masyvas, 0, 13);
$atsakymas = implode(' ', $masyvas);
echo $atsakymas;
?>