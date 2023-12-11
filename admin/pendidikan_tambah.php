<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_pendidikan'])){
        //mengambil data sesuai yang di klik oleh user
        $pen_ambil = mysqli_query($koneksy,"SELECT * FROM tb_pendidikan WHERE id_pendidikan='$_GET[id_pendidikan]'")
        or die (mysqli_error());
        $pen_edit = mysqli_fetch_array ($pen_ambil);
    }

?>
<form action="pendidikan_proses.php" method="post">
    <?php
        if(isset($_GET['id_pendidikan']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA PENDIDIKAN</H3>
            </td>
        </tr>     
        <tr>
            <td>Id pendidikan</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_pendidikan" value="<?php echo @$pen_edit['id_pendidikan'];?>"></td>
        </tr>    
        <tr>
            <td>pendidikan</td>
            <td>:</td>
            <td><input type="text" maxlength="70" size="50" name="pendidikan" value="<?php echo @$pen_edit['pendidikan'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>