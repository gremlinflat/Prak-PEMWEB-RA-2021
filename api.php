<?php

include "model.php";

$jmlJambu = $_POST["jambu"];
$jmlMangga = $_POST["mangga"];
$jmlSalak = $_POST["salak"];

$buah1 = new Buah("Mangga", 15000, $jmlMangga);
$buah2 = new Buah("Jambu", 13000, $jmlJambu);
$buah3 = new Buah("Salak", 10000, $jmlSalak);

$result['mangga'] = $buah1->getHarga();
$result['jambu'] = $buah2->getHarga();
$result['salak'] = $buah3->getHarga();
$result['total'] = $buah1->getHarga() + $buah2->getHarga() + $buah3->getHarga();
echo json_encode($result);

?>