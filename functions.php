<?php
  include 'C:\xampp\htdocs\PHPlessons\includes\header.php';
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>