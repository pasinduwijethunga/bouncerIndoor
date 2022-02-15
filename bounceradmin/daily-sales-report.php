<?php include 'db/dbConnection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sales Report-Today | SKYPOS</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ['assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <!-- Navbar -->
        <?php include('header.php');?>
        <!-- End Navbar -->
        <!-- Sidebar -->
        <?php include('sidebar.php');?>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">DAILY BOOKINGS - <?php echo date('yy-m-d');?></h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="index.php">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                           
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Select Outdoor Or Indoor</label>
                            <select onchange="pageReload()" class="form-control" id="txt_locaId">
                                <option disabled selected hidden>Select Outdoor Or Indoor</option>
                                <option > Indoor</option>
                                 <option > Outdoor</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Booking No.</th>
                                                    <th>Booking Date</th>
                                                    <th>Booking Start Time</th>
                                                    <th>Booking End Time</th>
                                                    <th>Custommer Name</th>
                                                    <th>Custommer Email</th>
                                                    <th>Custommer ID No.</th>
                                                    <th>Wickets</th>
                                                    <th>Machine OR Normal</th>
                                                    <th>Operator</th>
                                                    <th>Amount</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <th>Cancel</th>
                                                    <th>Print Bill</th>
                                                    
                                                    <!-- <th>sdfs</th> -->
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Booking No.</th>
                                                    <th>Booking Date</th>
                                                    <th>Booking Start Time</th>
                                                    <th>Booking End Time</th>
                                                    <th>Custommer Name</th>
                                                    <th>Custommer Email</th>
                                                    <th>Custommer ID No.</th>
                                                    <th>Wickets</th>
                                                    <th>Machine OR Normal</th>
                                                    <th>Operator</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <th>Cancel</th>
                                                    <th>Print Bill</th>
                                                    <!-- <th>fsdf</th> -->
                                                </tr>
                                            </tfoot>
                                            <tbody id="tbody">
                                                <?php

											?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <?php include('footer.php');?>
            <!-- End footer -->
        </div>

        <!-- Custom template | don't include it in your project! -->
        <?php include('rightSidebar.php');?>
        <!-- End Custom template -->
    </div>


    <script>
    function reportByCustomer() {
        var customer = document.getElementById("selectCus").value;
        window.location.href = "sales-report.php?cus=" + customer;
    }

    function reportByUser() {
        var users = document.getElementById("selectUser").value;
        window.location.href = "sales-report.php?user=" + users;
    }

    function handler() {
        if (event.key === 'Enter') {
            var date = document.getElementById("date").value;
            window.location.href = "sales-report.php?date=" + date;
        }
    }

    // function getsubcat() {
    //
    //     var catid = document.getElementById('cateselect').value;
    //     xmlhttp = new XMLHttpRequest();
    //
    //     xmlhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && xmlhttp.status == 200) {
    //             var respons = xmlhttp.responseText.trim();
    //             document.getElementById('subcateselect').innerHTML = this.responseText;
    //
    //         }
    //     }
    //     xmlhttp.open("GET", "ajax/get-subcategory.php?catid=" + catid, true);
    //     xmlhttp.send();
    // }

    function pageReload() {
        var locationId=document.getElementById("txt_locaId").value;
        xmlhttp =new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && xmlhttp.status == 200){
                var responce=xmlhttp.responseText.trim();
                document.getElementById("tbody").innerHTML= this.responseText;
                // alert(responce);

            }
        }
        xmlhttp.open("GET","ajax/get-daily-sals.php?locationId=" + locationId, true);
        xmlhttp.send();
    }
    </script>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Atlantis JS -->
    <script src="assets/js/atlantis.min.js"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo2.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>

</body>

</html>
