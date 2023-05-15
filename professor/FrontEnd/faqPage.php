<?php 
@include('navbar.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="faqPage.css">

</head>

<body>
    

    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
          <main>

<h1 class="faq-heading">FAQ'S</h1>
<section class="faq-container">
    <div class="faq-one" >

        <!-- faq question -->
        <h1 class="faq-page">What is the online exam system?</h1>

        <!-- faq answer -->
        <div class="faq-body">
            <p>The online exam system is a platform that allows students to take exams online. It provides a convenient and secure
                 way to administer exams, grade exams, and provide feedback to students.</p>
        </div>
    </div>
    <hr class="hr-line">

    <div class="faq-two">

        <!-- faq question -->
        <h1 class="faq-page">How do I sign up for the online exam system?</h1>

        <!-- faq answer -->

        <div class="faq-body">
            <p>You can sign up for the online exam system by creating an account on our website. You will need to provide your name,
                 email address, and other basic information to create your account.</p>
        </div>
    </div>
    <hr class="hr-line">


    <div class="faq-three">

        <!-- faq question -->
        <h1 class="faq-page">How do I take an exam on the online exam system?</h1>

        <!-- faq answer -->
        <div class="faq-body">
            <p>To take an exam on the online exam system, you will need to log in to your account and select the exam you want to take.
                 You will be given a set amount of time to complete the exam, and you will need to answer all of the questions within that time frame.</p>
        </div>
    </div>

    <hr class="hr-line">


    <div class="faq-four">

        <!-- faq question -->
        <h1 class="faq-page">Is the online exam system secure?</h1>

        <!-- faq answer -->
        <div class="faq-body">
            <p>Yes, the online exam system is secure. We use encryption and other security measures to protect your personal information and exam results.</p>
        </div>
    </div>

    <hr class="hr-line">


    <div class="faq-five">

        <!-- faq question -->
        <h1 class="faq-page">How do I get my exam results?</h1>

        <!-- faq answer -->
        <div class="faq-body">
            <p>Your exam results will be available on your account page after you complete the exam. You will be able to see your score and any feedback provided by your professor.</p>
        </div>
    </div>

    <hr class="hr-line">


    <div class="faq-six">

        <!-- faq question -->
        <h1 class="faq-page">What do I do if I have technical issues with the online exam system?</h1>

        <!-- faq answer -->
        <div class="faq-body">
            <p>If you experience technical issues with the online exam system, please contact our customer support team for assistance. 
                We will do our best to resolve any issues as quickly as possible.</p>
        </div>
    </div>

    <hr class="hr-line">


    <div class="faq-three">

        <!-- faq question -->
        <h1 class="faq-page">How do I contact customer support for the online exam system?</h1>

        <!-- faq answer -->
        <div class="faq-body">
            <p>You can contact customer support by emailing us at support@onlineexamsystem.com or by calling us at +383 (0) 49 999 999. 
                We are available 24/7 to assist you with any questions or concerns you may have.</p>
        </div>
    </div>

</section>
</main>
          </div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h2 class="text-center login-heading mb-5 fw-bold">How we can help you?</h2>
                    <!-- Sign In Form -->
                    <form method="post">
                    <?php 
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<div class="alert alert-danger" role="alert">'
                                    .$error
                                .'</div>';
                            }
                        }
                      ?>
                        <?php if(isset($_SESSION['success'])){ ?>
                              <?php echo '<div class="alert alert-success" role="alert">'
                                    .$_SESSION['success']
                                .'</div>' ?>
                        <?php unset($_SESSION['success']); } ?>
                    
                      <div style="display:flex; flex-direction: row; justify-content: center;gap: 10px;">
                      <div class="form-check col">
                       
                      </div>
                      <div class="form-check mb-3 col">
                        
                      </div>
                    </div>
                    <div style="display:flex; justify-content: space-between;gap:10px;">
                        <div class="col form-floating mb-3">
                            <input type="text" class="form-control" required name="firstName" id="firstName" placeholder="FirstName">
                            <label for="floatingInput">First Name</label>
                        </div>
                        <div class="col form-floating mb-3">
                            <input type="text" class="form-control" required name="lastName" id="lastName" placeholder="LastName">
                            <label for="floatingInput">Last Name</label>
                        </div>
                    </div> 
                    <div class="col form-floating mb-3">
                        <input type="email" class="form-control" required name="emailAddress" id="emailAddress" placeholder="name@example.com">
                        <label for="floatingInput">Email Address</label>
                    </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" required name="username" id="username" placeholder="Username">
                        <label for="floatingInput">Username</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" required name="question" id="question" placeholder="Questiom">
                        <label for="floatingPassword">Question</label>
                      </div>
                      
      
                      <div class="d-grid">
                        <button class="btn btn-lg btn-login text-uppercase fw-bold mb-2" name="signupBtn" style="background: #1d1b31;color:white" type="submit">Ask Question</button>
                        <div class=" mt-3 row d-flex justify-content-between">
                          <a class="small col" href="#" style="color:#1d1b31"></a>
                         
                        </div>
                      </div>
      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <script src="faqPage.js"></script>
</body>


</html>