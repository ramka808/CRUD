<?php
include 'connect.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "delete from `data` where id=$id";
    try {
        $result = mysqli_query($con, $sql);
        header('location:display.php');
    } catch (Exception $e) {
        echo 'Не удалось удалить';
    }
}

?>