<?php
include("connect_db.php");
$sql = "SELECT * FROM user WHERE username = '".$_POST["username"]."'AND password = '".$_POST["password"]."'";
$login = $db_con->prepare($sql);
$login ->execute();
$row = $login->fetch(PDO::FETCH_ASSOC);
if(empty($row))
{
    echo "รหัสไม่ถูกต้อง";
    
}
else{
    $_SESSION["member_username"] = $row["username"];
    $_SESSION["member_id"] = $row["m_id"];
    $_SESSION["role"] = $row["rank"];
    header('location:index.php');
}
?>