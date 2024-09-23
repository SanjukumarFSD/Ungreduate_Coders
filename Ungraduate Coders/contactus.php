<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<link rel="stylesheet" href="style1.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="gallery/gallery.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="contactstyle.css">
        <link rel="stylesheet" href="contactus_style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary  fixed-top navbar-dark bg-info">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">
                <span class="text-danger " class="abc"><img src="edu_img/logo1.jpeg" alt="logo" style="height: 50px; border-radius: 50%;"> ungraduate</span>_coders</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse active" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <!--<a class="nav-link active text-dark" aria-current="page" href="ugcoders.php" style="margin-right:90rem;">-->
                      <!-- <i class="fa fa-home" aria-hidden="true"></i>  -->
                  <!--    Home</a>  -->
              </div>
            </div>
          </nav>
    </header>
    <div class="container contact";>
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                    <h2>Contact Us</h2>
                    <h4>Get in touch with us !</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <!-- <form  method="post" onsubmit="sendEmail(); reset(); return false;"> -->
 
                    <form action="contactconfig.php" method="post">
                    <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">Full Name:</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fname" required>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Mobile No:</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" id="phone" placeholder="Enter Mobile Number" name="phone" maxlength="10" pattern="\d{10}" required>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="comment">Comment:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Write your comment" name="comment" required></textarea>
                            </div>
                            </div>
                            <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="submit" class="btn btn-info" name="submit">Submit</button>
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>