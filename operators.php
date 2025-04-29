<?php
  require "includes\header.php";
?>
    <?php
    //Arithmetic Operators
    echo 5+5;
    echo 5-5;
    echo 5*5;
    echo 5/5;
    echo 8%5;
    echo 5**2;
    //Variable Operators
    $x = 100;
    $x /= 20;
    //Comparison Operators
    echo $x;
    $x = 5;
    $y = 5;
    if ($x == $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 5;
    $y = 5;
    if ($x != $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 5;
    $y = "5";
    if ($x === $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 5;
    if ($x > $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 5;
    $y = 10;
    if ($x < $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 10;
    if ($x <= $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 10;
    if ($x >= $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    $x = 10;
    $y = 10;
    if ($x <> $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    //Increment/Decrement Operators
    $x = 10;
    echo $x++;
    echo $x;
    $x = 10;
    echo $x--;
    echo $x;
    //Logical Operators
    $x = 10;
    $y = 20;

    if ($x == $y or 1 == 1) {
        echo "True";
    }
    $x = 20;
    $y = 20;

    if ($x == $y and 1 == 1) {
        echo "True";
    }
    $x = 10;
    $y = 20;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }
    ?>
<?php
 require "includes/footer.php";
?>