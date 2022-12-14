<?php
include("connect_db.php");
if(isset($_SESSION["role"])) {
    $m_id = $_SESSION["member_id"];
    $usern = $_SESSION["member_username"];
    $date = date('Y-m-d');
    $f_id = $_GET["id"];

    $check = "SELECT * FROM userorder WHERE m_id ='$m_id'";
    $oz1 = mysqli_query($conn,$check) or die(mysql_error());
    $num = mysqli_num_rows($oz1);
    if($num == 1)
    {
        $check2 = "SELECT * FROM userorder WHERE f_id ='$f_id' AND m_id ='$m_id'";
        $oz2 = mysqli_query($conn,$check2) or die(mysql_error());
        $num2 = mysqli_num_rows($oz2);
        if($num2 == 1)
        {
            $sql = "UPDATE userorder SET foodcount = foodcount+1 WHERE f_id = '$f_id' AND m_id ='$m_id'";
            $query = mysqli_query($conn,$sql);
            echo"<center>UPDATE userorder แล้ว เปลี่ยนค่า foodcount +1 สำหรับลูกค้าที่กดเพิ่มเมนู<br><a href='foodmenu.php'>กลับหน้าหลัก</a></center>";
        }
        else
        {
            $sql = "INSERT INTO userorder(m_id,username,date,f_id,foodcount) VALUES ('$m_id','$usern','$date','$f_id','1')";
            $query = mysqli_query($conn,$sql);
            echo"<center>INSERT อาหารใหม่ ไปยัง user ที่มีอยู่แล้ว<br><a href='foodmenu.php'>กลับหน้าหลัก</a></center>";
        }   
    }
    else
    {
        $check3 = "SELECT * FROM userorder WHERE f_id ='$f_id' AND m_id ='$m_id'";
        $oz3 = mysqli_query($conn,$check3) or die(mysql_error());
        $num3 = mysqli_num_rows($oz3);
        if($num3 == 1)
        {
            $sql = "UPDATE userorder SET foodcount = foodcount+1 WHERE f_id = '$f_id' AND m_id ='$m_id'";
            $query = mysqli_query($conn,$sql);
            echo"<center>UPDATE userorder แล้ว เปลี่ยนค่า foodcount +1 สำหรับลูกค้าที่กดเพิ่มเมนู<br><a href='foodmenu.php'>กลับหน้าหลัก</a></center>";
        }
        else
        {
            $sql = "INSERT INTO userorder(m_id,username,date,f_id,foodcount) VALUES ('$m_id','$usern','$date','$f_id','1')";
            $query = mysqli_query($conn,$sql);
            echo"<center>INSERT ไปยัง userorder แล้ว เพิ่มค่าสำหรับลูกค้าที่กดครั้งแรก<br><a href='foodmenu.php'>กลับหน้าหลัก</a></center>";
        }   
    }
}
else
{
    echo "<center><h1>กรุณา login</h1><br><a href='login.php'>LOGIN HERE</a></center>";
}