<?php
$connect = mysqli_connect("localhost", "root", "", "labfinal");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM employee 
	WHERE FName LIKE '%".$search."%'
	OR LName LIKE '%".$search."%' 
	OR Username LIKE '%".$search."%' 
	OR Phone LIKE '%".$search."%' 
	OR Email LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM employee ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["FName"].'</td>
				<td>'.$row["LName"].'</td>
				<td>'.$row["Username"].'</td>
				<td>'.$row["Phone"].'</td>
				<td>'.$row["Email"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>