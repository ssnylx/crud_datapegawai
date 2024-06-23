<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
  <!--  google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body id='bg-login'>
    <div class="login">
        <h1>Login</h1>
    <form action="" method="post">
            <input type="text" name='user' placeholder="Username" class="input">
            <input type="password" name='pass' placeholder="Password" class="input">
            <input type="submit" name='submit' value="Login" class="btn">
        </form>
        <?php
        if(isset($_POST['submit'])){
            session_start();
            $conn = mysqli_connect("localhost", "root", "", "datapegawai");

            $user = mysqli_real_escape_string($conn, $_POST['user']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);

            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
            if(mysqli_num_rows($cek) > 0) {
                $d = mysqli_fetch_object($cek);

                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->admin_id;

                echo '<script>window.location="dashboard.php"</script>';
            } else {
                echo '<script>alert("Username atau Password Anda Salah!");</script>';
      }
    }
      ?>
    </div>
</body>
</html>