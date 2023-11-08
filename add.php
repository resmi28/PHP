<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
            input {
                width: 200px;
            
            }
            label{
                display: block;
             
            }
            button{
              width: 100px;
            }
        </style>
</head>
<?php
 $n1= $_POST["num1"];
 $n2= $_POST["num2"];
 $n3="";
if(isset($_POST["sum"]))
{
   
    $n3= $n1+$n2;
  
}
if(isset($_POST["diff"]))
{
   
    $n3= $n1-$n2;
  
}
if(isset($_POST["multi"]))
 {
    
    $n3= $n1*$n2;
   
 }
 if(isset($_POST["div"]))
{
   
    $n3= $n1/$n2;
   
}
if(isset($_POST["mod"]))
{
   
    $n3= $n1%$n2;
    
}
?>
<body>
<form action="" method="post">

<p>
<label for="" class="form-label"> First number</label>
<input type="text" class="form-control" id="num1" name="num1" value="<?php echo $n1;?>"><br><br>
<label for="">Second number</label>
<input type="text" name="num2" id="num2" value="<?php echo $n2;?>"><br><br>
<label for=""> The Result is </label>
<input readonly="readonly" name="num3"  id="num3" value="<?php echo $n3;?>"/><br><br>
<button name="sum">sum</button>
<button name="diff">Subtract</button>
<button name="multi">Multiplication</button>
<button name="div">Division</button>
<button name="mod">modulus</button>
</p>
</form>

    
</body>
</html>


