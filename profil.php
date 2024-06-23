<?php
session_start();
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "datapegawai");

if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}

$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."'");
$d = mysqli_fetch_object($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
        <!--  bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--  google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php" style="font-size: 19px;">PT CodeCraft IT Solutions</a></h1>
        <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="datapegawai.php">Data Pegawai</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Profil</h3>
            <div class="box">
                <form action="" method="post">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input" value="<?php echo $d->admin_name ?>" required>
                    <input type="text" name="user" placeholder="Username" class="input" value="<?php echo $d->username ?>" required>
                    <input type="text" name="hp" placeholder="No HP" class="input" value="<?php echo $d->no_telp ?>" required>
                    <input type="text" name="email" placeholder="Email" class="input" value="<?php echo $d->email ?>" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input" value="<?php echo $d->address ?>" required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn">
                </form>

                <?php 
                if(isset($_POST['submit'])){
                    $nama   = ucwords($_POST['nama']);
                    $user   = $_POST['user'];
                    $hp     = $_POST['hp'];
                    $email  = $_POST['email'];
                    $alamat = ucwords($_POST['alamat']);

                    $update = mysqli_query($conn, "UPDATE tb_admin SET
                                admin_name = '".$nama."',
                                username = '".$user."',
                                no_telp = '".$hp."',
                                email = '".$email."',
                                address = '".$alamat."'
                                WHERE admin_id = '".$d->admin_id."' ");

                    if ($update){
                        echo '<script>alert("Ubah Data Berhasil")</script>';
                        echo '<script>window.location="profil.php"</script>';
                    } else {
                        echo 'gagal '.mysqli_error($conn);
                    }

                }
                ?>
            </div>

            <br>

            <h3>Ubah Password</h3>
            <div class="box">
                <form action="" method="post">
                    <input type="password" name="pass1" placeholder="Password Baru" class="input" required>
                    <input type="password" name="pass2" placeholder="Konfirmasi Password" class="input" required>
                    <input type="submit" name="ubah_password" value="Ubah Password" class="btn">
                </form>

                <?php 
                if(isset($_POST['ubah_password'])){
                    $pass1   = $_POST['pass1'];
                    $pass2     = $_POST['pass2'];

                    if($pass2 != $pass1){
                        echo '<script>alert("Konfirmasi Password Baru Tidak Sesuai")</script>';
                    } else {

                        $u_pass = mysqli_query($conn, "UPDATE tb_admin SET
                        password = '".MD5($pass1)."'
                        WHERE admin_id = '".$d->admin_id."' ");

                        if($u_pass){
                            echo '<script>alert("Ubah Data Berhasil")</script>';
                            echo '<script>window.location="profil.php"</script>';
                        } else {
                            echo 'gagal '.mysqli_error($conn);
                        }
    
                    }
                }
                ?>
            </div>


        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Web by Sinta</small>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>