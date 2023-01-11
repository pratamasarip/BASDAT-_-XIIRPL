<html>
    <head>
        <title>Update Anggota</title>
    </head>
    <body>
        <h1>Customize Profile</h1>
        <?php
        include '../koneksi.php';
        // ambil dari tombol customize
        $id_anggota = $_GET['id_anggota'];
        $data = mysqli_query($koneksi, "select * from anggota where id_anggota = '$id_anggota'");
        // dataa yang sudah di cocokan dengan id_buku , di meledak menggunakakn facth array sehingga bisa di taro satu satu di formny
        while($meledak = mysqli_fetch_array($data)){
        ?>
        <form action="proses-update.php" method="post">
            <!-- <label>Masukan Id Buku</label> -->
            <input type="hidden" name="id_anggota" value="<?php echo $meledak ['id_anggota'];?>">
            <br>
            <label>Nama</label>
            <br>
            <input type="text" name="nama" value="<?php echo $meledak ['nama'];?>">
            <br>
            <label>No Telp</label>
            <br>
            <input type="number" name="no_telp" value="<?php echo $meledak ['no_telp'];?>">
            <br>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat" value="<?php echo $meledak ['alamat'];?>">
            <br>
            <label>Email</label>
            <br>
            <input type="text" name="email" value="<?php echo $meledak ['email'];?>"disabled>
            <br>
            <label>Password</label>
            <br>
            <input type="text" name="pass" value="<?php echo $meledak ['password'];?>"disabled>
            <br>
            <br>
            <input class="submit" type="submit" value="submit"></input>
        </form>
        <?php
        }
        ?>
    </body>
</html>