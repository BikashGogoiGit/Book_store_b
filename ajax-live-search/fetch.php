<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_customer 
	WHERE book_name LIKE '%".$search."%'
	OR author LIKE '%".$search."%' 
	OR catagory LIKE '%".$search."%' 
	OR language LIKE '%".$search."%' 
	OR download LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tbl_customer ORDER BY book_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Book Name</th>
							<th>author</th>
							<th>catagory</th>
							<th>language</th>
							<th>Available</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["book_name"].'</td>
				<td>'.$row["author"].'</td>
				<td>'.$row["catagory"].'</td>
				<td>'.$row["language"].'</td>
				<td>'.$row["Available"].'</td>
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