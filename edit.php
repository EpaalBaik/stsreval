<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <?php
    // Ambil ID yang ingin diedit dari URL
    $id_to_edit = $_GET['id'];
    
    // Query SQL untuk mengambil data yang akan diedit
    $sql = "SELECT * FROM barang WHERE id = $id_to_edit";
    // Jalankan query
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Kode: <input type="text" name="kode_brg" value="<?php echo $row['kode_brg']; ?>"><br>
        Nama: <input type="text" name="nama_brg" value="<?php echo $row['nama_brg']; ?>"><br>
        Kategori: <input type="text" name="kategori" value="<?php echo $row['kategori']; ?>"><br>
        Merk: <input type="text" name="merk" value="<?php echo $row['merk']; ?>"><br>
        Jumlah: <input type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>"><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>