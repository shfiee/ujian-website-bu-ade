<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_golongan_darah = $_POST['id_golongan_darah'];
        $golongan_darah = $_POST['golongan_darah'];
        $goldar_tambah = mysqli_query($koneksy,"INSERT INTO tb_golongan_darah VALUES ('$id_golongan_darah','$golongan_darah')");
        if ($goldar_tambah==true){
            echo "<script>alert ('Tambah Data golongan darah Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data golongan darah Gagal')</script>";
        }
        break;
    case 'edit':
        $id_golongan_darah = $_POST['id_golongan_darah'];
        $golongan_darah = $_POST['golongan_darah'];
        $goldar_edit = mysqli_query($koneksy,"UPDATE tb_golongan_darah SET id_golongan_darah = '$id_golongan_darah', golongan_darah = '$golongan_darah' 
        WHERE id_golongan_darah='$id_golongan_darah'");
        if ($goldar_edit==true){
            echo "<script>alert ('Edit Data Golongan Darah Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data Golongan Darah Gagal')</script>";
        }
        break;
        default:
            $id_golongan_darah = $_GET['id_golongan_darah'];
            $goldar_hapus = mysqli_query($koneksy,"DELETE FROM tb_golongan_darah WHERE id_golongan_darah='$id_golongan_darah'");
            if ($goldar_hapus==true){
                echo "<script>alert ('Hapus Data Golongan Darah Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data Golongan Darah Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=goldar_tampil">