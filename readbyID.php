<?php 
include 'connection.php';

$id = $_POST['id'];
$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE nim = '$id' ");
$result = mysqli_fetch_array($sql);
$result['id'] = $id;
echo json_encode($result);
?>