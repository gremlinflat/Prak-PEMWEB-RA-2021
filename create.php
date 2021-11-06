<?php

include "connection.php";

$nama = $_POST["nama"];
$tempat = $_POST["tempat"];
$tanggallahir = $_POST["tanggallahir"];
$gender = $_POST["gender"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];

if(!($nama=='' || $tempat=='' || $tanggallahir=='' || $gender=='' || $nim=='' || $prodi=='')){
	$sql = mysqli_query($conn,"INSERT INTO data_mahasiswa VALUES('$nim','$nama','$tempat','$tanggallahir','$jeniskelamin','$prodi')");
}

$result['status'] = $sql ? "1" : "0";
echo json_encode($result);

?>