<?php
    if(isset($_POST['submit']))
 {
if(($_POST['name'] == "")||($_POST['age'] == ""))
 	{
       	  die ("Enter valid Name & Age");    
	  }
else
{
 if ((preg_match("/^[A-Za-z]/",$_POST['name'] ))||(preg_match("/^[0-9]/",$_POST['age'] )) )
      {
	echo "Welcome ". $_POST['name']. "<br />";
      	echo "You are ". $_POST['age']. " years old.";
     } 
   else
	{  die (" Name -characters & Age - Numbers");}
      exit();
   }
 } 
else {
?>
<html>
   <body>
   <center>
      <form method = "POST" action="reg1.php">
         Name: <input type = "text" name = "name" /><br/><br/>
         Age: <input type = "text" name = "age" /><br/><br/>
         <input type="submit" name="submit" value="Submit">
      </form>
   </center>
   </body>
</html>
<?php
}
?>
