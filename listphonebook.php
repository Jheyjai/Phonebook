<?php
require("connectdb.php");
$sql = "SELECT * from Phonebook";
$result = mysqli_query($cid,$sql);
echo'<center><h1>PHONEBOOK</h1>';
echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr>
                      <th>Name</th>
                      <th>PhoneNumber</th>
                      <th>Edit</th>
                      <th>Delete</th>                 
                    </tr>";
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["name"] .  "</td> ";
                    echo "<td>" .$row["number"] .  "</td> ";
                    
                    //แก้ไขข้อมูล
                    echo "<td><a href='editphonebook.php?name=$row[0]' class='btn btn-warning btn-xs'>Edit</a></td> ";  
                    //ลบข้อมูล
                    echo "<td><a href='deletephonebook.php?name=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>Delete</a></td> ";
                  echo "</tr>";
                  }
                echo "</table></center>";
	mysqli_close($cid);

?>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap');

 table {
	 
	table-layout: auto; 
	width:400px;
	border: solid;
	border-color: #FFB6C1;
	border-collapse: collapse;
}
h1{
	font-family: 'Passion One';
	color :#FF8C00;
	text-align :center;
	font-size: 70px;

}



</style>
</html>