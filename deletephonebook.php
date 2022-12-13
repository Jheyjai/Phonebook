<?php
require("connectdb.php");
$name = $_REQUEST["name"];
$sql = "DELETE FROM Phonebook WHERE name = '$name' ";
$result = mysqli_query($cid,$sql)or die ("Error in query: $sql " . mysqli_error());;
if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ลบข้อมูลสำเร็จ');";
	echo "window.location = 'listphonebook.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('เกิดข้อผิดพลาด');";
	echo "</script>";
}
?>
