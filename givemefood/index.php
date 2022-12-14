<?php include("head.php")?>
<?php include("menu.php")?>
<center>
<h1>รายการอาหาร</h1>

<table>
        <th>รูปภาพ</th>
        <th>ชื่ออาหาร</th>
        <th>ราคา</th>
        <?php 
        $sql = "SELECT *FROM food";
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
        </tr>
        <?php } ?>
</table>
