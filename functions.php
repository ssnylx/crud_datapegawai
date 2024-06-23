<?php

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "datapegawai");

function query($query){
    // variable scope
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    // variable scope
    global $conn;

    $pegawai_name = htmlspecialchars($data["pegawai_name"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $address = htmlspecialchars($data["address"]);
    
    // upload gambar
    $image = upload();
    if (!$image) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO tb_pegawai
        VALUES 
        ('', '$pegawai_name', '$jenis_kelamin', '$jabatan', '$no_hp', '$address', '$image')
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload(){
    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];


    if ($error === 4){
        echo "<script>
        alert('Pilih Gambar Terlebih Dahulu');
        </script>";
        return false;
    }

    //cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('Yang Anda Upload bukan Gambar');
        </script>";
    return false;
    }
    
    //cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000) {
    echo "<script>
    alert('Ukuran Gambar Terlalu Besar');
    </script>";
    return false;
    }

    //lolos pengecekan, gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;

}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_pegawai WHERE pegawai_id = $id");
}
return mysqli_affected_rows($conn);

function edit($data){
    global $conn;

    $pegawai_id = $data["pegawai_id"];
    $pegawai_name = htmlspecialchars($data["pegawai_name"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $address = htmlspecialchars($data["address"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4 ){
        $image = $gambarLama;
    } else {
        $image = upload();
    }

    // query insert data
    $query = "UPDATE tb_pegawai SET 
        pegawai_name = '$pegawai_name', 
        jenis_kelamin = '$jenis_kelamin', 
        jabatan = '$jabatan', 
        no_hp = '$no_hp', 
        address = '$address', 
        image  = '$image'
        WHERE pegawai_id = $pegawai_id  
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM tb_pegawai
    WHERE
    pegawai_name LIKE '%$keyword%' OR
    jenis_kelamin LIKE '%$keyword%' OR
    jabatan LIKE '%$keyword%' OR
    no_hp LIKE '%$keyword%' OR
    address LIKE '%$keyword%'
    ";
    return query($query);
}

?>
