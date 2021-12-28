<?php
require "admin/connect.php";
global $conn;

$MaterialId = $_GET['MaterialId'];
$MaterialAmo = $_GET['MaterialAmo'];

//$MaterialId = "3";
//$MaterialAmo = "100";

if(strlen($MaterialId) > 0 && strlen($MaterialAmo) > 0) {
    $query = "UPDATE materials SET material_amo='$MaterialAmo' WHERE material_id = '$MaterialId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "MATERIAL_UPDATED_SUCCESSFUL";
    }
    else {
        echo "MATERIAL_UPDATED_FAILED";
    }
}
else{
    echo "MATERIAL_UPDATED_NULL";
}
?>