<?php

include 'connection.php';

$sql = mysqli_query($conn, "SELECT * FROM mahasiswa");
$result = array();
while($fetchArr = mysqli_fetch_array($sql)){
	$result[] = $fetchArr;
}
echo json_encode($result);

?>