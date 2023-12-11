<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_agensi'])){
        //mengambil data sesuai yang di klik oleh user
        $agensi_ambil = mysqli_query($koneksy,"SELECT * FROM tb_agensi WHERE id_agensi='$_GET[id_agensi]'")
        or die (mysqli_error());
        $agensi_edit = mysqli_fetch_array ($agensi_ambil);
    }

?>
<form action="agensi_proses.php" method="post">
    <?php
        if(isset($_GET['id_agensi']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA AGENSI</H3>
            </td>
        </tr>     
        <tr>
            <td>Id Agensi</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_agensi" value="<?php echo @$agensi_edit['id_agensi'];?>"></td>
        </tr>    
        <tr>
            <td>Agensi</td>
            <td>:</td>
            <td><input type="text" maxlength="50" size="30" name="agensi" value="<?php echo @$agensi_edit['agensi'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>