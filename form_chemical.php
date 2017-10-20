<?php
                 session_start();
                 $_SESSION['key'] = $_POST['txt_search'];
                 header("Location:user/show_chemical.php?page=1");
?>