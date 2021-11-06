<?php

include "connection.php";

$nama = $_POST["nama"];
$tempat = $_POST["tempat"];
$tanggallahir = $_POST["tanggallahir"];
$jeniskelamin = $_POST["jeniskelamin"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];

if(!($nama=='' || $tempat=='' || $tanggallahir=='' || $jeniskelamin=='' || $nim=='' || $prodi=='')){
	$sql = mysqli_query($conn,"INSERT INTO data_mahasiswa VALUES('$nim','$nama','$tempat','$tanggallahir','$jeniskelamin','$prodi')");
}

$result['status'] = $sql ? "1" : "0";
echo json_encode($result);

?>