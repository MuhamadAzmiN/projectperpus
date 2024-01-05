<?php


$conn = mysqli_connect("localhost", "root", "", "jurusan");
function tambah($data){
    global $conn;
    $nama = $data["nama"];
    $nis = $data["nis"];
    $jurusan = $data["jurusan"];
    $rayon = $data["rayon"];
    $query = "INSERT INTO `siswa wikrama` (nama, nis,jurusan,rayon) VALUES ('$nama','$nis', '$jurusan', '$rayon')";
    $result = mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}



?>