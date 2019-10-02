
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="hV8qlj5A4wm0Dpja53jz1nR77cZ0osvk5TxV1IU2">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <!--<link rel="icon" type="image/png" href="/assets/img/favicon.png">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Octoriz Dairy
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="http://192.168.0.121:8000"/>
    <!--  Social tags      -->
    <meta name="keywords" content="octoriz, dairy management, dairy">
    <meta name="description" content="A Dairy Management Software By Octoriz">
    <!-- Schema.org markup for Google+ -->




<!-- Twitter Card data -->







<!-- Open Graph data -->








<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/assets/css/paper-dashboard.min790f.css" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet"/>
    
    <link href="/css/custom.css" rel="stylesheet"/>
    <!-- Extra details for Live View on GitHub Pages -->
    <!--jQuery UI-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css"/>

    
</head>

<body class="">
<!-- Extra details for Live View on GitHub Pages -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper ">
    <div class="sidebar" data-color="blue" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="/" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/assets/img/logo-small.png">
            </div>
        </a>
        <a href="/" class="simple-text logo-normal">
        Octoriz Dairy
        <!-- <div class="logo-image-big">
            <img src="/assets/img/logo-big.png">
          </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="http://dairy.octoriz.com/storage/users/users/image.png" alt=""/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
                Octoriz
                <b class="caret"></b>
              </span>
                </a>

                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        

                        <li>

                            <a class="dropdown-item ts-logout" href="http://dairy.octoriz.com/logout"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="http://dairy.octoriz.com/logout" method="POST"
                                  style="display: none;">
                                <input type="hidden" name="_token" value="hV8qlj5A4wm0Dpja53jz1nR77cZ0osvk5TxV1IU2">                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- User Info End-->

        <ul class="nav">
            <li>
                <a href="/">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>Demo Dashboard</p>
                </a>
            </li>

            <li>
                <a data-toggle="collapse" href="#actions">
                    <i class="nc-icon nc-user-run"></i>
                    <p>
                        Activities
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="actions">
                    <ul class="nav">

                                                    <li>
                                <a href="http://dairy.octoriz.com/actions/1">
                                    <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                    <span class="sidebar-normal"> Agrabad Branch</span>
                                </a>
                            </li>
                                                    <li>
                                <a href="http://dairy.octoriz.com/actions/2">
                                    <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                    <span class="sidebar-normal"> Halishahar Branch</span>
                                </a>
                            </li>
                                                    <li>
                                <a href="http://dairy.octoriz.com/actions/3">
                                    <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                    <span class="sidebar-normal"> silver dairy Branch</span>
                                </a>
                            </li>
                                            </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#cows">
                    <!--<a href="#">-->
                    <i><img src="http://dairy.octoriz.com/svg/cow.svg" class="svg-icon"/></i>
                    <!--<i class="nc-icon nc-bank"></i>-->
                    <p>
                        Cows
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="cows">
                    <ul class="nav">
                        <li>
                            <a href="http://dairy.octoriz.com/cow">
                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                <span class="sidebar-normal"> All Cows </span>
                            </a>
                        </li>
                                                    <li>
                                <a href="http://dairy.octoriz.com/add-cow">
                                    <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                    <span class="sidebar-normal"> Add Cow </span>
                                </a>
                            </li>
                        

                        
                    </ul>
                </div>
            </li>


            <li>
                <a data-toggle="collapse" href="#accounts">
                    <i><img src="http://dairy.octoriz.com/svg/account.svg" class="svg-icon"/></i>
                    <p>
                        Accounts
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="accounts">

                    <ul class="nav">

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account">
                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Accounts</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/6">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Stocks</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/13">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Medicines</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/9">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Suppliers</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/7">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Customers</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/3">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Expenses</span>
                            </a>
                        </li>

                        <hr>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/purchase">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Add Purchase</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/sell">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Add Sale</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/cash-payment">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Add Cash Payment</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/cash-receive">
                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Add Cash Receive</span>
                            </a>
                        </li>

                    </ul>

                </div>

            </li>

            <li>
                <a data-toggle="collapse" href="#reports">
                    <i class="nc-icon nc-chart-pie-36"></i>
                    <p>
                        Reports
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="reports">

                    <ul class="nav">

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/daily-invoice-report">
                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Daily Invoice Report</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/stock-value-report">
                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Stock Value Report</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/transaction-history">
                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Transaction History</span>
                            </a>
                        </li>

                        <li>
                            <a href="http://dairy.octoriz.com/oct-account/income-expense-report">
                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                <span class="sidebar-normal">Receipts & Payments Statement</span>
                            </a>
                        </li>

                    </ul>

                </div>

            </li>


            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            
            

            
            
            
            
            
            

            
            
            

            
            
            
            
            
            
            
            
            

            

            
            
            
            
            
            

            
            
            
            
            
            

            
            
            
            
            
            


            
            
            
            
            
            


            
            
            
            
            
            


            
            
            
            
            
            

            

            

            



            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
            
            
            
            

            
            
            
            
            
            

            
            
            
            
            
            

            
            
            
            


            

                <li>
                    <a data-toggle="collapse" href="#all-options">
                        <i class="nc-icon nc-settings"></i>
                        <p>
                            Settings
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="all-options">

                        <ul class="nav">


                            <li>
                                <a data-toggle="collapse" href="#sheds">
                                    <i class="nc-icon nc-shop"></i>
                                    <p>
                                        Sheds
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse " id="sheds">
                                    <ul class="nav">
                                        <li>
                                            <a href="/shed">
                                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> All Sheds </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/shed/create">
                                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> Add New</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#users">
                                    <i class="nc-icon nc-badge"></i>
                                    <p>
                                        Users
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse" id="users">
                                    <ul class="nav">
                                        <li>
                                            <a href="http://dairy.octoriz.com/allusers">
                                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> All Users </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://dairy.octoriz.com/adminuser/create">
                                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> Add New</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#branches">
                                    <i class="nc-icon nc-vector"></i>
                                    <p>
                                        Branches
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse " id="branches">
                                    <ul class="nav">
                                        <li>
                                            <a href="/branch">
                                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> All Branches </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/branch/create">
                                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> Add New</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#ratios">
                                    <i class="nc-icon nc-bank"></i>
                                    <p>
                                        Feed Ratios
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse " id="ratios">
                                    <ul class="nav">







                                        <li>
                                            <a href="http://dairy.octoriz.com/ratio-save">
                                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> All Ratios</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#diseases">
                                    <i class="nc-icon nc-sound-wave"></i>
                                    <p>
                                        Diseases
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <div class="collapse " id="diseases">
                                    <ul class="nav">
                                        <li>
                                            <a href="http://dairy.octoriz.com/disease">
                                                <i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> All Diseases </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="http://dairy.octoriz.com/disease/create">
                                                <i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
                                                <span class="sidebar-normal"> Add Disease</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                        </ul>

                    </div>
                </li>



            
        </ul>
    </div>
