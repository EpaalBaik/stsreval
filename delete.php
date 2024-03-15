<?php
// Buat koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "inventaris_barang");

// Periksa koneksi
if (mysqli_connect_error()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Query SQL untuk menghapus tabel
$sql = "DROP TABLE barang";

// Jalankan query
if (mysqli_query($connect, $sql)) {
    echo "Tabel berhasil dihapus.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

// Tutup koneksi
mysqli_close($connect);
?>