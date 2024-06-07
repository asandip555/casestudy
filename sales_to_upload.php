<!DOCTYPE html>
<html lang="en">

        <?php
        session_start();
        include '../upload_script/upload_diesel_rate_script.php';
        include '../upload_script/upload_sales_script.php';
        include '../upload_script/upload_form_for_customers_script.php';
        include '../upload_script/upload_form_for_employee_script.php';
        include '../partials/_sidebar.php';
        ?>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - main page starts here - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Purchase Bill Addition</h4>

                  <!-- form begins here -->
                  <form class="form-sample" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
                    <p class="card-description"> Purchase Info </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select Customer</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="customer_id" name="customer_id" >
                              <option value="0">Add New Customer</option>
                              <?php
                                $obj_upload_customer_list_form = new upload_customer_list_form;
                                $obj_upload_customer_list_form->display_customer_list_in_dropdown();
                               ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
<!-- ************************************ dive to hide if you are not adding a new customer  ******************************************* -->
                  <div  name="divs" id="divs">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname" name="fname" required />
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
                            <input type="text" class="form-control" id="lname" name="lname" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
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
                            <input class="form-control" name="number_1" id="number_1" placeholder="987654321" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number 2</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="number_2" id="number_2" placeholder="987654321" />
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
               </div>

                <!---     hidden div ends       -->

                <b><label> Bill Details </label></b>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-7 col-form-label">Select sales person</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="sales_person_id" name="sales_person_id" >
                          <option value="0">Self</option>
                          <?php
                            $obj_upload_employee_list_form = new upload_employee_list_form;
                            $obj_upload_employee_list_form->display_employee_list_in_dropdown();
                           ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Amount(in litres) </label>
                          <div class="col-sm-6">
                            <input type="number" id="quantity" name="quantity" class="form-control" required/>
                            <!-- <div id="result" name="result"></div> -->
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <button type="button" id="btn_calculate" name="btn_calculate" onclick="purchase_details()" class="btn btn-primary btn-fw"> Calculate </button>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Rate </label>
                          <div class="col-sm-6">
                            <input type="number" id="rate" name="rate" class="form-control" readonly/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> GST </label>
                          <div class="col-sm-6">
                            <input type="number" id="gst" name="gst" class="form-control" readonly/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Total Price </label>
                          <div class="col-sm-6">
                            <input type="number" id="total_price" name="total_price" class="form-control" readonly/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Paid? </label>
                          <div class="col-sm-6">
                            <select class="form-control" id="paid" name="paid" >
                              <option value=""> </option>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                              <option value="2">Partial</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4" id="paid_amt_div" name="paid_amt_div">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Amount Paid </label>
                          <div class="col-sm-6">
                            <input type="number" id="paid_amt" name="paid_amt" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>


                    <script type="text/javascript">
                    function purchase_details(){
                     var quantity = $('#quantity').val();
                    //  alert(amt);
                     var diesel_rate= "<?php
                                   $obj = new upload_diesel_list_form;
                                   $obj->get_last_uploaded_diesel_rate();
                                     ?>";
                     var rate =  quantity * diesel_rate;
                     var gst = (rate * 18)/100;
                     var cgst = gst /2;
                     var sgst = cgst;
                     var total = rate + gst;


                     alert(cgst);
                     document.getElementById("gst").value = gst;
                     document.getElementById("rate").value = rate;
                     document.getElementById("total_price").value = total;
                    }

                    </script>

                      <button type="submit" id="btn_submit" name="btn_submit" class="btn btn-primary btn-fw"> SUBMIT </button>

                      <?php
                      if(isset($_POST['btn_submit'])){

                        $obj_upload = new upload_sales_details;
                        $obj_upload->upload_sales();;

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
        include '../partials/_footer.php';
       ?>
        <!--                                        partial                                      -->
      </div>
      <!-- - - - - - - - - - - - - - - - - - - - main-panel ends - - - - - - - - - - - - - - - - - - - -->
      </div>

    </div>
    <!--  - container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>

  <script>

$("#paid").change(function(){
    if($(this).val()=="2"){
      $("#paid_amt_div").show();
    }
    else{
      $("#paid_amt_div").hide();
    }
});

// $("#customer_id").change(function(){
//     if($(this).val()=="0"){
//       $("#divs").show();
//     }
//     else{
//       $("#divs").hide();
//     }
// });
</script>

<script>

$("#customer_id").change(function(){
  if($(this).val()=="0"){
    $("#divs").show().find(':input').attr('required', true);
  }

  else{
    $("#divs").hide().find(':input').attr('required', false);
  }


});

// $(document).ready(function(){
//     $("#amt").on("input", function(){
//         // Print entered value in a div box
//         $("#result").text($(this).val());
//
//     });
// });


  </script>
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
