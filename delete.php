
<?php 
include 'connection.php';

$id = $_POST['nim'];
$sql = mysqli_query($conn,"DELETE FROM data_mahasiswa WHERE nim = '$id' ");

$result['nim'] = $_POST['nim'];
$result['status'] = $sql ? "1" : "0";
echo json_encode($result);

?>