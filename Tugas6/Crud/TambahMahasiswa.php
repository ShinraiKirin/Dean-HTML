<?php
include('Connect.php')
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form UKT</title>
</head>
<body class="warp">
    <div class="container">
        <form class="form" action="proses.php" method="POST">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required><br><br>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="prodi">Prodi:</label>
            <input type="text" id="prodi" name="prodi" required><br><br>

            <label for="semester">Semester:</label>
            <input type="text" id="semester" name="semester" required><br><br>

            <label for="ukt">UKT (RP):</label>
            <input type="number" id="ukt" name="ukt" required><br><br>

            <button type="submit" value="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>