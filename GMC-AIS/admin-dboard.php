<?php
    require('admin-dheader.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="display-3">Appointment Summary</h1>
        </div>
        <div class="row justify-content-end">
            <div class="col">
                <a href="admin-appt-mngt.php">Manage Appointment List</a>
            </div>
        </div>
    </div>
    <?php
        require('admin-appt-summary.php')
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0671d081f4.js" crossorigin="anonymous"></script>
</body>
</html>