<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_tahun_debut'])){
        //mengambil data sesuai yang di klik oleh user
        $deb_ambil = mysqli_query($koneksy,"SELECT * FROM tb_tahun_debut WHERE id_tahun_debut='$_GET[id_tahun_debut]'")
        or die (mysqli_error());
        $deb_edit = mysqli_fetch_array ($deb_ambil);
    }

?>
<form action="debut_proses.php" method="post">
    <?php
        if(isset($_GET['id_tahun_debut']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA TAHUN DEBUT</H3>
            </td>
        </tr>     
        <tr>
            <td>Id tahun debut</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_tahun_debut" value="<?php echo @$deb_edit['id_tahun_debut'];?>"></td>
        </tr>    
        <tr>
            <td>tahun debut</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="tahun_debut" value="<?php echo @$deb_edit['tahun_debut'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>