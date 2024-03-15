<?php
// Sambungkan ke database
$connect = mysqli_connect("localhost", "root", "", "inventaris_barang");

// Ambil data dari formulir edit
$id = $_POST['id'];
$namabrg = $_POST['nama_brg'];
$kodebrg = $_POST['kode_brg'];
$kategori = $_POST['kategori'];
$merk = $_POST['merk'];
$jumlah = $_POST['jumlah']

// Query SQL untuk memperbarui data
$sql = "UPDATE barang SET nama_brg='$namabrg', kode_brg='$kodebrg', kategori='$kategori', merk='$merk', jumlah='$jumlah' WHERE id=$id";

// Jalankan query
if (mysqli_query($connect, $sql)) {
    echo "Data berhasil diperbarui.";
} else {
    echo "Error: " . $sql   . "<br>" . mysqli_error($connect);
}

// Tutup koneksi
mysqli_close($connect);
?>