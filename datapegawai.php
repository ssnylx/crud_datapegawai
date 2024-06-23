<?php

// memanggil functions
require 'functions.php';

$pegawai = query("SELECT * FROM tb_pegawai");

// tombol cari
if( isset($_POST["cari"])){
    $pegawai = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <!--  bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--  google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <h3 style="margin-bottom: 8px"> Data Pegawai</h3>
            <div class="box">
            <p style="margin-bottom: 8px">
                <a href="tambah-data.php" style="color: black; margin-left: 10px; ">
                    <i class="fa-solid fa-user-plus" style="color: #050505; margin-right: 5px;"></i>
                         Tambah Data
                </a>
            </p>

            <form action="" method="post">
                 <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
                 <button type="submit" name="cari" class="fa-solid fa-magnifying-glass" style="border: none;" ></button>
            </form>
            <br>

                <table class="table table-bordered" border="1" cellspacing="0">
                     <thead>
                        <tr style="text-align: center">
                         <th scope="col" width="50px">No.</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Gender</th>
                         <th scope="col">Jabatan</th>
                         <th scope="col">No. Telp</th>
                         <th scope="col">Alamat</th>
                         <th scope="col" width="90px">Gambar</th>
                         <th scope="col" width="100px">Aksi</th>
                     </tr>
                    </thead>
                 <tbody>
            <?php $i = 1; ?>
                    <?php foreach( $pegawai as $row):?>
                        <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["pegawai_name"]; ?></td>
                        <td><?= $row["jenis_kelamin"]; ?></td>
                        <td><?= $row["jabatan"]; ?></td>
                        <td><?= $row["no_hp"]; ?></td>
                        <td><?= $row["address"]; ?></td>
                        <td><img src="img/<?= $row["image"]; ?>" style="max-width: 100%; height: auto;" width="70px"></td>
                            <td>
                            <a href="edit-data.php?id=<?= $row["pegawai_id"]; ?>" style="margin-right: 10px;">
                                <i class="fa-solid fa-pen-to-square" style="color: #000000;"></i>
                            </a>
                            <a href="detail-data.php?id=<?= $row["pegawai_id"]; ?>" style="margin-right: 10px;">
                                <i class="fa-solid fa-eye" style="color: #030303;"></i>
                            </a>
                            <a href="hapus-data.php?id=<?= $row["pegawai_id"]; ?>" onclick="return confirm('Yakin Ingin Hapus?')">
                                <i class="fa-solid fa-trash" style="color: #050505;"></i>
                            </a>

                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach;?>
                    </tbody>
                    </table>               
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
