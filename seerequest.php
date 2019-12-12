<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{


?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;">
  <tr>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Name :</th>


    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">User Name: </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Phone: </th>
    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Email:</th>
  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Accept</th>

<th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Reject</th>


  


  </tr>


  <!--- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->



  <?php


$data=array();

$cd=array();

include("function.php");

renttakerdataread();


$i=0;

foreach ($data as  $v) 
{ 
  if($v["Status"] == "no")
  {




 ?>


<tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v["FirstName"] ."  ". $v["LastName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["UserName"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Phone"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v["Email"];   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><a style='text-decoration:none;color:green;' href='accept.php?d=<?php echo $v["UserName"] ; ?> ' >

    

     Accept</a></td>

	<td style="border: 1px solid #ddd; padding: 8px;"><a style='text-decoration:none;color:red;' href='reject.php?d=<?php echo $v["UserName"] ; ?> ' >

    

     Reject</a></td>
     

 </tr>


<?php 








 }

       

      
}	


?>

</table>
</body>
</html>

<?php


}
else{
echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";
}
?>