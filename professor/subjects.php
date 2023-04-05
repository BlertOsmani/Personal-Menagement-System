<?php 
    @include 'config.php';

    session_start();

    if(!isset($_SESSION['professorUsername'])){
        header('Location:login.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subjects.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    #inputForm {
      display: none;
    }
  </style>
</head>
<body style="background:#f1f1f3;">
    <?php @include 'navbar.php' ?>
    <?php  require 'addSubjectLogic.php'?>

<section>
   <div class="pageTitleContainer" >   
               <div>
                    <h2>
                    <?php
                          $currentPage = basename($_SERVER['PHP_SELF']);
                          $pageTitle = str_replace(".php", "", $currentPage);
                          echo $pageTitle;  
                    ?>
                    </h2>
               </div>
              <button id="openFormButton"><i class='bx bx-plus'></i>&nbsp;Create New Subject</button>
              
              
  </div>

  <div id="addNewSubjectContainer" style="display: none;">
    <form id="addNewSubjectForm" method="post">
               <input type="text" id="name" name="subjectName" placeholder="Enter subject name" required>
               <br>
   
               <button type="submit" name="addSubject">Save</button>
    </form>
  </div>


 <div class="filters">
        <div><input type="search" placeholder="Search subject" /></div>
        <div>
            <select>
                <option>All</option>
            </select>
            <button>
                Filter&nbsp;<i class="bi bi-filter"></i>
            </button>
        </div>
    </div>

    <div class="subjectTable">
    <table class="table ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    <?php  
    if(mysqli_num_rows($resultSubjectTable )>0){
      while($subjectRow = mysqli_fetch_array($resultSubjectTable)){    
    ?>
    <tr>
      <td> <?php echo $subjectRow['Id']?> </td>
      <td> <?php echo $subjectRow['Name']?> </td>
<<<<<<< HEAD
      <td> <?php echo $subjectRow['Created_at']?> </td>
      <td> 
        <button id="editSubjectButton"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</button>
      </td>
=======
      <td> <?php echo $subjectRow['Created_at']?> </td> 
       <td> <button id="editSubjectButton"><i class='bx bx-plus'></i>&nbsp;Edit</button></td>

     
     
>>>>>>> 29bfa1ce172f4a689082b0a90d5a09301782b2b3
    </tr>
    <?php }}?>
  </tbody>
</table>
</div>

<<<<<<< HEAD
<div id="edit-subject-form">
        <form id="subject-form" method="post">
        <div class="close-btn">
          <i class="fa-solid fa-x"></i>
        </div>
                   <label for="subjectEdit" >Edit Subject:</label>
                    <input type="text" id="subjectEdit" name="subjectEdit" placeholder="Subject Name" required>
=======
<div id="edit-subject-form" style="display: none;">
        <form id="subject-form" method="post">
        <div class="close-btn">
                        <i class="fa-solid fa-x"></i>
                    </div>
                   <label for="subjectEdit" >Edit Question:</label>
                    <input type="text" id="subjectEdit" name="subjectEdit" required>
>>>>>>> 29bfa1ce172f4a689082b0a90d5a09301782b2b3
                    <br>
                    <div id=save-buton>
                  <button type="submit" name="editSubject">Save</button>
                </div>
        </form>
      </div>
<<<<<<< HEAD
=======


>>>>>>> 29bfa1ce172f4a689082b0a90d5a09301782b2b3
  

  </section>







</body>






<script>
    $(document).ready(function() {
            $('nav .logo-container ul li a.dashboard').removeClass('active');
            $('nav .logo-container ul li a.exams').removeClass('active');
            $('nav .logo-container ul li a.subjects').addClass('active');
            $('nav .logo-container ul li a.students').removeClass('active');
    })
    document.getElementById("openFormButton").addEventListener("click", function() {
      if(document.getElementById("addNewSubjectContainer").style.display == "none"){
          document.getElementById("addNewSubjectContainer").style.display = "flex";
        }
        else{
          document.getElementById("addNewSubjectContainer").style.display = "none";
        }
    });
<<<<<<< HEAD
=======

>>>>>>> 29bfa1ce172f4a689082b0a90d5a09301782b2b3
    document.getElementById("editSubjectButton").addEventListener("click", function() {
      if(document.getElementById("edit-subject-form").style.display == "none"){
          document.getElementById("edit-subject-form").style.display = "flex";
        }
        else{
          document.getElementById("edit-subject-form").style.display = "none";
        }
    });
<<<<<<< HEAD
    const editSubjectButton = document.getElementById('editSubjectButton');
    const editSubjectPopup = document.getElementById('edit-subject-form');
    const closeBtn = document.querySelector('.close-btn');
    closeBtn.addEventListener('click', () => {
        editSubjectPopup.style.display = 'none';
    });
=======
>>>>>>> 29bfa1ce172f4a689082b0a90d5a09301782b2b3
</script>
</html>