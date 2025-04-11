<?php
  include 'C:\xampp\htdocs\PHPlessons\includes\header.php';
?>
    <?php
    $x = 1;

    if ($x == 1) {
        echo "Daniel is very handsome";
    } 
    elseif ($x == 2) {
        echo "Daniel is kinda handsome";
    }
    elseif ($x == 3) {
        echo "Daniel is kinda handsome";
    }
    elseif ($x == 4) {
        echo "Daniel is kinda handsome";
    }
    else {
        echo "Daniel is very ugly!";
    }
    ?>
    <?php
    $x = 8;

    switch ($x) {
        case 1:
            echo "the answer is 1";
        break;
        case "2":
            echo "the answer is 2";
        break;
        case "3":
            echo "the answer is 3";
        break;
        case "4":
            echo "the answer is 4";
        break;
        default:
            echo "There is no answer";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>