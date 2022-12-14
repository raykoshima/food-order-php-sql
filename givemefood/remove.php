<?php
include("connect_db.php");
if(isset($_SESSION["role"])) {
    $m_id = $_SESSION["member_id"];
    $f_id = $_GET["id"];

    $check = "SELECT * FROM userorder WHERE f_id = '$f_id' AND foodcount > 1";
    $oz1 = mysqli_query($conn,$check) or die(mysql_error());
    $num = mysqli_num_rows($oz1);
    if($num == 1)
    {
        $sql = "UPDATE userorder SET foodcount = foodcount-1 WHERE f_id = '$f_id' AND m_id = '$m_id'";
        $query = mysqli_query($conn,$sql);
        echo"<center>UPDATE userorder แล้ว เปลี่ยนค่า foodcount - 1 ลดจำนวนจานอาหารลง<br><a href='foodmenu.php'>กลับหน้าหลัก</a></center>";
    }
    else
    {
        
        $sql = "UPDATE userorder SET foodcount = 0 WHERE f_id = '$f_id' AND m_id = '$m_id'";
        $query = mysqli_query($conn,$sql);
        echo"<center>ลบ ORDER ออกจาก userorder แล้ว<br><a href='foodmenu.php'>กลับหน้าหลัก</a></center>";
    }
}
else
{
    echo "<center><h1>กรุณา login</h1><br><a href='login.php'>LOGIN HERE</a></center>";
}