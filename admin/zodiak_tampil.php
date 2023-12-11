<h3 align = "center">DATA ZODIAK</h3>
<br></br>
<?php
echo "<a href='indexx.php?page=zodiak_tambah'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID ZODIAK</td>
        <td width = "20%" align = "center">ZODIAK</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksy.php";
        $no = "1";
        $tampil_zdk = mysqli_query($koneksy, "SELECT * FROM tb_zodiak ORDER by id_zodiak");
        while ($hasil = mysqli_fetch_array ($tampil_zdk))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_zodiak]</td>";
           echo "<td>$hasil[zodiak]</td>";
           echo "<td align='center'><a href='indexx.php?page=zodiak_tambah&id_zodiak=$hasil[id_zodiak]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='zodiak_proses.php?status=hapus&id_zodiak=$hasil[id_zodiak]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>