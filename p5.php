<?php
$s="Technology";
echo "Length of Technology is ".strlen($s);  
echo "<br/>";
$s1 = "Welcome to Technology"; 
$search = "tech"; 
echo "<br/>$s1";
echo "<br/>$search";
$position = strpos($s1,$search);   
    if ($position == true){ 
        echo"<br/> String 'tech' Found at position: " . $position." in 'Welcome to Technology'";     } 
    Else
{  echo "Not Found";    } 
 ?>
