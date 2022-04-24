<?php 

// include koneksi database
include("koneksi.php");

// get data dari form
$nisn = $_POST["nisn"];
$nama_lengkap = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];

// query insert data ke dalam database
$query = "INSERT INTO tbl_siswa(nisn, nama_lengkap, alamat) VALUES('$nisn', '$nama_lengkap', '$alamat')";

// kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection -> query($query) == True){
    // redirect ke halaman index.php
    header("location: index.php");
} else {
    // pesan error gagal insert database
    echo "Data Gagal Disimpan!!!";
}

?>
