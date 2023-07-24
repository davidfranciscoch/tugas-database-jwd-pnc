<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "data";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$nama_merek = $_POST["nama_merek"];
$warna = $_POST["warna"];
$jumlah = $_POST["jumlah"];

$sql = "INSERT INTO printer (nama_merek, warna, jumlah) VALUES ('$nama_merek', '$warna', $jumlah)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
