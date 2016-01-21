<html>
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="form.css">
    </head>
    <body style="background-color:aqua;alignment-adjust: central">
<?php
$username= $_POST['name'];
$pass= $_POST['pass'];

if($_POST['login'])
{
if($username=="puja" and $pass=="123")
{
   
    
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID,NAME,JOB,SAL FROM emp";
$result = $conn->query($sql);


     // output data of each row
     echo '<table border="1" width="60%" class="center"><tr><th>ID</th><th>NAME</th><th>JOB</th><th>SAL</th>';
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["ID"]. "</td><td>". $row["NAME"]. "</td><td>" . $row["JOB"] . "</td><td>" . $row["SAL"] . " </td>";
     }
 

$conn->close();  
    
    
     echo '<form action="index.php" method="POST"><input type="submit" name"logout" value="LOGOUT"/></form>';
}
 else {
    echo 'SOMETHING WENT WRONG';  
    echo '<form action="index.php" method="POST"><input type="submit" name"logout" value="LOGOUT"/></form>';
 }
}
elseif ($_POST['logout']) {
    echo 'wrong';
}

 
?>
    </body>
</html>>