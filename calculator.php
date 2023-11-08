<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<?php
$firstnumber=$_POST["firstnumber"];
$secondnumber=$_POST["secondnumber"];
$operator=$_POST["operator"];
$calculatorresult="";
if(is_numeric($firstnumber)&&is_numeric($secondnumber))
{
    switch($operator)
     {
         case "sum":
            $calculatorresult=$firstnumber+$secondnumber;
            break;
        case "subtraction":
            $calculatorresult=$firstnumber-$secondnumber;
            break;
        case "multiplication":
            $calculatorresult=$firstnumber*$secondnumber;
            break;
        case "division":
            $calculatorresult=$firstnumber/$secondnumber;       
     }
}
?>
<body>
    <center>
  <div id="page-wrap">
    
    <h1>CALCULATOR</h1>
    <form action="" method="post" id="quiz-form">
        <p>
            <input type="number" name="firstnumber" id="firstnumber" required="required" value="<?php echo $firstnumber;?>"/>
            <b> First Number</b>
        </p>
        <p>
            <input type="number" name="secondnumber" id="secondnumber" required="required" value="<?php echo $secondnumber;?>"/>
            <b> Second Number</b>
        </p>
        <p>
            <input readonly="readonly" name="calculatorresult"  value="<?php echo $calculatorresult;?>"/>
            <b> Calculator result</b>
        </p>
        <input type="submit" name="operator" value="sum"/>
        <input type="submit" name="operator" value="subtraction"/>
        <input type="submit" name="operator" value="multiplication"/>
        <input type="submit" name="operator" value="division"/>


    </form>  
</div>
</center>
</body>
</html>