<!DOCTYPE html>
<html lang="en">

        <?php
        session_start();
        include '../partials/_sidebar.php';
        include_once '../upload_script/upload_form_for_customers_script.php';
        ?>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - main page starts here - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Customer details</h4>

                  <!-- form starts - -->
                  <form class="form-sample"  method="post">
                    <p class="card-description"> <b> Personal info </b> </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" id="fname" class="form-control" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="mname" id="mname" class="form-control"  />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lname" id="lname" class="form-control" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender" required>
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
                            <input type="number" class="form-control" name="number_1" id="number_1" placeholder="987654321" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number 2</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="number_2" id="number_2" placeholder="987654321" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description"> <b> Address </b> </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address line</label>
                          <div class="col-sm-9">
                            <input type="text" name="address" id="address" class="form-control" required />
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" name="city" id="city" class="form-control" required />
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" name="state" id="state" class="form-control" required />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="number" name="postcode" id="postcode" class="form-control" required />
                          </div>
                        </div>
                      </div>

                    </div>


                    <p class="card-description"> <b> Business Details </b> </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">GST number</label>
                          <div class="col-sm-9">
                            <input type="text" name="gstnum" id="gstnum" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Business Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="firm_name" id="firm_name"  class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Documents Submitted</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="doc_sub" id="doc_sub" />
                        </div>
                      </div>
                    </div>
                  </div>
                    <button type="submit" class="btn btn-primary btn-fw btn_sub" name="btn_submit" id="btn_submit">SUBMIT</button>
                    <button type="button" class="btn btn-primary btn-fw" name="btn_add_vehicle" id="btn_add_vehicle" onclick="redirect()">Add Vehicle Numbers</button>
                    <?php
                      if(isset($_POST["btn_submit"])){
                        //echo "hello 1......................................";
                        $obj_upload_form_for_customers = new upload_customer_list_form;
                        $obj_upload_form_for_customers->upload_customers_list();
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
    <script>
      function redirect(){
        var url = "http://localhost/abm/pages/adding_vehicles.php";
        window.location.href = url;
      };

    </script>
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
