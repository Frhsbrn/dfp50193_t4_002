<?php
$name=$_POST['name'];



$myfile = fopen("papar.txt", "a") or die("Unable to open file!");
$txt = "$name\n";
fwrite($myfile, $txt);
fclose($myfile);
header('location:index.php');
