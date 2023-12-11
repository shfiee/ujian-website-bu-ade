<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_kewarganegaraan'])){
        //mengambil data sesuai yang di klik oleh user
        $kew_ambil = mysqli_query($koneksy,"SELECT * FROM tb_kewarganegaraan WHERE id_kewarganegaraan='$_GET[id_kewarganegaraan]'")
        or die (mysqli_error());
        $kew_edit = mysqli_fetch_array ($kew_ambil);
    }

?>
<form action="kewarganegaraan_proses.php" method="post">
    <?php
        if(isset($_GET['id_kewarganegaraan']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA KEWARGANEGARAAN</H3>
            </td>
        </tr>      
        <tr>
            <td>Id kewarganegaraan</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_kewarganegaraan" value="<?php echo @$kew_edit['id_kewarganegaraan'];?>"></td>
        </tr>    
        <tr>
            <td>kewarganegaraan</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="kewarganegaraan" value="<?php echo @$kew_edit['kewarganegaraan'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>