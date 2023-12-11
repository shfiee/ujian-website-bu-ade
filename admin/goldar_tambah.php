<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_golongan_darah'])){
        //mengambil data sesuai yang di klik oleh user
        $goldar_ambil = mysqli_query($koneksy,"SELECT * FROM tb_golongan_darah WHERE id_golongan_darah='$_GET[id_golongan_darah]'")
        or die (mysqli_error());
        $goldar_edit = mysqli_fetch_array ($goldar_ambil);
    }

?>
<form action="goldar_proses.php" method="post">
    <?php
        if(isset($_GET['id_golongan_darah']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA GOLONGAN DARAH</H3>
            </td>
        </tr>     
        <tr>
            <td>Id Golongan darah</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_golongan_darah" value="<?php echo @$goldar_edit['id_golongan_darah'];?>"></td>
        </tr>    
        <tr>
            <td>Golongan Darah</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="golongan_darah" value="<?php echo @$goldar_edit['golongan_darah'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>