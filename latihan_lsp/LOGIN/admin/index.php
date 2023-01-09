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
        ?>

        <!-- END -->
        <div class="card-header">
            <marquee direction="right"> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4></marquee>
        </div>
    </div>

        <body>
            <!-- menampilkan data buku -->
        <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
        <a href="add_anggota.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">TAMBAH ANGGOTA</a>
        <table class="table table-success table-striped">
            <tr>
            <th>Id Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
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
</body>
        <a href="../logout.php">LOGOUT</a>
</html>