<!DOCTYPE html>
<html lang="en">

        <?php
        session_start();
        include '../partials/_sidebar.php';
        include '../upload_script/upload_form_for_customers_script.php';
        ?>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - main page starts here - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <div class="main-panel">
        <div class="content-wrapper">
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


              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Vehicle Number </label>
                  <div class="col-sm-9 col-md-4 col-lg-4" id="field" style="margin-bottom:20px">
                    <input type="text" name="field_name[]" value=""/>
                      <a href="javascript:void(0);"id="add_button" class="add_button" title="Add field"><img src="../assets/images/plusButton.png" style="height:30px; width:30px" /></a>
                  </div>
                  <br />
                  <input id="btnGet" type="button" value="Get Values" />
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <script>
          //     $(document).ready(function(){
          //   var next = 1;
          //   $(".add-more").click(function(e){
          //       e.preventDefault();
          //       var addto = "#field" + next;
          //       var addRemove = "#field" + (next);
          //       next = next + 1;
          //       var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
          //       var newInput = $(newIn);
          //       var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field" style="margin-bottom:20px" class="col-sm-9 col-md-4 col-lg-4">';
          //       var removeButton = $(removeBtn);
          //       $(addto).after(newInput);
          //       $(addRemove).after(removeButton);
          //       $("#field" + next).attr('data-source',$(addto).attr('data-source'));
          //       $("#count").val(next);
          //
          //           $('.remove-me').click(function(e){
          //               e.preventDefault();
          //               var fieldNum = this.id.charAt(this.id.length-1);
          //               var fieldID = "#field" + fieldNum;
          //               $(this).remove();
          //               $(fieldID).remove();
          //           });
          //   });
          //
          //
          //
          // });
    </script>

    <script  type="text/javascript">

    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

    </script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <script src="../assets/js/shared/dynamic_textfield.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>
