<html>
<body>
<?php
$username="root";
$password="";
$database="db1";
$mysqli = new mysqli("localhost", $username, $password, $database); //##@mysql_select_db($database) or die( "Unable to select database");
$query2="SELECT * FROM user";
$result=$mysqli->query($query2);
$num=$mysqli->mysqli_num_rows($result);?>
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td>
<font face="Arial, Helvetica, sans-serif">id</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">fname</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">lname</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">filename</font>
</td>
</tr>
<?php
$i=0;
while ($i < $num) {
$f1=mysql_result($result,$i,"field1");
$f2=mysql_result($result,$i,"field2");
$f3=mysql_result($result,$i,"field3");
$f4=mysql_result($result,$i,"field4");
$f5=mysql_result($result,$i,"field5");?>
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
</td>
</tr>
<?php
$i++;
}?>
</body>
</html>