<!DOCTYPE html>
<html lang="en">
      <?php
        session_start();
        include '../upload_script/upload_form_for_employee_script.php';
        if($_SESSION["role_id_abm"] ==2){
          include "../partials/_sidebar.php";
        }

        if($_SESSION["role_id_abm"]==4){
          include "../partials/_sidebar_emp.php";
        }
        ?>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - main page starts here - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Employee details</h4>


                  <!-- form starts -->
                  <form class="form-sample" method="post">
                    <p class="card-description"> <b> Personal info </b> </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee type</label>
                          <div class="col-sm-9">
                            <select class="form-control"  id="role_id" name="role_id" required>
                              <option value="2">Admin</option>
                              <option value="3">ca</option>
                              <option value="4">employee</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname" name="fname" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="mname" name="mname"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" name="lname" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="gender" name="gender" required>
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number 1</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="987654321" id="phone_number_one" name="phone_number_one" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number 2</label>
                            <input type="number" class="form-control" placeholder="987654321" id="phone_number_two" name="phone_number_two"/>
                            <div class="col-sm-9">
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description"> <b> Address </b> </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="address_1" name="address_1" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="address_2" name="address_2" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="city" name="city" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="state" name="state" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="postcode" name="postcode" required/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <p class="card-description"> <b> Indentity Proof </b> </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Govt. id type</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="govt_id_type" name="govt_id_type" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Govt. id number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="govt_id" name="govt_id" required/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <p class="card-description"><b> Login Details </b></p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"id="username" name="username" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" id="btn_submit" name="btn_submit" class="btn btn-primary btn-fw"> SUBMIT </button>
                    <?php

                    if(isset($_POST["btn_submit"])){

                      //echo "hey employee.............................";
                    $obj_upload_employee_list_form = new upload_employee_list_form;
                    $obj_upload_employee_list_form->upload_employee_list();
                    }
                     ?>

                  </form>
                </div>
              </div>
            </div>
          </div>
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
