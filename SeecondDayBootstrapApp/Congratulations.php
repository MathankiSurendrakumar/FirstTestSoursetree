<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'DatabaseConnection.php';

echo "sucessfully login";

$userID=$_SESSION['id'];

$STH = $DBH->query("SELECT * from profile WHERE user_id='$userID' ");

$STH->setFetchMode(PDO::FETCH_ASSOC);

$row = $STH->fetchAll();

//    $userid=$row['id'];
//    $useFirstName= $row['firstName'];
//    $userLastName=$row['lastName'] . "\n";
//    $contectNo=$row['contectNo'] . "\n"; 



//echo "User details <br>";
//echo "FirstName:";
//echo $useFirstName."<br>";

//echo"LastName:";
//echo $userLastName."<br>";

//echo"contectNo:";
//echo  $contectNo;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Success page</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <br/><br/>
   <table class="table table-bordered" style="width:50%" >
       <caption>User Details</caption>
       
        <tr>
              <?php foreach ($row as $row1){ ?>
            <th class="success">First Name</th>
            <td class="success"><?php echo $row1['firstName'];  ?></td>
       </tr>
       
       <tr>
            <th class="info">Last Name</th>
            <td class="info"><?php echo $row1['lastName']; ?></td>
       </tr>
        <tr>
            <th class="warning">Contact No</th>
            <td class="warning"><?php echo $row1['contectNo'];  ?></td>
       </tr>
        <?php } ?>
 
  </tr>
  
     </table>
    </body>
</html>



