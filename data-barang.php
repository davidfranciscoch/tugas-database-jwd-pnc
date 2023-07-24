<!DOCTYPE html>
<html>
<head>
    <title>Data Printer</title>
    <link rel="stylesheet" href="css/home.css" />
</head>
<body>
    <div class="container">
        <h1>Data Printer</h1>
        <table>
            <tr>
                <th>Nomor</th>
                <th>Nama Merk</th>
                <th>Warna</th>
                <th>Jumlah</th>
            </tr>
            <?php
            
            $host = "localhost";
            $username = "root";
            $password = ""; 
            $database = "data";

            $conn = new mysqli($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("Koneksi ke database gagal: " . $conn->connect_error);
            }

            
            $sql = "SELECT * FROM printer";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nomor"] . "</td>";
                    echo "<td>" . $row["nama_merek"] . "</td>";
                    echo "<td>" . $row["warna"] . "</td>";
                    echo "<td>" . $row["jumlah"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data printer.</td></tr>";
            }

            $conn->close();
            ?>
        </table>
        <div class="tambah-data">
            <a href="tambah-barang.php">Tambah Data</a>
        </div>
    </div>
</body>
</html>
