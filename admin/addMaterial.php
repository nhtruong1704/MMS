<?php
require "connect.php";
global $conn;
$MaterialName = $_POST['MaterialName'];
$MaterialNo = $_POST['MaterialNo'];
$MaterialDis = $_POST['MaterialDis'];
$MaterialPhone = $_POST['MaterialPhone'];
$MaterialImDate = $_POST['MaterialImDate'];
$MaterialAmo = $_POST['MaterialAmo'];
$MaterialUnPri = $_POST['MaterialUnPri'];
$MaterialTotalCost = $_POST['MaterialTotalCost'];


//$MaterialName = "gold";
//$MaterialNo = "I12";
//$MaterialDis = "vietnam";
//$MaterialPhone = "123456";
//$MaterialImDate = "12/3/2020";
//$MaterialAmo = "5";
//$MaterialUnPri = "300";
//$MaterialTotalCost = "1500";

if (strlen($MaterialName) > 0 ) {

    $query = "INSERT INTO materials (material_id, material_name, material_no, material_dis, material_phone, material_imDate, material_amo, material_unPri, material_totalCost)
 VALUES (null, '$MaterialName', '$MaterialNo', '$MaterialDis', '$MaterialPhone', '$MaterialImDate', '$MaterialAmo', '$MaterialUnPri', '$MaterialTotalCost')";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "ADD_MATERIAL_SUCCESSFUL";
    } else {
        echo "ADD_MATERIAL_FAILED";
    }
} else {
    echo "ADD_MATERIAL_NULL";
}
?>
