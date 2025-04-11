<?php
  include 'C:\xampp\htdocs\PHPlessons\includes\header.php';
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>