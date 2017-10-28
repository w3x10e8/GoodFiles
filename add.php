<?php
include('connection.php');

   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){

$event_name=test_input($_POST['event_name']);
$event_date=test_input($_POST['event_date']);
$time_from=test_input($_POST['t_from']);
$time_to=test_input($_POST['t_to']);


if(isset($_POST['description'])){$description=$_POST['description'];} else{$description=0;}

if(isset($_POST['b_y_all'])){$b_y_all=1;} else{$b_y_all=0;}
if(isset($_POST['b_y2014'])){$b_y2014=14;} else{$b_y2014=0;}
if(isset($_POST['b_y2015'])){$b_y2015=15;} else{$b_y2015=0;}
if(isset($_POST['b_y2016'])){$b_y2016=16;} else{$b_y2016=0;}
if(isset($_POST['b_y2017'])){$b_y2017=17;} else{$b_y2017=0;}
if(isset($_POST['b_b_all'])){$b_b_all=1;} else{$b_b_all=0;}
if(isset($_POST['b_b_cse'])){$b_b_cse=1;} else{$b_b_cse=0;}
if(isset($_POST['b_b_ee'])){$b_b_ee=2;}  else{$b_b_ee=0;}
if(isset($_POST['b_b_me'])){$b_b_me=3;}  else{$b_b_me=0;}
$b_mincg=$_POST['b_mincg'];
$b_nos=$_POST['b_nos'];
if(isset($_POST['b_man'])){$b_man=1;} else{$b_man=0;}

if($b_y_all!=1){
$arr=array($b_y2014,$b_y2015,$b_y2016,$b_y2017);
$b_years=implode(",",$arr);
}

else{

	$b_years=1;
}


if($b_b_all!=1){
$arr=array($b_b_cse,$b_b_ee,$b_b_me);
$b_branches=implode(",",$arr);

}


else{

	$b_branches=1;
}


if(isset($_POST['p_y_all'])){$p_y_all=1;} else{$p_y_all=0;}
if(isset($_POST['p_y2014'])){$p_y2014=14;} else{$p_y2014=0;}
if(isset($_POST['p_y2015'])){$p_y2015=15;} else{$p_y2015=0;}
if(isset($_POST['p_y2016'])){$p_y2016=16;} else{$p_y2016=0;}
if(isset($_POST['p_y2017'])){$p_y2017=17;} else{$p_y2017=0;}
if(isset($_POST['p_p_all'])){$p_b_all=1;} else{$p_b_all=0;}
if(isset($_POST['p_p_cse'])){$p_b_cse=1;} else{$p_b_cse=0;}
if(isset($_POST['p_p_ee'])){$p_b_ee=2;}  else{$p_b_ee=0;}
if(isset($_POST['p_p_me'])){$p_b_me=3;}  else{$p_b_me=0;}
$p_mincg=$_POST['p_mincg'];
$p_nos=$_POST['p_nos'];
if(isset($_POST['p_man'])){$p_man=1;} else{$p_man=0;}



if($p_y_all!=1){
$arr=array($p_y2014,$p_y2015,$p_y2016,$p_y2017);
$p_years=implode(",",$arr);
}

else{

	$p_years=1;
}


if($p_b_all!=1){
$arr=array($p_b_cse,$p_b_ee,$p_b_me);
$p_branches=implode(",",$arr);

}


else{

	$p_branches=1;
}





if(isset($_POST['m_y_all'])){$m_y_all=1;} else{$m_y_all=0;}
if(isset($_POST['m_y2014'])){$m_y2014=14;} else{$m_y2014=0;}
if(isset($_POST['m_y2015'])){$m_y2015=15;} else{$m_y2015=0;}
if(isset($_POST['m_y2016'])){$m_y2016=16;} else{$m_y2016=0;}
if(isset($_POST['m_y2017'])){$m_y2017=17;} else{$m_y2017=0;}
if(isset($_POST['m_b_all'])){$m_b_all=1;} else{$m_b_all=0;}
if(isset($_POST['m_b_cse'])){$m_b_cse=1;} else{$m_b_cse=0;}
if(isset($_POST['m_b_ee'])){$m_b_ee=2;}  else{$m_b_ee=0;}
if(isset($_POST['m_b_me'])){$m_b_me=3;}  else{$m_b_me=0;}
$m_mincg=$_POST['m_mincg'];
$m_nos=$_POST['m_nos'];
if(isset($_POST['m_man'])){$m_man=1;} else{$m_man=0;}





if($m_y_all!=1){
$arr=array($m_y2014,$m_y2015,$m_y2016,$m_y2017);
$m_years=implode(",",$arr);
}

else{

	$m_years=1;
}


if($m_b_all!=1){
$arr=array($m_b_cse,$m_b_ee,$m_b_me);
$m_branches=implode(",",$arr);

}


else{

	$m_branches=1;
}




$query="INSERT INTO tnp_events (event_name,event_date,event_time,b_years,b_branches,b_min_cg,b_nos,b_man,m_years,m_branches,m_min_cg,m_nos,m_man,p_years,p_branches,p_min_cg,p_nos,p_man,description)
VALUES ('$event_name','$event_date','$time_from-$time_to','$b_years','$b_branches','$b_mincg','$b_nos','$b_man','$m_years','$m_branches','$m_mincg','$m_nos','$m_man','$p_years','$p_branches','$p_mincg','$p_nos','$p_man','$description')";

if(mysqli_query($con,$query)){

echo  "ADDED";

}


else{


	    echo "Error: " . $query . "<br>" . mysqli_error($con);

}


}
?>
