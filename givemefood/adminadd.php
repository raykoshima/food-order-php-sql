<?php include("head.php")?>
<?php include("menu.php")?>
<center>
<body>
<table>
<form method="post" action="add.php" enctype="multipart/form-data">
<br><br>
<h1>เพิ่มรายการอาหาร</h1>
<td><input type="text" name="foodname" placeholder="ชื่ออาหาร"></td>
<br>
<tr></tr>
<td><input type="number" name="raka" placeholder="ราคา"></td>
<tr></tr>
<tr></tr>
<td>รูปภาพ</td>
<tr></tr><tr></tr>
<td><input type="file" name="file"></td>
<tr></tr>
<td><button class="ozx">ตกลง</button>
</center>
</table>
</form>

</body>
