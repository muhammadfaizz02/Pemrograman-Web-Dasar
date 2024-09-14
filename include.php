<?php

// koneksi ke database terlebih dahulu
$conn = mysqli_connect('localhost', 'root', '', 'koneksi');

$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$Alamat = $_POST['Alamat'];

$query = "INSERT INTO data VALUES ('$NPM','$Nama','$Kelas','$Alamat')";

mysqli_query($conn, $query);

echo "<script>
alert('data berhasil ditambahkan!');
document.location.href = 'data.php';
</script>";
