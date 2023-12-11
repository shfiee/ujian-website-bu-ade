<?php
    session_start();
    echo "<script> alert ('BYE BYE! $_SESSION[nama_admin]') </script>";
    session_destroy();
?>
<meta http-equiv="refresh" content="0;URL=indexx.php">