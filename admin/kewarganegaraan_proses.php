<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_kewarganegaraan = $_POST['id_kewarganegaraan'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $kew_tambah = mysqli_query($koneksy,"INSERT INTO tb_kewarganegaraan VALUES ('$id_kewarganegaraan','$kewarganegaraan')");
        if ($kew_tambah==true){
            echo "<script>alert ('Tambah Data kewarganegaraan Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data kewarganegaraan Gagal')</script>";
        }
        break;
    case 'edit':
        $id_kewarganegaraan = $_POST['id_kewarganegaraan'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $kew_edit = mysqli_query($koneksy,"UPDATE tb_kewarganegaraan SET id_kewarganegaraan = '$id_kewarganegaraan', kewarganegaraan = '$kewarganegaraan' 
        WHERE id_kewarganegaraan='$id_kewarganegaraan'");
        if ($kew_edit==true){
            echo "<script>alert ('Edit Data kewarganegaraan Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data kewarganegaraan Gagal')</script>";
        }
        break;
        default:
            $id_kewarganegaraan = $_GET['id_kewarganegaraan'];
            $kew_hapus = mysqli_query($koneksy,"DELETE FROM tb_kewarganegaraan WHERE id_kewarganegaraan='$id_kewarganegaraan'");
            if ($kew_hapus==true){
                echo "<script>alert ('Hapus Data kewarganegaraan Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data kewarganegaraan Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=kewarganegaraan_tampil">