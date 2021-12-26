<?php
require "connect.php";
global $conn;
$AdminId = $_POST['AdminId'];
$AdminNewPassword = $_POST['AdminNewPassword'];


if (strlen($AdminId) > 0 && strlen($AdminNewPassword) > 0) {
    $query = "UPDATE admins SET admin_password='$AdminNewPassword' WHERE admin_id='$AdminId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "ADMIN_CHANGE_PASSWORD_SUCCESSFUL";
    } else {
        echo "ADMIN_CHANGE_PASSWORD_FAILED";
    }
} else {
    echo "ADMIN_CHANGE_PASSWORD_NULL";
}
?>
