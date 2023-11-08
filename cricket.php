<?php
$cricket=array("virat","Dhoni","Jadeja","bumrah","Gill");
echo "<br>==================================================<br/>";
echo "<br>Names of cricket playersas stored in an array:<br/>";
print_r($cricket);
echo "<br><br>Names of cricket players as stored in a table:<br/>";
echo "<br><table border=2 <tr><th>Player Name</th></tr><br/>";
echo"<tr><td>$cricket[0]</td></tr>";
echo"<tr><td>$cricket[1]</td></tr>";
echo"<tr><td>$cricket[2]</td></tr>";
echo"<tr><td>$cricket[3]</td></tr>";
echo"<tr><td>$cricket[4]</td></tr>";
echo"</table>";
?>