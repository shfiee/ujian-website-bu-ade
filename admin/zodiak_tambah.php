<?php
    include "../config/koneksy.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_zodiak'])){
        //mengambil data sesuai yang di klik oleh user
        $zdk_ambil = mysqli_query($koneksy,"SELECT * FROM tb_zodiak WHERE id_zodiak='$_GET[id_zodiak]'")
        or die (mysqli_error());
        $zdk_edit = mysqli_fetch_array ($zdk_ambil);
    }

?>
<form action="zodiak_proses.php" method="post">
    <?php
        if(isset($_GET['id_zodiak']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA ZODIAK</H3>
            </td>
        </tr>     
        <tr>
            <td>Id zodiak</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_zodiak" value="<?php echo @$zdk_edit['id_zodiak'];?>"></td>
        </tr>    
        <tr>
            <td>zodiak</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="zodiak" value="<?php echo @$zdk_edit['zodiak'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>