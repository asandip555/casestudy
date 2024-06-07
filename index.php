<!DOCTYPE html>

<?php
include '../server/dbh.inc.php';
include '../server/user.inc.php';
session_unset();
session_start();

 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRM Cloud SOFTWARE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">


<!--                  form starts       -->
                <form method="post">
                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i>
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="*********" required>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-block font-weight-semibold">I am</span>
                    <input type="radio" id="role_name1" name="role_name" value="2"> Doctor </input>&nbsp  &nbsp
                    <input type="radio" id="role_name2" name="role_name" value="4"> Other Medical Practitioner </input><br>
                    <input type="radio" id="role_name3" name="role_name" value="3"> Office Admin </input>

                  </div>
                  <div class="form-group">
                    <a href="index.php">
                    <button class="btn btn-primary submit-btn btn-block" type="submit" id="btn_login" name="btn_login">Login</button> </a>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                    </div>
                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                  <div>
                    <a href="#" class="text-small text-black">Click here for Patients' Login</a>
                  </div>
                  <?php
                  if(isset($_POST['btn_login'])){

                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    
                    if(empty($username)){
                      $errorMsg[] = "Please enter username";
                    }
                    else if(empty($password)){
                      $errorMsg[] = "Please enter password";
                    }


                    else if(empty($_POST["role_name"])) {
                      $error = "Please select your role";
                      if ($error):
                        echo '<p style="color: red;">';
                        echo htmlspecialchars($error);
                        echo'</p>';
                      endif;
                      
                      }

                    else {
                      
                      $role = $_POST["role_name"];
                      $objLogin = new User;
                      
                      $objLogin->getUser($role, $username, $password);
              
                    }
                  }

                     ?>


                </form>
              </div>
              <ul class="auth-footer">
                <li>
                  <a href="#">Conditions</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
              </ul>
              </html>
              <?php
                include '../partials/_footer.php';
               ?>
              <html>
              <!--<p class="footer-text text-center">copyright © 2024 NovaHealth Solution Inc. All rights reserved.</p> -->
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
