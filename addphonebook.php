<?php
require("connectdb.php");
$name = $_REQUEST["name"];
$number = $_REQUEST["number"];
$sql = "INSERT INTO Phonebook(name,number)
		VALUES('$name','$number')";


$result = mysqli_query($cid,$sql);
if($result){
echo "<center>";
echo "<h1>บันทึกข้อมูลสำเร็จ &#10004</h1><br>";
echo "</center>";
}
else{
	echo "<center>";
echo "Failed &#10006;" .mysqli_error($cid);
echo "</center>";
}
mysqli_close($cid);
?>
<html>

<style>

body {
	background-color : 	#99FF99;
	font-family: 'Francois One';
}

h1{
	color : #32CD32;
	font-size: 70px;

}

.button-30 {
  align-items: center;
  appearance: none;
  background-color: #FCFCFD;
  border-radius: 4px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
  box-sizing: border-box;
  color: #36395A;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 40px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}

.button-30:focus {
  box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.button-30:hover {
  box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-30:active {
  box-shadow: #D6D6E7 0 3px 7px inset;
  transform: translateY(2px);
}
  
</style>


<body>
<center>
<button onclick="document.location='listphonebook.php'" class = "button-30" >Back</button>
</center>
</body>
</html>



