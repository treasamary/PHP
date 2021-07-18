<?php
$s="technology";
echo "Length of technology is ".strlen($s);  
echo "<br/>";
$s1 = "Welcome to technology"; 
$search = "come"; 
echo "<br/>$s1";
echo "<br/>$search";
$position = strpos($s1,$search);   
    if ($position == true){ 
        echo"<br/> String 'come' Found at position: " . $position." in 'Welcome to technology'"; 
    } 
    else{ echo "Not Found";     } 
 ?>
