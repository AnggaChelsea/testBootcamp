<?php
include 'con.php';
if (isset($_POST['submit'])) {



    $name = $_POST['name'];
    $type_id = $_POST['type_id'];
    $photo = $_FILES['photo']['name'];
    $file = $_FILES['photo']['tmp_name'];


    if (move_uploaded_file($file, "img/$name")) {

        $insert = "INSERT INTO `heroes_tb`($name,$type_id,$photo)";
        if ($conn->query($insert) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
