<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div class="main">

    <div class="row intro mx-5 pr-5">
      <div class="col-sm-10 col-md">
        <div class="heading p-5 text-left text-white my-5">
          <h3>Welcome to</h3>
          <h1>GRIP INTERNATIONAL BANK</h1>
          <h5>"The Bank of trust"</h5>
        </div>
      </div>
      <div class="column activity p-5 m-5">
        <div class="col-md act p-4 mr-5 rounded-circle">
          <a href="trans.php"><button class="rounded-circle p-3">Customers</button></a>
        </div>
        <div class="col-md act p-4 mr-5">
          <a href="details.php"><button class="rounded-circle p-3">Transfer History</button></a>
        </div>
        <br>
      </div>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
      <p class=" p-3 bg-dark text-white text-center">Made by Kuldeep</p>
    </footer>
  </div>


</body>

</html>