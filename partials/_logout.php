<?php
session_start();
// echo "logout";
session_destroy();
//header("location: /forum/index.php");
echo '<script>
    alert("Are you sure, you want to logout?");
    window.location="../index.php";
    </script>';

?>