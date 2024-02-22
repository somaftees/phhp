<?php
include "db.php";
    $names = $_POST["names"];

    $sql = "DELETE FROM `products` WHERE name='$names'";

    mysqli_query($conn,$sql);
    header("Location: products.php");

?>