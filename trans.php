<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do TRANSACTION</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <?php
  include 'credential.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>


  <?php
  include 'navbar.php';
  ?>

  <div class="main">
    <h2 class="text-center pt-4" style="color : white;">Transfer Money</h2>
    <br>
    <div class="row">
      <div class="col">
        <div class="table-responsive-sm">
          <table class="table table-hover table-sm table-striped table-condensed table-bordered"
            style="border-color:white;">
            <thead style="color : white;">
              <tr>
                <th scope="col" class="text-center py-2">Id</th>
                <th scope="col" class="text-center py-2">Name</th>
                <th scope="col" class="text-center py-2">E-Mail</th>
                <th scope="col" class="text-center py-2">Balance</th>
                <th scope="col" class="text-center py-2">Operation</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                <tr style="color : white;">
                  <td class="py-2">
                    <?php echo $rows['id'] ?>
                  </td>
                  <td class="py-2">
                    <?php echo $rows['name'] ?>
                  </td>
                  <td class="py-2">
                    <?php echo $rows['email'] ?>
                  </td>
                  <td class="py-2">
                    <?php echo $rows['balance'] ?>
                  </td>
                  <td><a href="maintransaction.php?id= <?php echo $rows['id']; ?>"> <button type="button"
                        class="col-md act p-1">Transact</button></a></td>
                </tr>
                <?php
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <footer>
      <p class=" p-3 bg-dark text-white text-center">Made by Kuldeep</p>
    </footer>
  </div>


</body>

</html>