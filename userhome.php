


<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{
  $_SESSION["uname"]=$_COOKIE["uname"];


?>


<!DOCTYPE html>
<html>
<head>




</head>
<body>
<p><h2>Welcome   <?php echo $_SESSION["uname"] ?> !!!!! </h2></p>







<a href="Logout.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Logeout</a><br><br><br>


<td style="border: 1px solid #ddd; padding: 8px;"><a style='text-decoration:none;color:blue;' href='Profile.php?d=<?php echo $v["UserName"] ; ?> ' >Profile </a></td>

</tr>


  



</body>
</html>




<?php


}




else
{

 echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";

 

       
}


?>