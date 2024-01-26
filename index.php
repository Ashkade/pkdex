<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKDEX</title>
</head>
<body>
    
    <form action="form.php" method="POST">

    <input type="text" name="pkmnName" placeholder="Enter the Pokemon's name">

    <input type="submit" value="Search">

    <!-- <input type="text" value="POKEMON NUMBER" readonly>
    
    <input type="text" value="POKEMON TYPE" readonly> -->

    </form>

    <?php
     include 'class.php';
    ?>

</body>
</html>