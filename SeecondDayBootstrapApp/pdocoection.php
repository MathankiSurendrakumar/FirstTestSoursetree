<?php
session_start();

include 'DatabaseConnection.php';


$formUserName=$_POST['userName'];
$FoormPassword=$_POST['inputPassword'];

# using the shortcut ->query() method here since there are no variable
# values in the select statement.
$STH = $DBH->query("SELECT * from users WHERE username='$formUserName' AND password='$FoormPassword'");
 
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);
 
while($row = $STH->fetch()) {
    $userid=$row['id'];
    $userName= $row['username'];
    $userPassword=$row['password'] . "\n";
    
}
$count = $STH->rowCount();

if($formUserName==""|| $FoormPassword=="" ){
  echo"enter user name or password" ; 
}

elseif($count<=0)
{
  echo "Invalied user " ; 
}
else{
    header("Location: http://localhost/SeecondDayBootstrapApp/Congratulations.php");
    
    $_SESSION['id']=$userid;
}