
<?php

function logindataRead()
{


global $temp;
global $cred;
global $stat;



$connect = mysqli_connect( "localhost", "root", "","labfinal");

$sql=" select * from login ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$uname = trim($row["UserName"] );
$pass = trim( $row["Password"]) ;
$utype	=  trim($row["Usertype"] );

$temp [ $uname ] = $pass ;

$cred [ $uname ] = $utype ;
$stat [ $uname ] = $uname ;

}


}










function renttakerdataread()

{


global $data;




$connect = mysqli_connect( "localhost", "root", "","labfinal");

$sql=" select * from employee ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$cd["FirstName"]=$row["FName"];

$cd["LastName"]=$row["LName"];

$cd["UserName"]=$row["Username"];

$cd["Phone"]=$row["Phone"];

$cd["Email"]=$row["Email"];

$cd["Password"]=$row["Password"];

$cd["Status"]=$row["Status"];




$data[] = $cd;



}
}

function profiledataread()

{


global $data;




$connect = mysqli_connect( "localhost", "root", "","labfinal");

$sql=" select * from employee ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );

while ($row = mysqli_fetch_assoc($result)  ) 
{

$cd["FirstName"]=$row["FName"];

$cd["LastName"]=$row["LName"];

$cd["UserName"]=$row["Username"];

$cd["Phone"]=$row["Phone"];

$cd["Email"]=$row["Email"];

$cd["Password"]=$row["Password"];

$cd["Status"]=$row["Status"];




$data[] = $cd;



}




}












?>