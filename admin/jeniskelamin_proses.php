<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_jenis_kelamin = $_POST['id_jenis_kelamin'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $guru_tambah = mysqli_query($koneksy,"INSERT INTO tb_jenis_kelamin VALUES ('$id_jenis_kelamin','$jenis_kelamin')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data Jenis Kelamin Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data Jenis Kelamin Gagal')</script>";
        }
        break;
    case 'edit':
        $id_jenis_kelamin = $_POST['id_jenis_kelamin'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jenkl_edit = mysqli_query($koneksy,"UPDATE tb_jenis_kelamin SET id_jenis_kelamin = '$id_jenis_kelamin', jenis_kelamin = '$jenis_kelamin' 
        WHERE id_jenis_kelamin='$id_jenis_kelamin'");
        if ($jenkl_edit==true){
            echo "<script>alert ('Edit Data Jenis Kelamin Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data Jenis Kelamin Gagal')</script>";
        }
        break;
        default:
            $id_jenis_kelamin = $_GET['id_jenis_kelamin'];
            $jenkl_hapus = mysqli_query($koneksy,"DELETE FROM tb_jenis_kelamin WHERE id_jenis_kelamin='$id_jenis_kelamin'");
            if ($jenkl_hapus==true){
                echo "<script>alert ('Hapus Data Jenis Kelamin Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data Jenis Kelamin Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=jeniskelamin_tampil">