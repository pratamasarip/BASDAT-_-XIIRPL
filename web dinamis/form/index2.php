<html>
    <head>
        <title>Menggunakan Metode Post</title>
    </head>
    <body>
        <h1>Menggunakan Metode Post</h1>
        <form method="POST">
            <div>
                <label>Email</label><br>
                <input type="email" name="email">
            </div>
            <div>
                <label>Password</label><br>
                <input type="password" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php
            $email = @$_POST['email'];
            $password = @$_POST['password'];

            echo "Email = {$email} <br>";
            echo "Password = {$password}";
            ?>
        </form>
    </body>
</html>