</div>
    <div class="main-panel">
        <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-icon btn-round">
                <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
              </button>
            </div>
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="/">Octoriz Dairy</a>
            <a href="http://dairy.octoriz.com/oct-account/13" class="btn btn-default">Previous Page</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav" id="notif-holder">
              <li class="nav-item btn-rotate dropdown" id="notif-box">
                <!--Here NOtif-Box ajax happens-->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i><small id="notif-count" class="bg-secondary rounded-circle text-light p-1">0</small>
                  <p>
                    <!--<span class="d-lg-none d-md-block">Vaccination</span>-->
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" >
                    <div class="dropdown-item font-weight-bold">
                                                <a class="d-inline-block btn btn-sm my-1 top-notif" href="http://dairy.octoriz.com/notifications">All Notifications</a>
                    </div>
                  
                                      
                </div>
              </li>
             
              
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
              <div class="content">
<div class="printarea">
    <div class="d-none d-print-block col-10 text-center mx-auto">
        <h4 class="font-weight-bold"> Appteum Agro</h4>
        <p>Salimpur, Chittagong.</p>
    </div>
    

    <div class="card card-body">

        <p class="mb-0">

            <a class="font-weight-bold" href="http://dairy.octoriz.com/oct-account">Accounts</a> >

            
                <a class="font-weight-bold"
                   href="http://dairy.octoriz.com/oct-account/3">Expense</a>
                >

            
        </p>

    </div>

    

    
        <div class="card card-body">

            <h4 class="card-title mt-0">Expense ledgers</h4>

            <ul class="mb-0">

                
                    <li>
                        Doctor
                    </li>

                
                    <li>
                        Transportation Cost
                    </li>

                
                    <li>
                        abc
                    </li>

                
            </ul>

        </div>

    
    

    
        
            

            
                

                <form class="card card-body" action="http://dairy.octoriz.com/oct-account/3/ledger" method="POST">

                    <input type="hidden" name="_token" value="hV8qlj5A4wm0Dpja53jz1nR77cZ0osvk5TxV1IU2">
                    <input type="hidden" name="oct_account_id" value="3">

                    <h4 class="card-title mt-0">Add Expense ledger</h4>

                    <div class="form-group">
                        <label for="">Title *</label>
                        <input class="form-control" type="text" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="">Contact</label>
                        <input class="form-control" type="text" name="contact">
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input class="form-control" type="text" name="address">
                    </div>

                    <div class="form-group">
                        <label for="">Comment</label>
                        <input class="form-control" type="text" name="comment">
                    </div>

                    <button type="submit" class="btn btn-primary">Create Ledger</button>

                </form>

            
        
    

