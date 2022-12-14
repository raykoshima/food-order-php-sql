<?php include("head.php")?>
<?php include("menu.php")?>
<center>
<h1>กรุณาเลือกอาหาร</h1>

<table>
        <th>รูปภาพ</th>
        <th>ชื่ออาหาร</th>
        <th>ราคา</th>
        <th>จำนวนที่ลูกค้ากด</th>
        <th></th>
        <th></th>
        <?php 
        $sql = "SELECT food.*,userorder.foodcount FROM food LEFT JOIN userorder ON food.f_id = userorder.f_id AND userorder.m_id = '".$_SESSION["member_id"]."'";
        $login = $db_con->prepare($sql);
        $login->execute();
        while($row = $login->fetch(PDO::FETCH_ASSOC)){
        $replay = $db_con->prepare("SELECT * FROM `food` WHERE f_id = '".$row["f_id"]."'");
        $replay->execute();
        ?>
        <tr>
            <td><img src="upload/<?php echo $row["foodurl"];?>" width="50px" height="50px"></td>
            <td><?php echo $row["foodname"];?></td>
            <td><?php echo $row["foodraka"];?> บาท</td>
            <td><center><?php echo $row["foodcount"];?></center></td>
            <td><a href="select.php?id=<?php echo $row['f_id'];?>">เลือกอันนี้</a></td>
            <td><a href="remove.php?id=<?php echo $row['f_id'];?>">เอาออก 1 ชิ้น</a></td>
        </tr>
        <?php } ?>
            <td colspan="6"><center><a  href="last.php"><button>รวมราคา</button></a></center></td>
</table>