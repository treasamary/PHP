<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("assignment1.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("assignment1.txt"));
fclose($myfile);
?>

</body>
</html>