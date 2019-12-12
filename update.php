<?php


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{








if(isset($_POST["submit"]))
         {


if( $_POST["FName"]!="" && $_POST["LName"]!="" && $_POST["Username"]!="" && $_POST["Phone"]!="" && $_POST["Email"]!="")
  {
     
   









$connect = mysqli_connect( "localhost", "root", "","labfinal");

$sql=" update employee  set   FName ='".$_POST["FName"]."',  LName  = '".$_POST["LName"]."' , Username = '".$_POST["Username"] ."', Phone = '". $_POST["Phone"]."', Email ='".$_POST["Email"] ."' where Username = ".$_GET["d"]."   " ;






$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );






echo "<h3 style='color:green'>Update  Successfull.</h3>";


}

}

















?>




<!DOCTYPE html>
<html>
<head>
	<title>Details page</title>
	<h2 style="color:blue;">Property Details:</h2>


<script  type="text/javascript">


function valid()
{


var price = document.fm.FName.value;
var size = document.fm.LName.value;
var floor = document.fm.Username.value;
var nofrooms = document.fm.Phone.value;
var address = document.fm.Email.value;



var flag = true;




if(price.length == 0  || size.length == 0  || floor.length == 0  || nofrooms.length == 0  || address.length == 0  )

{




       document.getElementById("fill").innerHTML="";   
       
       document.getElementById("fill").innerHTML="Please Fill Up all the Fields.";
       document.getElementById("fill").style.color="red";

        flag = false;




}



if(  ufile.length == 0  )

{

  
       document.getElementById("fol").innerHTML="Must select a house picture.";
       document.getElementById("fol").style.color="red";

        flag = false;






}












return flag;





}

  


</script>




























</head>
<body >

<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">



<?php





$data=array();
$cd=array();



include("function.php");



propertydataRead();







foreach ($data as  $v) 
{

	if( $_GET["d"] ==  $v["PropertyID"] )

		{


			?>

  <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; text-align: left;"> <spen style="color:green;">Rent Giver Username:</spen>  <?php  echo $v["UserName"]; ?></h3>
  
  <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;"> Price: </spen><?php   echo $v["Price"];  ?></h3>

  <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;"> Phone:</spen> <?php  echo $v["Phone"];  ?></h3>
   
  <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;"> Email: </spen><?php   echo $v["Email"]; ?></h3>

   <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;"> Area:  </spen><?php  echo $v["Area"];  ?></h3>

  <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;">Address</spen> <?php  echo $v["Address"];  ?></h3>

   <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"><spen style="color:green;">Number Of Rooms:</spen> <?php  echo $v["Room"];  ?></h3>

  <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"><spen style="color:green;">Size:</spen>  <?php  echo $v["Size"];  ?></h3>

   <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;"> Floor:</spen>  <?php  echo $v["Floor"];  ?></h3>

   <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;"> PropertyID:</spen>  <?php  echo $v["PropertyID"];  ?></h3>

   <h3  style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;text-align: left;"> <spen style="color:green;"> House Image:</spen></h3>

   <img src="<?php  echo $v['Image'];  ?>" alt="">
                     

 

<?php   
                  
                  break;  





		}





    } 








?>





</div>








<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">

<?php
 foreach ($data as  $v) 
{

  if( $_GET["d"] ==  $v["PropertyID"] )

    {

?>

<h2 style="color:blue;">Change Property Information:</h2>



  <form action="  changepro.php?d=<?php echo $_GET["d"] ; ?>   " method="post" name="fm"  enctype="multipart/form-data"  >

    <label for="price"><b></label>Price(TK) :</b></label>
    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="price" name="price" value =" <?php    echo   $v['Price'] ;?>"    placeholder="price...">
    

    <label for="Size"><b>Size(Sq):</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="size" name="Size"   value =" <?php    echo   $v['Size'] ;?>"    placeholder="Size....">

      <label for="Floor"><b>Floor:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="floor" name="Floor"   value =" <?php    echo    $v['Floor'] ;?>"   placeholder="Floor....">


   
     




     <label for="nofrooms"><b>Number of rooms:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="nofrooms" name="nofrooms"   value =" <?php    echo  $v['Room'] ; ?>"   placeholder="Number of rooms....">
    
    


    <label for="Address"><b>Address:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="Address" name="Address"   value =" <?php    echo    $v['Address'] ;?>"  placeholder="Address...">





       <label for="files"><b>Uplode House Picture:</b></label><br>
   <input style="width: 35%;padding: 12px 20px;color:blue; font-weight:bold;background-color: white;     margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="file" id="files" name="ufile"  value="<?php echo $v['Image']     ; ?>"><br>


  <b id="fol"></b>


    



   


  
  

   


     <p>

<label ><b>Area:</b></label><br><br>
  <select  name="area">
  <option value="Gulshan">Gulshan</option>
  <option value="Motijheel">Motijheel</option>
  <option value="Nayapolton">Nayapolton</option>
  
 
</select>
  
    </p><br><br><br>


<b id="fill"></b>

          
  <a href="rentgiver.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Back</a><br><br><br>


  
    <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;float: left;" type="submit"  name="submit"    onclick=" return valid() "         value="Changr Info"><br><br><br>


    
<a href="Logout.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Logeout</a><br><br><br>



   

  </form>

  <?php

  break; 

   }


  }



  ?>

</div>













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