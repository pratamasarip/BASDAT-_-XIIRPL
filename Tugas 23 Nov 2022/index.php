<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <h1>Formulir Pendaftaran</h1>
    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text">
        </div>
        <div>
            <label>Jurusan</label> <br>                
            <input name="jurusan" value="RPL" type="checkbox">RPL<br>
            <input name="jursuan" value="AKL" type="checkbox">AKL<br>
            <input name="jursuan" value="BDP" type="checkbox">BDP<br>
            <input name="jursuan" value="OTKP" type="checkbox">OTKP<br>
        </div>
        <div>
            <label>Nama Ayah</label> <br>
            <input name="nama_ayah" type="text">
        </div>
        <div>
            <label>Nama Ibu</label> <br>
            <input name="nama_ibu" type="text">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text">
        </div>
        <div tyle="margin-top:10px">
            <label>Foto </label><br>
            <input type="file" name="foto">
        </div>
        <br>
        <div>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>
</html>