</div>
</div>
<footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a class="copyright" href="https://www.octoriz.com/" target="_blank">Octoriz Inc.</a>
                </li>
                <!--<li>-->
                <!--  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>-->
                <!--</li>-->
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©2019, made with <i class="fa fa-heart heart"></i> by Octoriz
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" type="text/css" />-->
<!--   Core JS Files   -->
<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="/assets/js/plugins/moment.min.js"></script>
<script src="/assets/js/plugins/printThis.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="/assets/js/plugins/sweetalert2.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="/assets/js/plugins/jquery.validate.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="/assets/js/plugins/bootstrap-datetimepicker.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
<!-- --Nm change----- -->
<script src="/assets/js/plugins/jquery-ui.min.js"></script>
<!-- Nm Change end -->
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="/assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="/assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Bootstrap Table -->
<script src="/assets/js/plugins/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Chart JS -->
<script src="/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/paper-dashboard.min790f.js?v=2.0.1" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="/assets/demo/demo.js"></script>
<!-- Share library -->
<script src="/assets/demo/jquery.sharrre.js"></script>
<!-- Custom scripts -->
<script src="/assets/js/custom.js"></script>
<script>
    // $(document).ready( function () {
    //   $('#myTable').DataTable();

    // //  $('.datepicker').datepicker();

    // $(document).ready( function () {
    //   $('.datepicker').each(function() {
    //     $(this).datepicker();

    //   });

    // $(document).on('input', '.datepicker', function () {
    //   $('.datepicker').each(function() {
    //     $(this).datepicker({
    //       format: 'dd/mm/yyyy'
    //     });

    //   });
    // } );
    // $('#min').datepicker( "setDate" , "Feb-01-18" );
    //   $('#max').datepicker( "setDate" , "Mar-02-18" );
    //   table.draw();


    // $(document).ready(function(){
    //         $.fn.dataTable.ext.search.push(
    //         function (settings, data, dataIndex) {
    //             var min = $('#min').datepicker("getDate");
    //             var max = $('#max').datepicker("getDate");
    //             var startDate = new Date(data[4]);
    //             if (min == null && max == null) { return true; }
    //             if (min == null && startDate <= max) { return true;}
    //             if(max == null && startDate >= min) {return true;}
    //             if (startDate <= max && startDate >= min) { return true; }
    //             return false;
    //         }
    //         );


    //             $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             var table = $('#example').DataTable();

    //             // Event listener to the two range filtering inputs to redraw on input
    //             $('#min, #max').change(function () {
    //                 table.draw();
    //             });
    //         });

    //         $(document).ready(function(){
    //         $.fn.dataTable.ext.search.push(
    //         function (settings, data, dataIndex) {
    //             var min = $('#minWeight').datepicker("getDate");
    //             var max = $('#maxWeight').datepicker("getDate");
    //             var startDate = new Date(data[4]);
    //             if (min == null && max == null) { return true; }
    //             if (min == null && startDate <= max) { return true;}
    //             if(max == null && startDate >= min) {return true;}
    //             if (startDate <= max && startDate >= min) { return true; }
    //             return false;
    //         }
    //         );


    //             $("#minWeight").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             $("#maxWeight").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             var table = $('#weightTable').DataTable();

    //             // Event listener to the two range filtering inputs to redraw on input
    //             $('#min, #max').change(function () {
    //                 table.draw();
    //             });
    //         });

    //         $(document).ready(function(){
    //         $.fn.dataTable.ext.search.push(
    //         function (settings, data, dataIndex) {
    //             var min = $('#minMilking').datepicker("getDate");
    //             var max = $('#maxMilking').datepicker("getDate");
    //             var startDate = new Date(data[4]);
    //             if (min == null && max == null) { return true; }
    //             if (min == null && startDate <= max) { return true;}
    //             if(max == null && startDate >= min) {return true;}
    //             if (startDate <= max && startDate >= min) { return true; }
    //             return false;
    //         }
    //         );


    //             $("#minMilking").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             $("#maxMilking").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             var table = $('#milkingTable').DataTable();

    //             // Event listener to the two range filtering inputs to redraw on input
    //             $('#minMilking, #maxMilking').change(function () {
    //                 table.draw();
    //             });
    //         });

    //         $(document).ready(function(){
    //         $.fn.dataTable.ext.search.push(
    //         function (settings, data, dataIndex) {
    //             var min = $('#minFeeding').datepicker("getDate");
    //             var max = $('#maxFeeding').datepicker("getDate");
    //             var startDate = new Date(data[4]);
    //             if (min == null && max == null) { return true; }
    //             if (min == null && startDate <= max) { return true;}
    //             if(max == null && startDate >= min) {return true;}
    //             if (startDate <= max && startDate >= min) { return true; }
    //             return false;
    //         }
    //         );


    //             $("#minFeeding").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             $("#maxFeeding").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    //             var table = $('#feedingTable').DataTable();

    //             // Event listener to the two range filtering inputs to redraw on input
    //             $('#minFeeding, #maxFeeding').change(function () {
    //                 table.draw();
    //             });
    //         });

    $(document).ready(function () {


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {
                twitter: {
                    via: 'CreativeTim'
                }
            },
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard.html'
        });


        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-46172202-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    });
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"/>
</noscript>
<script>
    $(document).ready(function () {

        $sidebar = $('.sidebar');
        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
        //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
        //         $('.fixed-plugin .dropdown').addClass('show');
        //     }
        //
        // }

        $('.fixed-plugin a').click(function (event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                    event.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
            }
        });

        $('.fixed-plugin .active-color span').click(function () {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-active-color', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('data-active-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-active-color', new_color);
            }
        });

        $('.fixed-plugin .background-color span').click(function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
            }
        });

        $('.fixed-plugin .img-holder').click(function () {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function () {
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $sidebar_img_container.fadeIn('fast');
                });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $full_page_background.fadeOut('fast', function () {
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    $full_page_background.fadeIn('fast');
                });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
        });

        $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function () {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image', '#');
                }

                if ($full_page_background.length != 0) {
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image', '#');
                }

                background_image = true;
            } else {
                if ($sidebar_img_container.length != 0) {
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                }

                if ($full_page_background.length != 0) {
                    $full_page.removeAttr('data-image', '#');
                    $full_page_background.fadeOut('fast');
                }

                background_image = false;
            }
        });


        $('.switch-mini input').on("switchChange.bootstrapSwitch", function () {
            $body = $('body');

            $input = $(this);

            if (paperDashboard.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                paperDashboard.misc.sidebar_mini_active = false;

                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                setTimeout(function () {
                    $('body').addClass('sidebar-mini');

                    paperDashboard.misc.sidebar_mini_active = true;
                }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function () {
                window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function () {
                clearInterval(simulateWindowResize);
            }, 1000);

        });

    });
