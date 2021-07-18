<!DOCTYPE html >
<html><head> <title> today.php </title> </head>
<body> <p>
<?php
print "<b>Welcome to my home page <br /> <br />";
 print "Today is:</b> ";
echo date("d/m/y");
 print "<br />";
// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";
?></p> </body></html>
