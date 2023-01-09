<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <h1>Tambah Buku</h1>
        <form class="tambah" action="proses-add.php" method="post">
            <label>Masukan Id Katalog</label>
            <br>
            <input type="number" name="id_katalog" placeholder="Masukkan ID Katalog">
            <br>
            <label>Masukan Judul Buku</label>
            <br>
            <input type="text" name="judul_buku" placeholder="Masukkan Judul Buku">
            <br>
            <label>Masukan pengarang</label>
            <br>
            <input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang">
            <br>
            <label>Masukan Tahun Terbit</label>
            <br>
            <input type="date" name="thn_terbit" placeholder="Masukkan Tahun Terbit">
            <br>
            <label>Masukan penerbit</label>
            <br>
            <input type="text" name="penerbit" placeholder="Masukkan Penerbit">
            <br>
            <br>
            <input class="submit" type="submit" value="submit"></input>
            <input class="cancel" type="reset" value="cancel"></input>
            </form>
            </div>
    </body>
</html>