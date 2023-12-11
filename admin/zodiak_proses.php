<?php
    include "../config/koneksy.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_zodiak = $_POST['id_zodiak'];
        $zodiak = $_POST['zodiak'];
        $guru_tambah = mysqli_query($koneksy,"INSERT INTO tb_zodiak VALUES ('$id_zodiak','$zodiak')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data zodiak Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data zodiak Gagal')</script>";
        }
        break;
    case 'edit':
        $id_zodiak = $_POST['id_zodiak'];
        $zodiak = $_POST['zodiak'];
        $zdk_edit = mysqli_query($koneksy,"UPDATE tb_zodiak SET id_zodiak = '$id_zodiak', zodiak = '$zodiak' 
        WHERE id_zodiak='$id_zodiak'");
        if ($zdk_edit==true){
            echo "<script>alert ('Edit Data zodiak Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data zodiak Gagal')</script>";
        }
        break;
        default:
            $id_zodiak = $_GET['id_zodiak'];
            $zdk_hapus = mysqli_query($koneksy,"DELETE FROM tb_zodiak WHERE id_zodiak='$id_zodiak'");
            if ($zdk_hapus==true){
                echo "<script>alert ('Hapus Data zodiak Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data zodiak Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;indexx.php?page=zodiak_tampil">