<head>
    <title>Login Ges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <center><div class="p-3 mb-10 bg-secondary text-white"> Login Anggota</div></center>
    <div class="container">
    <h6>Angggota Access</h6>
    <form action="proses.php" method="post">
        <div class="inputWrapper">
            <tr>
                <td>Email</td>
                <tr></tr>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <tr></tr>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>
        </div>
        <br>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="login"></td>
            </tr>
            <br>
            <tr>
                <td>admin klik <a href="../admin/login_admin.php">sini</a></td>
            </tr>
                    <h4>Anda Belum Punya Akun ? Daftar <a href="daftar.php">Disini</a></h4>
        </div>
    </form>
</body>
</html>