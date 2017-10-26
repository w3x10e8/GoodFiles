<?php
$server='127.0.0.1';
$username='root';
$password='';
$db='bs';

$con= mysqli_connect($server,$username,$password,$db);

   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>





<!DOCTYPE html>
<html>
<head>
	
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>


		<script>
		function showEdit(editableObj) {
			$(editableObj).css("background","#FFF");
		} 
		
		function saveToDatabase(editableObj,column,typ) {
			$(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "ajax.php",
				type: "POST",
				data:{'dat':editableObj,'user_id':column,'type':typ},
				success: function(data){
					$(editableObj).css("background","#FDFDFD");
				}        
		   });
		}
		</script>

</head>

<body>

<div class="container">

<div class='row'>
	<div class="col-sm-4">
		
	 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<h5>Branch</h5><hr>
					<input type="checkbox" name="cse" <?php 
					if(isset($_POST['cse'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>> CSE<br>
					<input type="checkbox" name="me" value="1"  <?php 
					if(isset($_POST['me'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>> ME<br>
					<input type="checkbox" name="ee" value="1"  <?php 
					if(isset($_POST['ee'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>> EE<br><br>
					<h5>Year</h5><hr>
					<input type="checkbox" name="y2014" value="1" <?php 
					if(isset($_POST['y2014'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>>2014<br>
					<input type="checkbox" name="y2015" value="1" <?php 
					if(isset($_POST['y2015'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>> 2015<br>
					<input type="checkbox" name="y2016" value="1" <?php 
					if(isset($_POST['y2016'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>> 2016<br>
					<input type="checkbox" name="y2017" value="1" <?php 
					if(isset($_POST['y2017'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>>2017<br><br>
					<h5>Batch</h5><hr>
				 <input type="checkbox" name="btech" value="1" <?php 
					if(isset($_POST['btech'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>>BTech<br>
				 <input type="checkbox" name="mtech" value="1" <?php 
					if(isset($_POST['mtech'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>> MTech<br>
				 <input type="checkbox" name="phd" value="1" <?php 
					if(isset($_POST['phd'])){
						echo "checked";}
					if ($_SERVER["REQUEST_METHOD"] == "GET"){
							echo "checked";
						}
					?>>PhD<br><br>
				 <h5>CGPA > <input type="text" name="cg" value="0" /></h5>

				<br><br>
					<input type="submit" name="filter" value="Filter / Refresh"/>
				</form>

	</div>
<div class="col-sm-8">
<table class="table">
  <thead>
	  <tr>
		<th class="table-header">UserID</th>
		<th class="table-header">CGPA</th>
				<th class="table-header">STRIKES</th>

	  </tr>
  </thead>

	<?php 






if ($_SERVER["REQUEST_METHOD"] == "GET") {


$sql = "SELECT * FROM tnp_users";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}


}


if($_SERVER["REQUEST_METHOD"]=="POST"){




	if(isset($_POST['cse'])){ $cse=1;} else $cse=0;
	if(isset($_POST['ee'])){ $ee=2;} else $ee=0;
	if(isset($_POST['me'])){ $me=3;} else $me=0;

	if(isset($_POST['btech'])){ $btech=1;} else $btech=0;
	if(isset($_POST['mtech'])){ $mtech=2;} else $mtech=0;
	if(isset($_POST['phd'])){ $phd=3;} else $phd=0;

	if(isset($_POST['y2014'])){ $y2014=14;} else $y2014=0;
	if(isset($_POST['y2015'])){ $y2015=15;} else $y2015=0;
	if(isset($_POST['y2016'])){ $y2016=16;} else $y2016=0;
	if(isset($_POST['y2017'])){ $y2017=17;} else $y2017=0;
	if(isset($_POST['cg'])){$cg=test_input($_POST['cg']);} else $cg=0;



$sql = "SELECT * FROM tnp_users WHERE branch IN ($cse,$ee,$me) AND batch IN ($btech,$mtech,$phd) AND year IN ($y2014,$y2015,$y2016,$y2017) AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}





}





	?>

</table>


</div>

</div>	


</div>



</body>
</html>


