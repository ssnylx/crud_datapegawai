<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau blm
if(isset($_POST["submit"])){

    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0  ){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'datapegawai.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'datapegawai.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
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
            <h3 style="margin-bottom: 8px">Tambah Data Pegawai</h3>
            <div class="box">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="pegawai_name" class="input" placeholder="Nama Pegawai" id="nama" required>
                    <select class="input" name="jenis_kelamin" id="jk">
                        <option value="">--Pilih--</option>
                        <option>Perempuan</option>
                        <option>Laki-laki</option>
                    </select>
                    <input type="text" name="jabatan" class="input" placeholder="Jabatan" required id="jabatan">
                    <input type="text" name="no_hp" class="input" placeholder="No. HP" id="hp" required >
                    <input type="text" name="address" class="input" placeholder="Alamat" required id="alamat">
                    <input type="file" name="image" class="input" id="image">
                    <input type="submit" name="submit" value="Simpan" class="btn">
                </form>
            </div>

            <br>          
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