</script>
<script>
    function setFormValidation(id) {
        $(id).validate({
            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
            },
            success: function (element) {
                $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
            },
            errorPlacement: function (error, element) {
                $(element).closest('.form-group').append(error);
            },
        });
    };

    $(document).ready(function () {
        setFormValidation('#RegisterValidation');
        setFormValidation('#TypeValidation');
        setFormValidation('#LoginValidation');
        setFormValidation('#RangeValidation');
    });
</script>
<script>
    // new
    // $(window).on('load', function(e) {
    //       e.preventDefault();
    //       let auth_id = 99999999999;
    //       $.ajax({
    //         // async: false,
    //         /* the route pointing to the post function */
    //         url: '/markAsRead/'+auth_id + '/',
    //         type: 'get',
    //         /* send the csrf-token and the input to the controller */
    //         data: {},
    //         dataType: 'JSON',
    //         /* remind that 'data' is the response of the AjaxController */
    //         success: function (data) {
    //             // console.log(data);
    //             $("#notif-box").html('');
    //             $("#notif-box").html(data['html']);

    //         }

    //       });
    // });
</script>
<script>
    $(document).on('click', '.notification', function (e) {
        // e.preventDefault();
        let auth_id = $(this).data("id");
        // console.log(auth_id);
        $.ajax({
            // async: false,
            /* the route pointing to the post function */
            url: '/markAsRead/' + auth_id + '/',
            type: 'get',
            /* send the csrf-token and the input to the controller */
            data: {},
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                // console.log(data);
                $("#notif-box").html('');
                $("#notif-box").html(data['html']);
                if (auth_id == 'all') {
                    $("#all-seen").trigger('click');
                }


            }
        });

    });

</script>

<script type="text/javascript">
    $('a[href="#"]').on('click', function (e) {
        e.preventDefault();
    });
</script>




</body>
</html>