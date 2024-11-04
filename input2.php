<?php

// Aktifkan error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "databasepfs");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Cek email dan password di tabel users
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

// Query sql
$result = mysqli_query($conn, $sql);

// Hitung jumlah data  
$count = mysqli_num_rows($result);

// Cek apakah ada data

// Logika login seperti semula...
if($count > 0) {
  echo "<script>
         alert('Login Berhasil!');
        </script>";

        echo '<meta http-equiv="refresh" content="0;url=home.html">';
  exit();
} else {
  // Login gagal
  echo "<script>
         alert('Login gagal! Silakan coba lagi');
         window.location='index2.html';
        </script>";  
}

?>