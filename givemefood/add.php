<?php
include("connect_db.php");
if($_SESSION["role"] >= 2) {
    echo "<pre>";
    print_r($_FILES['file']);
    echo "</pre>";

    $img_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];

    $foodname = $_POST['foodname'];
    $raka = $_POST['raka'];

    $ex= pathinfo($img_name,PATHINFO_EXTENSION);
    $typee = strtolower($ex);

    $new = uniqid("",true).'.'.$typee;
    $upl = 'upload/'.$new;
    move_uploaded_file($tmp_name,$upl);

    $sql = "INSERT INTO food (foodname,foodurl,foodraka) VALUES ('$foodname','$new','$raka')";
    $query = mysqli_query($conn,$sql);[header('location:index.php')]; 
}
else
{
    echo"<center><h1>คุณไม่ใช่เชฟ</h1></center>";
}
?>