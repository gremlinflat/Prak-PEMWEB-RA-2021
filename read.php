<?php

include 'connection.php';

$db = mysqli_query($conn, "SELECT * FROM data_mahasiswa");
$result = array();
while($row=mysqli_fetch_array($db)){
	$result[] = $row;
}
echo json_encode($result);

?>