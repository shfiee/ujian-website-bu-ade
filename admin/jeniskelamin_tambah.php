<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_jenis_kelamin'])){
        //mengambil data sesuai yang di klik oleh user
        $jenkl_ambil = mysqli_query($koneksy,"SELECT * FROM tb_jenis_kelamin WHERE id_jenis_kelamin='$_GET[id_jenis_kelamin]'")
        or die (mysqli_error());
        $jenkl_edit = mysqli_fetch_array ($jenkl_ambil);
    }

?>
<form action="jeniskelamin_proses.php" method="post">
    <?php
        if(isset($_GET['id_jenis_kelamin']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA JENIS KELAMIN</H3>
            </td>
        </tr>     
        <tr>
            <td>Id Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_jenis_kelamin" value="<?php echo @$jenkl_edit['id_jenis_kelamin'];?>"></td>
        </tr>    
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="jenis_kelamin" value="<?php echo @$jenkl_edit['jenis_kelamin'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>