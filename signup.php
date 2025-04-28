<?php
    include "header.php";
?>
<main>
    <h1>Signup</h1>
<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="Username" placeholder="Username">
    <br>
    <input type="text" name="Password" placeholder="Password">
    <br>
    <button type="submit" name="signup-submit">Sign Up</button>
</form>
</main>
<?php
    require "footer.php";
?>