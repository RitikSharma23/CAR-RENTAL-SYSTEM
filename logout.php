<?php
session_start();
if (isset($_SESSION['phone'])) {
    session_destroy();
    header('Location: index.php');
}
?>