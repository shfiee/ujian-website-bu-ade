<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_tempat_lahir'])){
        //mengambil data sesuai yang di klik oleh user
        $tmp_ambil = mysqli_query($koneksy,"SELECT * FROM tb_tempat_lahir WHERE id_tempat_lahir='$_GET[id_tempat_lahir]'")
        or die (mysqli_error());
        $tmp_edit = mysqli_fetch_array ($tmp_ambil);
    }

?>
<form action="tempatlahir_proses.php" method="post">
    <?php
        if(isset($_GET['id_tempat_lahir']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA TEMPAT LAHIR</H3>
            </td>
        </tr>     
        <tr>
            <td>Id tempat lahir</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_tempat_lahir" value="<?php echo @$tmp_edit['id_tempat_lahir'];?>"></td>
        </tr>    
        <tr>
            <td>tempat lahir</td>
            <td>:</td>
            <td><input type="text" maxlength="50" size="30" name="tempat_lahir" value="<?php echo @$tmp_edit['tempat_lahir'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>