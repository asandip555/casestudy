<!DOCTYPE html>
<html lang="en">

      <?php
      session_start();
      include '../upload_script/upload_diesel_rate_script.php';
       //include '../partials/_navbar.php';
       include '../partials/_sidebar.php';
       ?>


      <!-- partial -->

        <!-- partial:../../partials/_sidebar.html -->


      <!-- - - - - - - - - - - - - - - - - - - - - - - - - main page starts here - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!-- form start here -->
          <form class="form-sample" method="post">

            <!-- row 1 --->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Diesel rates today: </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"name="rate" id="rate"/>
                </div>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary btn-fw" id="btn_submit" name="btn_submit">SUBMIT</button>
            </div>
          </div>

          <!-- row 2 -->
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Diesel Hisory</h4>

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> Rate </th>
                        <th> Date (YYYY-MM-DD)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $obj = new upload_diesel_list_form;
                      $obj->display_diesel_details();

                       ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php


            if(isset($_POST["btn_submit"])){
                try{

                    $obj->upload_diesel_details();

                    echo "Your price has been submitted";
                }
                catch(PDOException $e){
                  echo "Connection failed:" .$e->getMessage();
                }


            }

           ?>
          <form>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      <?php
        include '../partials/_footer.php'
       ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      </div>

    </div>
    <!--  - container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>
