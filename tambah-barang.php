<!DOCTYPE html>
<html>
    <head>
        <title>Form Tambah Data Printer</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="container">
            <h1>Form Tambah Data Printer</h1>
            <form action="save_data.php" method="POST">
                <div class="form-group">
                    <label for="nama_merek">Nama Merek</label>
                    <input
                        type="text"
                        id="nama_merek"
                        name="nama_merek"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" id="warna" name="warna" required />
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" id="jumlah" name="jumlah" required />
                </div>
                <button type="submit">Simpan</button>
                <button type="reset">Reset</button>
                <button type="button" class="kembali-btn">
                    <a href="data-barang.php">Kembali</a>
                </button>
            </form>
        </div>
    </body>
</html>
