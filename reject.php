<?php

$up= "yes";

$connect = mysqli_connect( "localhost", "root", "","labfinal");

$sql=" delete from employee where  Username = '".$_GET["d"]."'   " ;






$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );






echo "<h3 style='color:green'>Update  Successfull.</h3>";

header("location:seerequest.php");
?>
