<html>
    <head>
        <title>Anggota Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="card-header">
            <marquee direction="left">
                <h1>Selamat Datang Di Index</h1>
            </marquee>
        </div>
        <div class="p-3 mb-2 bg-secondary text-white"><center>Halaman Anggota</center></div>
        <table class="table table-dark table-hover">
            <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
        </tr>
        <!-- menampilkan data buku -->
        <?php 
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
        ?>

        <?php
            echo "</tr>";
        }
        ?>

        <!-- Cek halaman apakah sudah Login atau Belum -->
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login.php?pesan=belum_login');
        }
        ?>

        <div class="p-3 mb-2 bg-secondary text-white">
        <h4> <center>Welcome <?php 
        $email = $_SESSION['email'];
        include '../koneksi_anggota.php';
        $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
        foreach ($anggota as $nama){
            echo $nama['nama'];
        }
        ?> anda telah Login</center></h4>
        </div>
        </table>
        <br>
        <a href="../logout.php">LOGOUT</a>
    </body>
</html>