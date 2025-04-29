<?php
  require "includes\header.php";
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
<?php
 require "includes/footer.php";
?>