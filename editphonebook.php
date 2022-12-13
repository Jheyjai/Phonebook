<?php
require("connectdb.php");
$sql = "SELECT * from Phonebook WHERE name = '".$REQUEST['name']."'";
$result = mysqli_query($cid,$sql);
if ($result){
	$row = mysqli_fetch_array($result);		
	
}else
	die("Error! Not found.");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap');
body {
background-color :#F0FFFF;
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
h1{
	font-family: 'Passion One';
	color :#00FA9A;
	text-align :center;
	font-size: 70px;

}

</style>

<body>
<div class="container">
<center>
		<h1>EDIT</h1>
		<form class="needs-validation" action = "updatephonebook.php" method = "post">
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="validationTooltip01">NAME</label>
						<input type="text" name= "name" class="form-control" id="validationTooltip01">
				</div>
			</div>
				<div class="col-md-4 mb-3">
					<label for="validationTooltip02">PHONENUMBER</label>
						<input type="text" name= "number" class="form-control" id="validationTooltip02">
				</div>
						<input class = "button-30" type="submit" value = "UPDATE">			
			</div>
		</form>
</center>		
</div>
<center>
<button onclick="document.location='listphonebook.php'" class = "button-30" >Back</button>
</center>
</body>	
</html>