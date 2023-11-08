<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action=""method="post">                                                                     
     <p>
<center>
            <h2><b><u>Login Form</u><b></h2>
        <label for="">LOGIN NAME</label>
        <input type="text" id="login"name="loginname"> <br><br>
        <label for="">PASSWORD</label>
        <input type="password" id="pass"name="pass"><br><br>
        <input type="submit"name="submit"value="submit"> 
</center>
</p> 
</form>
</body>
</html>
<?php
 $conn=mysqli_connect("localhost","root","","employee");
if(!$conn)
   {
    die("connection failed".mysqli_connect_error());
   }
else
{
    echo("connection successfull"); 
}   
if(isset($_POST["submit"]))  
{
    $a=$_POST["loginname"];
    $b=$_POST["pass"];
$in="insert into login(username,pass)values('$a','$b')";
$ins=mysqli_query($conn,$in);
$sel="select * from login";
$s=mysqli_query($conn,$sel);
echo"<table border='1'>";
echo"<tr>";
echo"<th>username</th>";
echo"<th>password</th>";
echo"</tr>";
while($row=mysqli_fetch_assoc($s))
{
    echo"<tr>";
    echo"<td>$row[username]</td>";
    echo"<td>$row[pass]</td>";
    echo"</tr>";

}
}

?>