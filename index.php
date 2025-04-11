<?php
  include 'C:\xampp\htdocs\PHPlessons\includes\header.php';
?>
  <form method="GET">
      <input type="text" name="person">
      <button class="btn btn-dark">SUBMIT</button>
  </form>
  <?php
    $name = $_GET['person'];
    echo $name." is MASSIVE!";
  ?> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>