<?php
include "../config/koneksy.php";

if (isset($_POST['status'])) {
    $status = $_POST['status'];
}

switch ($status) {
    case 'tambah':
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $nama_admin = $_POST['nama_admin'];

        //input foto
        $asal = $_FILES['image']['tmp_name'];
        $simpan_foto = "../foto/".$_FILES['image']['name'];
        move_uploaded_file($asal,$simpan_foto);

        $guru_tambah = mysqli_query($koneksy, "INSERT INTO tb_admin VALUES ('$username' , '$password', '$nama_admin', '$simpan_foto')");
        if ($guru_tambah == true) {
            echo "<script> alert ('Tambah Data pelajar Berhasil!') </script>";
        } else {
            echo "<script> alert ('Tambah Data pelajar Gagal!') </script>";
        }
        break;
    case 'edit':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_admin = $_POST['nama_admin'];
        $centang = $_POST['centang'];

        //ganti foto
        $asal = $_FILES['image']['tmp_name'];
        if($centang==1){{
            $asal = $_FILES['image']['tmp_name'];
            $simpan_foto = "../foto/".$_FILES['image']['name'];
            move_uploaded_file($asal,$simpan_foto); 
        }}

        // Update data pelajar termasuk foto jika ada perubahan
        $guru_edit = mysqli_query($koneksy, "UPDATE tb_admin 
        SET username='$username', password='$password', nama_admin='$nama_admin', foto_admin='$simpan_foto' WHERE username = '$username'");

        if ($guru_edit == true){
            echo "<script> alert ('Edit Data pelajar Berhasil!') </script>";
        }else{         if ($guru_edit == true){
            echo "<script> alert ('Edit Data pelajar Berhasil!') </script>";
        }else{
            echo "<script> alert ('Edit Data pelajar Gagal!') </script>";
        }
            echo "<script> alert ('Edit Data pelajar Gagal!') </script>";
        }


        break;
    default:
    $username = $_GET['username'];
    $kelas_hapus = mysqli_query($koneksy, "DELETE FROM tb_admin WHERE username = '$username'");
    if ($kelas_hapus == true){
        echo "<script> alert ('Hapus Data admin Berhasil!') </script>";
    }else{
        echo "<script> alert ('Hapus Data admin Gagal!') </script>";
    }
        break;
}
?>

<meta http-equiv="refresh" content="0;indexx.php?page=admin_tampil">