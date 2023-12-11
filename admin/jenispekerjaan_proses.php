<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_jenis_pekerjaan = $_POST['id_jenis_pekerjaan'];
        $jenis_pekerjaan = $_POST['jenis_pekerjaan'];
        $guru_tambah = mysqli_query($koneksy,"INSERT INTO tb_jenis_pekerjaan VALUES ('$id_jenis_pekerjaan','$jenis_pekerjaan')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data Jenis pekerjaan Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data Jenis pekerjaan Gagal')</script>";
        }
        break;
    case 'edit':
        $id_jenis_pekerjaan = $_POST['id_jenis_pekerjaan'];
        $jenis_pekerjaan = $_POST['jenis_pekerjaan'];
        $jenkr_edit = mysqli_query($koneksy,"UPDATE tb_jenis_pekerjaan SET id_jenis_pekerjaan = '$id_jenis_pekerjaan', jenis_pekerjaan = '$jenis_pekerjaan' 
        WHERE id_jenis_pekerjaan='$id_jenis_pekerjaan'");
        if ($jenkr_edit==true){
            echo "<script>alert ('Edit Data Jenis pekerjaan Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data Jenis pekerjaan Gagal')</script>";
        }
        break;
        default:
            $id_jenis_pekerjaan = $_GET['id_jenis_pekerjaan'];
            $jenkr_hapus = mysqli_query($koneksy,"DELETE FROM tb_jenis_pekerjaan WHERE id_jenis_pekerjaan='$id_jenis_pekerjaan'");
            if ($jenkr_hapus==true){
                echo "<script>alert ('Hapus Data Jenis pekerjaan Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data Jenis pekerjaan Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=jenispekerjaan_tamppil">