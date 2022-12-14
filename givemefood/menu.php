<?php include("connect_db.php")?>
<?php if(isset($_SESSION["role"]) && $_SESSION["role"] == 1) {?>
<div class="oz">
<a href="index.php">หน้าแรก</a>
<div class="oz-ko">
<a>สวัสดี [<?php echo $_SESSION["member_username"];?>]</a>
<a>rank [ลูกค้า]</a>
<a href="foodmenu.php">เลือกอาหาร</a>
<a href="ediepx.php">แก้ไขรหัส</a>
<a href="out.php">ออก</a>


<?php }elseif(isset($_SESSION["role"]) && $_SESSION["role"] == 2) {?>
<div class="oz">
<a href="index.php">หน้าแรก</a>
<div class="oz-ko">
<a>สวัสดี [<?php echo $_SESSION["member_username"];?>]</a>
<a>rank [พ่อครัว]</a>
<a href="adminadd.php">เพิ่มรายการอาหาร</a>
<a href="adminview.php">ดูออเดอร์</a>
<a href="out.php">ออก</a>

<?php }else{?>
<div class="oz">
<a href="index.php">หน้าแรก</a>
<div class="oz-ko">
<a href="login.php">เข้าสู่ระบบ</a>
<a href="register.php">สมัครสมาชิก</a>
<?php }?>
</div>
</div>