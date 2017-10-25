<?php 

if($cse!=0 && $btech!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$btech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}}


if($cse!=0 && $btech!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$btech AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($cse!=0 && $btech!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$btech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($cse!=0 && $btech!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$btech AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}


if($cse!=0 && $mtech!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$mtech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}


if($cse!=0 && $mtech!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$mtech AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($cse!=0 && $mtech!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$mtech AND year=$y2016 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($cse!=0 && $mtech!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$mtech AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($cse!=0 && $phd!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$phd AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($cse!=0 && $phd!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$phd AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($cse!=0 && $phd!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$phd AND year=$y2016 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($cse!=0 && $phd!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$cse AND batch=$phd AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}




if($me!=0 && $btech!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$btech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($me!=0 && $btech!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$btech AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($me!=0 && $btech!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$btech AND year=$y2016 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($me!=0 && $btech!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$btech AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}


if($me!=0 && $mtech!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$mtech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}


if($me!=0 && $mtech!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$mtech AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($me!=0 && $mtech!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$mtech AND year=$y2016 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($me!=0 && $mtech!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$mtech AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($me!=0 && $phd!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$phd AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($me!=0 && $phd!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$phd AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($me!=0 && $phd!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$phd AND year=$y2016 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($me!=0 && $phd!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$me AND batch=$phd AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($ee!=0 && $btech!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$btech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($ee!=0 && $btech!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$btech AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($ee!=0 && $btech!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$btech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($ee!=0 && $btech!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$btech AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}


if($ee!=0 && $mtech!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$mtech AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}


if($ee!=0 && $mtech!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$mtech AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($ee!=0 && $mtech!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$mtech AND year=$y2016 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($ee!=0 && $mtech!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$mtech AND year=$y2017 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}



if($ee!=0 && $phd!=0 && $y2014!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$phd AND year=$y2014 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($ee!=0 && $phd!=0 && $y2015!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$phd AND year=$y2015 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($ee!=0 && $phd!=0 && $y2016!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$phd AND year=$y2016 AND cgpa>=$cg";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $entry_no=$row['entry_no'];
        echo "<tr><td> " . $row["entry_no"]."</td><td contenteditable='true' onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",0)'>" . $row["cgpa"]."</td><td contenteditable='true'  onBlur='saveToDatabase(this.innerHTML,".$row["user_id"].",1)' >".$row["strikes"]."</td></tr>";
    }
    
}
}

if($ee!=0 && $phd!=0 && $y2017!=0){
$sql = "SELECT * FROM tnp_users WHERE branch=$ee AND batch=$phd AND year=$y2017 AND cgpa>=$cg";
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
