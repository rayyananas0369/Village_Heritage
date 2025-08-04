<?php

include 'connection.php';

setcookie('admin_id', '', time() - 1, '/');

header('admin/login.php');

?>