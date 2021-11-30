<?php

include "../config/koneksi.php";
$id =  @$_POST ['id'];
$nama_barang = @$_POST['nama_barang'];
$jumlah_barang = @$_POST['jumlah_barang'];



$query = mysqli_query($kon, "INSERT INTO `barang` (`id` ,`nama_barang`, `jumlah_barang`) VALUES ('".$id."', '".$nama_barang."', '". $jumlah_barang."')");


if($query){
    $status = true;
    $pesan = "request success";
    $data[] = $query;
}else{
    $status = false;
    $pesan = "request failed";
}

$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>