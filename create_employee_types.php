<!DOCTYPE html>
<html lang="en">

        <?php
        session_start();
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


            <form method="post">
              <div class="col-md-9">
                <div class="form-group row">
                  <label class="col-sm-9 col-form-label"> Employee Designation </label>
                  <div class="col-sm-9 col-md-9 col-lg-9" id="field" style="margin-bottom:20px">
                    <input autocomplete="off" class="form-control" id="field1" name="employee_type" id="employee_type" type="text" padding="2dp" placeholder="eg.: Marketing Manager" data-items="8"/>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-fw btn_sub" name="btn_submit" id="btn_submit">SUBMIT</button>
              </div>
            </form>
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
    <script>
              $(document).ready(function(){
            var next = 1;
            $(".add-more").click(function(e){
                e.preventDefault();
                var addto = "#field" + next;
                var addRemove = "#field" + (next);
                next = next + 1;
                var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
                var newInput = $(newIn);
                var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field" style="margin-bottom:20px" class="col-sm-9 col-md-4 col-lg-4">';
                var removeButton = $(removeBtn);
                $(addto).after(newInput);
                $(addRemove).after(removeButton);
                $("#field" + next).attr('data-source',$(addto).attr('data-source'));
                $("#count").val(next);

                    $('.remove-me').click(function(e){
                        e.preventDefault();
                        var fieldNum = this.id.charAt(this.id.length-1);
                        var fieldID = "#field" + fieldNum;
                        $(this).remove();
                        $(fieldID).remove();
                    });
            });



          });
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
