<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "aditi");
if(isset( $_POST['specialTea'])){
    echo "done1";
    // $sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (101, 'Cheese Pakoda', 160, 300);");
}
if(isset( $_POST['vadaPav'])){
    echo "done3";
    // $sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (101, 'Cheese Pakoda', 160, 300);");
}
if(isset( $_POST['specialTea'])){
    echo "done1";
    // $sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (101, 'Cheese Pakoda', 160, 300);");
}
else{
    echo "dobe";
}

?>