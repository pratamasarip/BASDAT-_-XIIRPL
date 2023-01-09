<html>

<head>
    <title>Show Data</title>
</head>

<body>
    </table>
    <h1>Menampilkan Data Buku</h1>
    <table border="1">
        <tr>
            <th>Id_Buku</th>
            <th>Id_Katalog</th>
            <th>Judul_Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>
        <!-- Menampilkan data table -->
        <?php
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        foreach ($buku as $row) {
            echo "<tr>";
            echo "<td>" . $id_buku = $row['id_buku'] . "</td>";
            echo "<td>" . $id_katalog = $row['id_katalog'] . "</td>";
            echo "<td>" . $judul_buku = $row['judul_buku'] . "</td>";
            echo "<td>" . $pengarang = $row['pengarang'] . "</td>";
            echo "<td>" . $tahun_terbit = $row['thn_terbit'] . "</td>";
            echo "<td>" . $penerbit = $row['penerbit'] . "</td>";
        ?>
            <td><a href="proses.php?id_buku=<?php echo $row['id_buku'] ?>">HAPUS</a></td>
        <?php
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>