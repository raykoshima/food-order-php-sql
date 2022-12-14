<?php include("head.php")?>
<?php include("menu.php")?>
<head>
<center>
<h1>กำลังดูออเดอร์</h1>

<table>
        <th>รูปภาพ</th>
        <th>ชื่ออาหาร</th>
        <th>ราคา</th>
        <th>ชื่อลูกค้า</th>
        <th>รวมเป็นเงิน</th>
        <?php 
        $sql = "SELECT food.*,userorder.foodcount,userorder.username FROM food LEFT JOIN userorder ON food.f_id = userorder.f_id";
        $login = $db_con->prepare($sql);
        $login->execute();
        while($row = $login->fetch(PDO::FETCH_ASSOC)){
        $replay = $db_con->prepare("SELECT * FROM `food` WHERE f_id = '".$row["f_id"]."'");
        $replay->execute();
        $a = $row["foodcount"];
        $b = $row["foodraka"];
        ?>
        <tr>
            <td><img src="upload/<?php echo $row["foodurl"];?>" width="50px" height="50px"></td>
            <td><?php echo $row["foodname"];?></td>
            <td><?php echo $row["foodraka"];?> บาท</td>
            <td><center><?php echo $row["username"];?></center></td>
            <td><?php echo $a * $b?> บาท</td>
        </tr>
        <?php } ?>
</table>
