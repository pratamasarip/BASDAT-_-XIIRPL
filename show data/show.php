<html>
    <head>
        <title>Show Data</title>
    </head>
    <body>
        <h1>Menampilkan Data Anggota</h1>
        <table border="1">
        <tr>
            <th>Id_Anggota</th>
            <th>Nama</th>
            <th>No_Telp</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <!-- Menampilkan data table -->
        <?php
        include 'koneksi.php';
        $anggota = mysqli_query($koneksi, "select * from anggota");
        foreach ($anggota as $row){
            echo "<tr>";
            echo "<td>".$id_anggota = $row['id_anggota']."</td>";
            echo "<td>".$nama = $row['nama']."</td>";
            echo "<td>".$no = $row['no_telp']."</td>";
            echo "<td>".$alamat = $row['alamat']."</td>";
            echo "<td>".$email = $row['email']."</td>";
            echo "</tr>";
        }
        ?>
        </table>
        <h1>Menampilkan Data Buku</h1>
        <table border="2">
        <tr>
            <th>Id_Buku</th>
            <th>Id_Katalog</th>
            <th>Judul_Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>
        <!-- Menampilkan data table -->
        <?php
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$id_katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul_buku = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$tahun_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>