<?php
    require "connect.php";
    global $conn;
    $AdminEmail = $_POST['AdminEmail'];
    $AdminPassword = $_POST['AdminPassword'];

//$AdminEmail = "admin@gmail.com";
//$AdminPassword = "123456";

    class Admin {
        function __construct($id, $email, $password, $name, $avatar){
            $this->AdId = $id;
            $this->AdEmail = $email;
            $this->AdPassword = $password;
            $this->AdName = $name;
            $this->AdAvatar = $avatar;
        }
    }

    if(strlen($AdminEmail) > 0 && strlen($AdminPassword) > 0) {
        $arrAdmins = array();
        $query = "SELECT * FROM admins WHERE FIND_IN_SET('$AdminEmail', admin_email) AND FIND_IN_SET('$AdminPassword', admin_password)";
        $data = mysqli_query($conn, $query);
        if ($data) {
            while ($row = mysqli_fetch_assoc($data)) {
                array_push($arrAdmins, new Admin($row['admin_id'],
                                                            $row['admin_email'],
                                                            $row['admin_password'],
                                                            $row['admin_name'],
                                                            $row['admin_avatar']));
            }
            if(count($arrAdmins) > 0){
                echo json_encode($arrAdmins);
            }
            else {
                echo "Fail";
            }
        }
    }
    else{
        echo "Null";
    }
?>