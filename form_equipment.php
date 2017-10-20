<?php
                 session_start();
                 $_SESSION['txt_key'] = $_POST['txt_keyword'];
                 header("Location:user/show_equipment.php?page=1");
?>