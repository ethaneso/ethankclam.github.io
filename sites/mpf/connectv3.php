<?php
$company = isset($_POST['company']) ? $_POST['company'] : false;
 $fundname = filter_input(INPUT_POST, 'fundname');
 $unit = filter_input(INPUT_POST, 'unit');
$unitvalue = filter_input(INPUT_POST, 'unitvalue');
 if (!empty($fundname)){
$host = "shareddb-h.hosting.stackcp.net";
$dbusername = "ethan";
$dbpassword = "25670281";
$dbname = "fundlist-3331e274";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO fund (company, fundname, unit, unitvalue)
  values ('$company','$fundname','$unit','$unitvalue')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully", "<a href=\"http://mympf-tech.stackstaging.com/form.html\">Add next another fund</a>", "<a href=\"http://mympf-tech.stackstaging.com/form.html\">To my Portfolio</a>";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "fundname should not be empty", " ", "<a href=\"http://mympf-tech.stackstaging.com/form.html\">Add next another fund</a>", " ", "<a href=\"http://mympf-tech.stackstaging.com/mympfform.html\">To my Portfolio</a>";
  die();
}
 
 ?>