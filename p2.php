<?php
      
if(isset($_POST['submit']))
 {
if(isset($_POST["fname"])||isset($_POST["age"]))
 {  
if(($_POST['fname'] == "")||($_POST['age'] == ""))
    { die ("Enter valid Name & Age");      }
else
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testsmith";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {    die("Connection failed: " . $conn->connect_error);
}
// insert Query
$sql = "INSERT INTO reg(fname,age,gender) VALUES ('$_POST[fname]', '$_POST[age]', '$_POST[gender]')";
if ($conn->query($sql) === TRUE) 
{
    echo '<script>alert("Registration Completed successfully!");</script>';
} else 
{    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
     } 
      exit();
   }
  }
else
{
?>
<html>
   <body>
   <center>
      <form method = "POST" action="reg2.php">
         Name: <input type = "text" name = "fname" /><br/><br/>
         Age: <input type = "text" name = "age" /><br/><br/>
Gender:<input type="radio" name="gender" checked="checked" value="female">Female
<input type="radio" name="gender" value="male">Male<br/><br/>
course:<input type="radio" name="Course" checked="checked" value="wt">WT
<input type="radio" name="Course" value="mc">MC<br/><br/>

         <input type="submit" name="submit" value="Submit">
      </form>
   </center>
   </body>
</html>
<?php
}
?>


