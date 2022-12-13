<?php
require("connectdb.php");
$name = $_REQUEST["name"];
$number = $_REQUEST["number"];
$sql = "UPDATE Phonebook SET name = '$name',number = '$number' WHERE (name = '$name')";
$result = mysqli_query($cid,$sql);
if ($result){
	$rows_affected = mysql_affected_rows ($cid)	;
	echo "Done : Updating ".$rows_affected." row(s).";
}else{
	echo "Faild: Updating data.";
	
}
 mysqli_close($cid );

?>
