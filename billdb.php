<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>electricity bill</title>
</head>
<body>
    <h1>ELECTRICITY BILL</h1>
    <form action="#" method="post">
        Consumer ID:<input type="number" name="id"><br><br>
        Name:<input type="text" name="name"><br><br>
        Previous Reading:<input type="number" name="prev"><br><br>
        Present Reading:<input type="number"name="pres"><br><br>
        <input type="submit">
    </form>
</body>
</html>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
     {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $prev=$_POST['prev'];
        $pres=$_POST['pres'];
        $units=$pres-$prev;
        echo"-------------------------------------------------";
        echo"<h3>KERALA STATE ELECTRICITY BOARD(KSEB)</h3>";
        echo"<br><br>";
        echo"Consumer ID:".$id."<br>";
        echo"Consumer name:".$name."<br>";
        echo"Units Consumed:".$units."<br>";
       
        if($units<=100)
        {
            $amt=$units*3;
        }
        else if($units>100&&$units<=200)
        {
            $amt=$units*4;
        }
        else if($units>200&&$units<=300)
        {
            $amt=$units*5;
        }
        else
        {
          $amt=$units*5;
        }
        echo"<h4>Total:Rs.".($amt)."</h4><br>";
        echo"----------------------------------------------------";
        
       
    }
    $conn=mysqli_connect("localhost","root","","electricity");
    if(!$conn)
       {
        die("connection failed".mysqli_connect_error());
       }
       else
       {
        echo("connection successful");
       }
    if(isset($_POST["submit"]))
    {
     $a=$_POST["id"];
     $b=$_POST["name"];
     $c=$_POST["prev"];
     $d=$_POST["pres"];
     $e=$_POST["units"];
     $f=$_POST["amt"];
     $in="insert into bill(cid,cname,pre,prs,unit,amnt)value('$a','$b','$c','$d','$e','$f')";
     $ins=mysqli_query($conn,$in);
     $sel="select * from bill";
     $s=mysqli_query($conn,$sel);
    
        while($row=mysqli_fetch_assoc($s))
         {
            echo"<tr>";
            echo"<td>$row[cid]</td>";
            echo"<td>$row[cname]</td>";
            echo"<td>$row[pre]</td>";
            echo"<td>$row[prs]</td>";
            echo"<td>$row[unit]</td>";
            echo"<td>$row[amnt]</td>";
            echo"</tr>";


         }
        }


    ?>
    