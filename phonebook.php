<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>  


<body>

	
	<div class="wrapper">
			<div class="inner">
				<form class="needs-validation" action = "addphonebook.php" method = "post">
					<h1>PHONEBOOK</h1>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Name </label>
							<input type="text" name= "name" class="form-control" placeholder="Your Name">
						</div>
						<p>&emsp;</p>
						<div class="form-wrapper">
							<label for="">Phone </label>
							<input type="text"  name= "number" class="form-control" placeholder="08X-XXXX-XXX">
						</div>
					</div>
					<p for="">Address </label>
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">ตำบล/แขวง </label>
							<select name="" id="district" class="form-control">
								<option value="1">---เลือกตำบล---</option>
							</select>
							
						</div>
						<p>&emsp;</p>
						<div class="form-wrapper">
							<label for="">อำเภอ</label>
							<select name="" id="" class="form-control">
								<option value="1">---เลือกอำเภอ---</option>
							</select>
					
						</div>
					</div>	
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">จังหวัด</label>
							<select name="" id="" class="form-control">
								<option value="1">---เลือกจังหวัด---</option>
							</select>
						
						</div>
						<p>&emsp;</p>
						<div class="form-wrapper">
							<label for="">รหัสไปรษณีย์</label>
							<select name="" id="" class="form-control">
								<option value="1">---เลือกรหัสไปรษณีย์---</option>
							</select>

						</div>
						
						
						
						
					</div>

							<input class = "button" type="submit" value = "SAVE">
				</form>
			</div>
		</div>

	
</body>

</html>