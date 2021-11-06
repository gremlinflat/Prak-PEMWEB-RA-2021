<?php

include "connection.php";

$nama = $_POST["nama"];
$tempat = $_POST["tempat"];
$tanggallahir = $_POST["tanggallahir"];
$jeniskelamin = $_POST["jeniskelamin"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];

if(!($nama=='' || $tempat=='' || $tanggallahir=='' || $jeniskelamin=='' || $nim=='' || $prodi=='')){
	$sql = mysqli_query($conn,"UPDATE data_mahasiswa SET nim='$nim',nama='$nama', tempat='$tempat', tanggallahir='$tanggallahir',jeniskelamin='$jeniskelamin', prodi='$prodi' WHERE nim = '$nim' ");
}

$result['nim'] = $_POST['nim'];
$result['status'] = $sql ? "1" : "0";
echo json_encode($result);

?>