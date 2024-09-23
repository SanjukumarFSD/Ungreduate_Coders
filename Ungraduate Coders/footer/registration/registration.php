<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Join Us</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="registrationstyle.css">

</head>

<body>
     <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary  fixed-top navbar-dark bg-info">
            <div class="container-fluid">
              <a class="navbar-brand" href="ugcoders.php">
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
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
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
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Connect with us</h3>
                  <form action="regconfig.php" method="post">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <label class="form-label" for="firstName">First Name</label>
                          <input type="text" id="firstName" class="form-control form-control-lg" name="firstName" placeholder="Enter First Name" required/>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <label class="form-label" for="lastName">Last Name</label>
                          <input type="text" id="lastName" class="form-control form-control-lg" name="lastName" placeholder="Enter Last Name" required/>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                          <label for="birthday" class="form-label">DOB</label>
                          <input type="date" class="form-control form-control-lg" id="birthday" name="birthday" required/>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender</h6>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="gender"
                            value="Male" required/>
                          <label class="form-check-label" for="gender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="gender"
                            value="Female" required/>
                          <label class="form-check-label" for="gender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline ">
                          <input class="form-check-input" type="radio" name="gender" id="gender"
                            value="Other" required/>
                          <label class="form-check-label" for="gender">Other</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <label class="form-label" for="email">Email</label>
                          <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="Enter Email" required/>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <label class="form-label" for="phone">Phone Number</label>
                          <input type="text" id="phone" class="form-control form-control-lg" name="phone" maxlength="10" pattern="\d{10}" placeholder="Enter Phone Number" required/>
                        </div>
      
                      </div>
                    </div>
           
                    <div class="mt-4 pt-2">
                      <input class="btn btn-warning btn-lg" type="submit" name="submit" />
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>