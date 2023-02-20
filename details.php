<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
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
        <h2 class="text-center pt-4" style="color : white;">Transaction History</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color : white;">
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'credential.php';

                    $sql = "select * from transaction";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                        ?>

                        <tr style="color : white;">
                            <td class="py-2">
                                <?php echo $rows['sno']; ?>
                            </td>
                            <td class="py-2">
                                <?php echo $rows['sender']; ?>
                            </td>
                            <td class="py-2">
                                <?php echo $rows['receiver']; ?>
                            </td>
                            <td class="py-2">
                                <?php echo $rows['balance']; ?>
                            </td>
                            <td class="py-2">
                                <?php echo $rows['datetime']; ?>
                            </td>

                            <?php
                    }

                    ?>
                </tbody>
            </table>

        </div>
        <br><br><br><br><br><br><br><br>
        <footer>
            <p class=" p-3 bg-dark text-white text-center">Made by Kuldeep</p>
        </footer>
    </div>

</body>

</html>