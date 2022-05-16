<?php
    $connect = mysqli_connect("localhost", "root", "", "login_uts");
?>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username)&& !empty($password)) {
        $sql = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $result = mysqli_num_rows($sql);
        if ($result) {
            echo "Anda berhasil masuk!";
            echo "Klik<a href='index.php'>ok</a>";
        }else{
            echo "Username dan Password salah!";
        }
    }else{
        echo "Email dan Password masih kosong!";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Masuk"></td>
            </tr>
        </table>
    </form>
</body>
</html>