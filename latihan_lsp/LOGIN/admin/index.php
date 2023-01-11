<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <div class="p-3 mb-2 bg-info text-dark">
        <div class="card-header">
            <marquee direction="left"><h2>Halaman Admin</h2></marquee>
        </div>

        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }
        // ambil data semua dari tabel buku
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        $harga = mysqli_query($koneksi, "SELECT * FROM harga");

        // jumlahkan data yg ada di tabel
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);
        ?>

        <!-- END -->
        <div class="card-header">
            <marquee direction="right"> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4></marquee>git
        </div>
    </div>
    
    <body>
        <!-- menampilkan data buku -->
        <h3>Data Buku</h3>
        <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA BUKU</a>
        <h3>TOTAL BUKU TERSEDIA : <?php echo $jumlah_buku;?></h3>
        <table class="table table-success table-striped">
            <tr>
            <th>Id Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th><center>Edit</center></th>
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
            echo "<td>".$harga = $row['harga']."</td>";
            ?>
            <td> 
                <center>
                    
                    <a href="update.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="proses-delete.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                </center>
            </td>
            
            <?php 
            echo "</tr>";
        }
        ?>
        
        
    </table>
    <center>
        <h3>
            TOTAL HARGA :
            <?php
            $db = mysqli_query($koneksi, "SELECT * FROM buku;");
            while($r = mysqli_fetch_array($db)){
                $h[] = $r['harga'];
                }
                $totalHarga = array_sum($h);
                echo "Rp. " . number_format($totalHarga) . " ,-";
            ?>
        </h3>
    </center>


    <h3>Data Anggota</h3>
    <a href="add_anggota.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">TAMBAH ANGGOTA</a>
    <table class="table table-success table-striped">
            <tr>
            <th>Id Anggota</th>
            <th>Nama</th>
            <th>NO Telp</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        
        <!-- menampilkan data buku -->

        <h3>TOTAL ANGGOTA TERSEDIA : <?php echo $jumlah_anggota;?></h3>
        <?php 
        include '../koneksi.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        foreach ($anggota as $rov){
            echo "<tr>";
            echo "<td>".$id_anggota = $rov['id_anggota']."</td>";
            echo "<td>".$nama = $rov['nama']."</td>";
            echo "<td>".$no_telp = $rov['no_telp']."</td>";
            echo "<td>".$alamat = $rov['alamat']."</td>";
            echo "<td>".$email = $rov['email']."</td>";
            echo "<td>".$password = $rov['password']."</td>";
            ?>
    
            <?php 
            echo "</tr>";
        }
        ?>
        
        
    </table>
</body>
        <a href="../logout.php">LOGOUT</a>
</html>