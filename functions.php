<?php
  require "includes\header.php";
?>

<?php

function newcalc($x) {
    $newnr = $x * 0.75;
    echo "Here is 75% of what you wrote: ".$newnr;
}

$x = 100;
newcalc($x);

echo "<br>";

$a = 10;
newcalc($a);

echo "<br>";

?>
<?php

function newercalc($y) {
    $h = $y * $y;
    echo "Here is your number raised to the second power ".$h;
}

$y = 20;

newercalc($y);

?>

<?php
 require "includes/footer.php";
?>