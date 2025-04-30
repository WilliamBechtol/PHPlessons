<?php
  require "includes\header.php";
?>
<main>
    <h1>Signup</h1>
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p> Fill in All Fields!</p>';

            }
        }
        else if (($_GET['signup']== 'Success'))
    ?>
<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="Username" placeholder="Username">
    <br>
    <input type="text" name="Password" placeholder="Password">
    <br>
    <button type="submit" name="signup-submit">Sign Up</button>
</form>
</main>
<?php
 require "includes/footer.php";
?>