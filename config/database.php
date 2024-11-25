<?php
// Ini adalha koneksi dari website ke database my sql
$host = "localhost"; // host tidak perlu diganti
$username = "root"; // username tidak perlu diganti jika belum pernah diubah    
$password = ""; // secara default kosong
$database = ""; // sesuaikan dengan nama databse

$conn = mysqli_connect($host, $username, $password, $database); // koneksi ke database

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} // cek jika terjadi error saat akan koneksi ke database