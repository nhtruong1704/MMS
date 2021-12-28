<?php
require "connect.php";
global $conn;
$MaterialName = $_POST['MaterialName'];
$MaterialNo = $_POST['MaterialNo'];
$MaterialCusName = $_POST['MaterialCusName'];
$MaterialCusPhone = $_POST['MaterialCusPhone'];
$MaterialExDate = $_POST['MaterialExDate'];
$MaterialAmo = $_POST['MaterialAmo'];
$MaterialUnPri = $_POST['MaterialUnPri'];
$MaterialTotalCost = $_POST['MaterialTotalCost'];

//$MaterialName = "ironn";
//$MaterialNo = "i789";
//$MaterialCusName = "vietnam";
//$MaterialCusPhone = "3648239487293";
//$MaterialExDate = "24/5/2020";
//$MaterialAmo = "3";
//$MaterialUnPri = "400";
//$MaterialTotalCost = "1200";


if (strlen($MaterialName) > 0 ) {

    $query = "INSERT INTO exports (export_id, export_nameMat, export_noMat, export_name, export_phone, export_exDate, export_amo, export_unPri, export_totalCost)
 VALUES (null, '$MaterialName', '$MaterialNo', '$MaterialCusName', '$MaterialCusPhone', '$MaterialExDate', '$MaterialAmo', '$MaterialUnPri', '$MaterialTotalCost')";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "EX_MATERIAL_SUCCESSFUL";
    } else {
        echo "EX_MATERIAL_FAILED";
    }
} else {
    echo "EX_MATERIAL_NULL";
}
?>
