<?php
require "connect.php";
global $conn;

class Material
{
    function __construct($id, $name, $no, $dis, $phone, $imDate, $amo, $unPri, $totalCost)
    {
        $this->MatId = $id;
        $this->MatName = $name;
        $this->MatNo = $no;
        $this->MatDis = $dis;
        $this->MatPhone = $phone;
        $this->MatImDate = $imDate;
        $this->MatAmo = $amo;
        $this->MatUnPri = $unPri;
        $this->MatTotalCost = $totalCost;
    }
}
$arrMaterials = array();
$query = "SELECT * FROM materials";
$data = mysqli_query($conn, $query);
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        array_push($arrMaterials, new Material(
            $row['material_id'],
            $row['material_name'],
            $row['material_no'],
            $row['material_dis'],
            $row['material_phone'],
            $row['material_imDate'],
            $row['material_amo'],
            $row['material_unPri'],
            $row['material_totalCost']
        ));
    }
    if (count($arrMaterials) > 0) {
        echo json_encode($arrMaterials);
    } else {
        echo "Fail";
    }
}
?>

