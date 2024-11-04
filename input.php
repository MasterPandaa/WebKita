<?php

header("Location: index2.html");

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connect to the database
$host = "localhost";
$username = "root"; 
$password = "";
$db_name = "databasepfs";

$conn = mysqli_connect($host, $username, $password, $db_name);

if(!$conn){
    echo "Koneksi gagal"; // tampilkan pesan ini
}

// Get form data
$nama = $_POST['nama'];
$alamat = $_POST['alamat']; 
$umur = $_POST['umur'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (nama, alamat, umur, email, password) 
        VALUES ('$nama', '$alamat', '$umur', '$email', '$password')";
        
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Terjadi kesalahan, data gagal disimpan.";
}

// Prepare statement 
$stmt = $conn->prepare("INSERT INTO users (nama, alamat, umur, email, password) VALUES (?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("ssisi", $nama, $alamat, $umur, $email, $password); 

// Execute statement
$stmt->execute();

// Close connection 
mysqli_close($conn);
?>