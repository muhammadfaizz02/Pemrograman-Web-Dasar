<?php

// koneksi ke database terlebih dahulu
$conn = mysqli_connect('localhost', 'root', '', 'input');

$kode_jurusan = $_POST['jurusan'];
$nama_jurusan = $_POST['nama'];
$akreditasi = $_POST['akreditasi'];
$jumlah_mahasiswa = $_POST['jumlah'];

$query = "INSERT INTO data VALUES ('$kode_jurusan','$nama_jurusan','$akreditasi','$jumlah_mahasiswa')";

mysqli_query($conn, $query);

echo "<script>
alert('data berhasil ditambahkan!');
document.location.href = 'input.php';
</script>";
