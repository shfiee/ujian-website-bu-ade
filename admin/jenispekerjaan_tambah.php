<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_jenis_pekerjaan'])){
        //mengambil data sesuai yang di klik oleh user
        $jenkr_ambil = mysqli_query($koneksy,"SELECT * FROM tb_jenis_pekerjaan WHERE id_jenis_pekerjaan='$_GET[id_jenis_pekerjaan]'")
        or die (mysqli_error());
        $jenkr_edit = mysqli_fetch_array ($jenkr_ambil);
    }

?>
<form action="jenispekerjaan_proses.php" method="post">
    <?php
        if(isset($_GET['id_jenis_pekerjaan']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA JENIS PEKERJAAN</H3>
            </td>
        </tr>     
        <tr>
            <td>Id Jenis Pekerjaan</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_jenis_pekerjaan" value="<?php echo @$jenkr_edit['id_jenis_pekerjaan'];?>"></td>
        </tr>    
        <tr>
            <td>Jenis Pekerjaan</td>
            <td>:</td>
            <td><input type="text" maxlength="50" size="40" name="jenis_pekerjaan" value="<?php echo @$jenkr_edit['jenis_pekerjaan'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>