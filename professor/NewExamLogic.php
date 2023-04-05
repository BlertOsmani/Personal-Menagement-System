<?php 
    $servername = "127.0.0.1:3308";
    $username = "root";
    $password = "";
    $dbname = "onlineexam";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST['createExam'])){
        $examTitle = isset($_POST['exam-title']) ? $_POST['exam-title'] : '';
        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
        $startDate = isset($_POST['startDate']) ? date('Y-m-d H:i:s', strtotime($_POST['startDate'])) : '';
        $duration = isset($_POST['duration']) ? $_POST['duration'] : '';
        $professorId = $_SESSION['professorID'];

        $sql = "INSERT INTO exam (Subject, Professor, Title, StartDate, Duration,Status, Created_at) 
        VALUES ('$subject', '$professorId', '$examTitle', '$startDate', '$duration', '' , NOW())";
        if(mysqli_query($conn,$sql)){
            ?>
            <script>
                Swal.fire(
                    'Exam created successfully',
                    '',
                    'success'
                )
            </script> 
            
<?php 
        }
    }
    $examTable = "SELECT e.Id, s.Name as SubjectName, CONCAT(u.FirstName, ' ', u.LastName) as Professor,  e.Title, e.StartDate, e.Duration 
    FROM exam e join users u on e.Professor = u.Id 
    join subject s on e.Subject = s.Id where e.Id in (Select Max(Id) from exam)";

    $resultExamTable = mysqli_query($conn,$examTable); 
       

    if(isset($_POST['update-exam'])){
        $ExamTitle = isset($_POST['examTitle']) ? $_POST['examTitle'] : '';
        $Subject = isset($_POST['Subject']) ? $_POST['Subject'] : '';
        $StartDate = isset($_POST['StartDate']) ? date('Y-m-d H:i:s', strtotime($_POST['StartDate'])) : '';
        $Duration = isset($_POST['Duration']) ? $_POST['Duration'] : '';

        $sql = "UPDATE exam SET Title='$ExamTitle', Subject='$Subject', StartDate='$StartDate', Duration='$Duration' WHERE Id=(SELECT MAX(Id) FROM exam)";
        if(mysqli_query($conn,$sql)){
            ?>
            <script>
                Swal.fire(
                    'Exam updated successfully',
                    '',
                    'success'
                )
            </script> 
            
<?php 
        }
    }
?>