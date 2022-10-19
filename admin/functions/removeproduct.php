<?php

include("dbcon.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM product where id=$id";

    if ($result = $db->query($query)) {
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            unlink("../upload/".$row['image']);
        }
        $query = "DELETE from product where id=$id";
        if ($result = $db->query($query)) {
            header("location: ../products.php");
        }
        else{
            echo $db->error;
        }


    }
}
?>
