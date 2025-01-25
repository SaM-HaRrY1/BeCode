<?php
// simpan_transaksi.php

// Dapatkan data JSON dari request body
$data = json_decode(file_get_contents('php://input'), true);

// Cek koneksi database
$mysqli = new mysqli("localhost", "username", "password", "database");

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

// Persiapkan pernyataan SQL untuk menyimpan transaksi
$stmt = $mysqli->prepare("INSERT INTO tb_transaksi (id_menu, nama_menu, foto_menu, jumlah, total_harga, tgl_transaksi, harga, nama_pengirim, nomor_rekening) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Iterasi melalui data yang diterima dan masukkan ke database
foreach ($data['keranjang'] as $item) {
    $tanggal_transaksi = date('Y-m-d H:i:s');
    $stmt->bind_param("isdisss", $item['id'], $item['nama'], $item['foto_menu'], $item['jumlah'], $data['totalHarga'], $tanggal_transaksi, $item['harga'], $data['namaPengirim'], $data['nomorRekening']);
    $stmt->execute();
}

// Tutup pernyataan dan koneksi
$stmt->close();
$mysqli->close();

// Berikan respon sukses
echo "Transaksi berhasil disimpan!";
?>
