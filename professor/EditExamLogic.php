<?php
  $servername = "127.0.0.1:3308";
  $username = "root";
  $password = "";
  $dbname = "onlineexam";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if(isset($_POST['update-exam'])){
    $examId =  $_POST['examId'];
    $ExamTitle =$_POST['examTitle'];
    $Subject = $_POST['Subject'];
    $StartDate = date('Y-m-d H:i:s', strtotime($_POST['StartDate']));
    $Duration = $_POST['Duration'];

    $sql = "UPDATE exam SET Title='$ExamTitle', Subject='$Subject', StartDate='$StartDate', Duration='$Duration' WHERE Id='$examId'";
    if(mysqli_query($conn,$sql)){
      echo "success";
    } else {
      echo "failed";
    }
  }
?>
