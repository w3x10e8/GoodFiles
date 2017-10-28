
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


	<title></title>


<style type="text/css">
	
	.fs{
		margin-top: 20px;
	}

.ls{

    /* padding: 10px; */
    font-size: 20px;
    padding-top: 5px;
}

</style>

</head>



<body>

<div class="container">
	
	<form action="add.php" method="POST">

	<div class="row fs"> <div class="col-sm-1 ls">
		
		Event 

	</div>

<div class="col-sm-5">
	<div class="form-group">
  <input type="text" class="form-control" id="usr"  name="event_name">
</div>

</div>
</div>

<div class="row "> 

<div class="col-sm-4"><div class="row">	<div class="col-sm-3 ls">
		
		Date 

	</div>

<div class="col-sm-7">
	<div class="form-group">
  <input type="text" class="form-control" id="usr" name="event_date">
</div>

</div>



</div>

</div>

<div class="col-sm-4"><div class="row">	<div class="col-sm-3 ls">
		
		Time

	</div>

<div class="col-sm-7">
	<div class="form-group">
  <input type="text" class="form-control" id="usr" name="t_from">
</div>

</div>



</div>

</div>

<div class="col-sm-4"><div class="row">	<div class="col-sm-3 ls">
		
		to

	</div>

<div class="col-sm-7">
	<div class="form-group">
  <input type="text" class="form-control" id="usr" name="t_to">
</div>

</div>



</div>

</div>

</div>




<table class="table">
	
<tr><th>Batch</th><th>Year</th><th>Branch</th><th>Min CG</th><th>No of students</th><th>Mandatory</th><th>Students Registered</th>
</tr>
<tr><td>Btech</td><td><input type="checkbox" name="b_y_all"> All <br><input type="checkbox" name="b_y2014"> 2014 <br><input type="checkbox" name="b_y2015"> 2015 <br><input type="checkbox" name="b_y2016"> 2016 <br><input type="checkbox" name="b_y2017"> 2017 <br></td><td><input type="checkbox" name="b_b_all" > All <br><input type="checkbox" name="b_cse"> CSE <br><input type="checkbox" name="b_ee"> Electrical <br><input type="checkbox" name="b_me"> Mechanical <br></td><td><input type="text" name="b_mincg"></td><td><input type="text" name="b_nos"></td><td><input type="checkbox" name="b_man"></td><td>113</td></tr>

<tr><td>Mtech</td><td><input type="checkbox" name="m_y_all"> All <br><input type="checkbox" name="m_y2014"> 2014 <br><input type="checkbox" name="m_y2015"> 2015 <br><input type="checkbox" name="m_y2016"> 2016 <br><input type="checkbox" name="m_y2017"> 2017 <br></td><td><input type="checkbox" name="m_b_all" > All <br><input type="checkbox" name="m_cse"> CSE <br><input type="checkbox" name="m_ee"> Electrical <br><input type="checkbox" name="m_me"> Mechanical <br></td><td><input type="text" name="m_mincg"></td><td><input type="text" name="m_nos"></td><td><input type="checkbox" name="m_man"></td><td>113</td></tr>


<tr><td>PHD</td><td><input type="checkbox" name="p_y_all"> All <br><input type="checkbox" name="p_y2014"> 2014 <br><input type="checkbox" name="p_y2015"> 2015 <br><input type="checkbox" name="p_y2016"> 2016 <br><input type="checkbox" name="p_y2017"> 2017 <br></td><td><input type="checkbox" name="p_b_all" > All <br><input type="checkbox" name="p_cse"> CSE <br><input type="checkbox" name="p_ee"> Electrical <br><input type="checkbox" name="p_me"> Mechanical <br></td><td><input type="text" name="p_mincg"></td><td><input type="text" name="p_nos"></td><td><input type="checkbox" name="p_man"></td><td>113</td></tr>

</table>

<div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" id="comment" name="description"></textarea>

</div>

  <button type="submit" class="btn btn-primary">Submit</button>


</form>


</br>

</div>


</body>
</html>
