<?php
require "admin/connect.php";
global $conn;

$MaterialId = $_GET['MaterialId'];

if(strlen($MaterialId) > 0) {
    $query = "DELETE FROM materials WHERE material_id = '$MaterialId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "MATERIAL_DELETED_SUCCESSFUL";
    }
    else {
        echo "MATERIAL_DELETED_FAILED";
    }
}
else{
    echo "MATERIAL_DELETED_NULL";
}
?>