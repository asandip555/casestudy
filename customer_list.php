<!DOCTYPE html>
<html lang="en">

 <style>
 @media
 only screen and (max-width: 1500px) {
   table, thead, tbody, th, td, tr {
     display: block;
   }
   thead tr {
     position: absolute;
     top: -9999px;
     left: -9999px;
   }
   tr { border: 3px solid #000; }
   td {
     border: none;
     border-bottom: 1px solid #eee;
     position: relative;
     padding-left: 200px;
     margin-left: 150px;
   }
   td:before {
     position: absolute;
     top: 12px;
     left: 6px;
     width: 200px;
     padding-right: 40px;
     white-space: nowrap;
     margin-left: -150px;
   }
   tr:nth-child(even) {
          background-color: #cd5334;
      }

    td:nth-child(odd) {
           background-color: #FFC300;
       }

       td:nth-child(even) {
         background-color:#01579B;
         color: white;
       }


   td:nth-of-type(1):before { content: "#"; color: black;}
   td:nth-of-type(2):before { content: "Name"; color: black;}
   td:nth-of-type(3):before { content: "Phone Number"; color: black;}
   td:nth-of-type(4):before { content: "Address";color: black;}
   td:nth-of-type(5):before { content: "View Customer details";color: black;}
   td:nth-of-type(6):before { content: "View Purchase History";color: black;}
 }
 </style>

        <?php
        session_start();
        include '../partials/_sidebar.php';

        include '../upload_script/upload_form_for_customers_script.php';
        ?>
      <!-- - - - - - - - - - - - - - - - - - - - - - - - - main page starts here - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List of Customers</h4>

                  <table class="table table-bordered table-striped" style='border : 2px solid #000'>
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> Name </th>
                        <th> Phone Number </th>
                        <th> Address </th>
                        <th> View Customer Details  <i class='fa fa-user-circle'></i> <i class='fa fa-unlock-alt'></i> </th>
                        <th> View Purchase History </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $obj = new upload_customer_list_form;
                        $obj->display_customer_list();

                       ?>

                    </tbody>
                  </table>
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
