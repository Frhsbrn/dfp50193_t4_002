<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="simpan.php" method="post" name="name ">
        NAME:
        <input type="text" name="name">
        <br>
        <br>
        <button type="submit">SIMPAN</button>
    </form>

    <?php
    $myfile = fopen("papar.txt", "r") or die("Unable to open file!");
    echo nl2br(fread($myfile, filesize("papar.txt")));
    fclose($myfile);
    ?>


    <br>



</body>

</html>