<!DOCTYPE html>
<html lang="en">
<head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Malayala Bhoomi Admin Dashboard</title>
                <!-- plugins:css -->
                <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
                <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
                <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
                <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
                <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
                <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <link rel="stylesheet" href="../assets/vendors/icheck/skins/all.css">
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel="stylesheet" href="../assets/css/shared/style.css">
                <!-- endinject -->
                <!-- Layout styles -->
                <link rel="stylesheet" href="../assets/css/demo_1/style.css">
                <!-- End Layout styles -->
                <link rel="shortcut icon" href="../assets/images/favicon.png" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/ui/trumbowyg.min.css" integrity="sha256-iS3knajmo8cvwnS0yrVDpNnCboUEwZMJ6mVBEW1VcSA=" crossorigin="anonymous" />
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
                <!-- End Layout styles -->
</head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include '_navbar.php';?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include '_sidebar.php';?>
        <!-- partial -->
        <div class="main-panel">
          <div id="trumbowyg-demo"></div>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include '_footer.php';?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
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
    <script src="../assets/js/demo_1/dashboard.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/trumbowyg.min.js" integrity="sha256-1ifXbvyVBZsVmsqwqcoow46rXHi4976VpOWpaMVu2qM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/plugins/fontfamily/trumbowyg.fontfamily.min.js" integrity="sha256-SoJ+l6AD95Di9rWII0EA6yjCsga+DVXG7tQwec8Ck9Y=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/plugins/fontsize/trumbowyg.fontsize.min.js" integrity="sha256-gPWGxyYlpMJdV/5xLl32fLNjlP7MFZI745LNpvn/g6E=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $('#trumbowyg-demo').trumbowyg({
    btns: [
        ['fontfamily','fontsize'],
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]
});
     
    </script>

    <script>
//       $.ajax({
//    url: 'https://jsonplaceholder.typicode.com/todos/1',
//    type: 'GET',
//    success: function (result) {
//     <?php $result = result ;
//     echo $result;
//     ?>
//    }
// });
$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": "https://api.myjson.com/bins/1gjs46",
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]
    } );
} );
    </script>
    <!-- End custom js for this page-->
  </body>
</html>