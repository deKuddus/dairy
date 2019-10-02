
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
            <a href="http://dairy.octoriz.com/oct-account/3" class="btn btn-default">Previous Page</a>
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

        <h4 class="card-title mt-0">New Purchase</h4>

        

        <table width="100%" class="text-center">

            <tr>

                <td>
                    Invoice No
                </td>

                <td>
                    <input class="form-control" type="text" name="invoice_form_id" value="10" disabled>
                </td>

                <td>
                    Date
                </td>

                <td>
                    <input class="form-control datepicker" type="text" name="date"
                           value="20-09-2019" disabled>
                </td>

                <td>
                    Supplier
                </td>

                <td>
                    <input class="form-control" type="text" id="supplier_name" name="supplier_name" autocomplete="off">
                </td>

                <td>
                    <div class="col-3">
                        <button class="btn btn-danger" id="btn-reset-supplier">Reset</button>
                    </div>
                </td>

            </tr>

        </table>

        

    </div>

    <div class="card card-body">

        <h4 class="card-title mt-0">Add to stock</h4>

        

        <table width="100%" class="text-center">

            <tr>

                <td>
                    Product Search
                </td>
                <td>
                    <input class="form-control" type="text" id="product_name" name="product_name" required>

                    <input type="hidden" id="product_id" name="product_id">
                    <input type="hidden" id="product_sell_price" name="product_sell_price">
                    <input type="hidden" id="product_buy_price" name="product_buy_price">
                    <input type="hidden" id="product_unit" name="product_unit">
                </td>
                <td id="present_stock">
                    Present Stock: 0
                </td>
                <td id="show_unit_price">
                    Unit price: 0 TK
                </td>
                <td>
                    Quantity
                </td>
                <td>
                    <input class="form-control" type="number" min="1" id="product_quantity" name="product_quantity"
                           required>
                </td>
                <td>
                    <span id="span_product_unit">-</span>
                </td>
                <td>
                    <button class="btn btn-danger" id="btn_reset_product">Reset</button>
                    <button class="btn btn-success" id="add_product">Add</button>
                </td>

            </tr>

        </table>

        

    </div>

    <form action="http://dairy.octoriz.com/oct-account/purchase" method="POST">

        <input type="hidden" name="_token" value="hV8qlj5A4wm0Dpja53jz1nR77cZ0osvk5TxV1IU2">
        <input type="hidden" name="invoice_id" value="10">
        <input type="hidden" id="supplier_id" name="supplier_id">

        <div class="card card-body">

            <table class="table table-striped table-bordered text-center mb-0">
                <thead>
                <tr>
                    <th class="border">Item Name</th>
                    <th class="border" colspan="2">Quantity</th>
                    <th class="border">Unit Price (TK)</th>
                    <th class="border">Amount (TK)</th>
                    <th class="border">Action</th>
                </tr>
                </thead>
                <tbody id="items">
                
                
                
                </tbody>
            </table>

        </div>


        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
                <div class="card card-body">

                    <table class="table table-bordered text-center">
                        <tr>
                            <td width="50%">Gross Amount</td>
                            <td width="50%" id="gross_amount" data-value="0">0.00 TK</td>
                            <input id="inGrossAmount" type="hidden" name="gross_amount" value="0">
                        </tr>
                        <tr>
                            <td width="50%">Discount (TK)</td>
                            <td width="50%">
                                <input id="discount_amount" class="form-control text-center" name="discount_amount"
                                       type="number"
                                       min="0"
                                       step="any">
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">Discount (%)</td>
                            <td width="50%">
                                <input id="discount_percent" class="form-control text-center" name="discount_percent"
                                       type="number"
                                       min="0" max="100">
                            </td>
                        </tr>
                        <tr>
                            <td width="50%">Net Amount</td>
                            <td width="50%" id="net_amount">0.00 TK</td>
                            <input id="inNetAmount" type="hidden" name="net_amount" value="0">
                        </tr>
                    </table>

                    <button class="btn btn-success" type="submit">Purchase</button>

                </div>
            </div>
        </div>

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

    <script>

        // vars
        $empty_element = '<tr><td colspan="5">No Item!</td></tr>';

        $(function () {

            // init
            $('input#supplier_id').val("");
            $('input#supplier_name').val("");
            $('input#discount_amount').val("");
            $('input#discount_percent').val("");
            $('input#supplier_name').prop('disabled', false);

            addStockViewStatus(false);

        });

        // Search Supplier
        $('input#supplier_name').on('keyup change', function () {

            $('input#supplier_name').autocomplete({
                source: "/api/oct-account/9/supplier/ledger/" + $(this).val(),
                minLength: 1,
                select: function (event, ui) {
                    $('input#supplier_id').val(ui.item.id);
                    $(this).prop('disabled', true);

                    addStockViewStatus(true);
                }
            });

        });

        // Reset supplier form
        $('button#btn-reset-supplier').on('click', function (e) {

            $('input#supplier_id').val("");
            $('input#supplier_name').val("");
            $('input#supplier_name').prop('disabled', false);

            addStockViewStatus(false);

        });

        function addStockViewStatus(toEnable) {
            if (toEnable) {
                $('input#product_name').prop('disabled', false);
                $('input#product_quantity').prop('disabled', false);
                $('button#add_product').prop('disabled', false);
                $('button#btn_reset_product').prop('disabled', false);
            } else {
                $('input#product_name').prop('disabled', true);
                $('input#product_quantity').prop('disabled', true);
                $('button#add_product').prop('disabled', true);
                $('button#btn_reset_product').prop('disabled', true);
            }

            $('td#present_stock').text('Present Stock: 0');
            $('td#show_unit_price').text('Unit price: 0 TK');
            $('input#product_name').val("");
            $('input#product_quantity').val("");
            $('input#product_id').val("");
            $('input#product_sell_price').val("");
            $('input#product_buy_price').val("");
            $('input#product_unit').val("");
            $('span#span_product_unit').text("-");

        }

        // Search Product
        $('input#product_name').on('keyup change', function () {

            $('input#product_name').autocomplete({
                source: "/api/oct-account/-1/none/ledger/" + $(this).val(),
                minLength: 1,
                select: function (event, ui) {
                    $('input#product_id').val(ui.item.id);
                    $('input#product_sell_price').val(ui.item.unit_sell_price);
                    $('input#product_buy_price').val(ui.item.unit_buy_price);
                    $('input#product_unit').val(ui.item.unit);
                    $(this).prop('disabled', true);

                    $('span#span_product_unit').text(ui.item.unit);
                    $('td#present_stock').text('Present Stock: Loading...');
                    $('td#show_unit_price').text('Unit price: ' + ui.item.unit_buy_price + ' TK');

                    getProductQuantity(ui.item.id, ui.item.unit);

                }
            });

        });

        function getProductQuantity(productId, unit) {

            let $addButton = $('button#add_product');

            $addButton.prop('disabled', true);

            $.ajax(
                {
                    url: '/api/oct-account/product/' + productId + '/quantity',
                    success: function (quantity, textStatus, jqXHR) {

                        $('td#present_stock').text('Present Stock: ' + quantity + ' ' + unit);

                        $addButton.prop('disabled', false);

                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                        console.log("textStatus: " + textStatus + " | errorThrown: " + errorThrown);
                        alert("textStatus: " + textStatus + " | errorThrown: " + errorThrown);

                        $('button#btn_reset_product').click();

                    }

                }
            );

        }

        // Reset product form
        $('button#btn_reset_product').on('click', function (e) {

            $('input#product_name').val("");
            $('input#product_id').val("");
            $('input#product_quantity').val("");
            $('td#present_stock').text('Present Stock: 0');
            $('td#show_unit_price').text('Unit price: 0 TK');
            $('input#product_name').prop('disabled', false);

        });

        // Add stock to table
        $('button#add_product').on('click', function (e) {
            e.preventDefault();

            $product_name = $('input#product_name').val();
            $product_id = $('input#product_id').val();
            $product_quantity = $('input#product_quantity').val();
            $product_unit = $('input#product_unit').val();
            $product_sell_price = $('input#product_sell_price').val();
            $product_buy_price = $('input#product_buy_price').val();

            // validation
            if (isEmpty($product_name)) {
                swal({
                    title: 'Warning',
                    text: "No product selected!",
                    type: 'warning'
                });
                return;
            }

            if (isEmpty($product_id)) {
                swal({
                    title: 'Warning',
                    text: "No product selected!",
                    type: 'warning'
                });
                return;
            }

            if (isEmpty($product_quantity) || parseFloat($product_quantity) === 0 || isNaN(parseFloat($product_quantity))) {
                swal({
                    title: 'Warning',
                    text: "Product quantity zero!",
                    type: 'warning'
                });
                return;
            }

            if (isEmpty($product_unit)) {
                swal({
                    title: 'Warning',
                    text: "No product selected!",
                    type: 'warning'
                });
                return;
            }

            if (isEmpty($product_sell_price)) {
                swal({
                    title: 'Warning',
                    text: "No product selected!",
                    type: 'warning'
                });
                return;
            }

            if (isEmpty($product_buy_price)) {
                swal({
                    title: 'Warning',
                    text: "No product selected!",
                    type: 'warning'
                });
                return;
            }

            let $total_amount = (parseFloat($product_buy_price) * parseFloat($product_quantity)).toFixed(2);

            $existing_element = $('tr[data-id="' + $product_id + '"]');

            if ($existing_element.length !== 0) {

                // remove existing element
                $existing_element.remove();

            }

            $('tbody#items').append("<tr data-id='" + $product_id + "'>" +
                "<input type='hidden' name='product_id[" + $product_id + "]' value='" + $product_id + "'>" +
                "<input type='hidden' class='product_amount' name='product_amount[" + $product_id + "]' value='" + $total_amount + "'>" +

                "<td>" + $product_name + "</td>" +
                "<td class='border-right-0'>" +
                "<input id='inProductQuantity' class='inProductQuantity form-control' type='number' min='1' name='product_quantity[" + $product_id + "]' value='" + $product_quantity + "' required>" +
                "</td>" +
                "<td class='border-left-0'>" + $product_unit + "</td>" +
                "<td>" +
                "<input id='inProductBuyPrice' class='inProductBuyPrice form-control' type='number' min='1' step='any' name='product_buy_price[" + $product_id + "]' value='" + $product_buy_price + "'>" +
                "</td>" +
                "<td class='p_amount'>" + $total_amount + "</td>" +
                "<td><button class='btn btn-danger' id='btn_remove_item'>Remove</button></td>" +
                "</tr>");

            updateGrossAmount();

            addStockViewStatus(true);

        });

        // Remove Item
        $('body').on('click', 'button#btn_remove_item', function () {

            $parent = $(this).closest('tr');
            $parent.remove();
            updateGrossAmount();

        });

        $('input#discount_amount').on('keyup change', function () {

            updateNetAmount();

        });

        $('input#discount_percent').on('keyup change', function () {

            $gross_amount = parseFloat($('input#inGrossAmount').val()) || 0;

            $discount_percentage = parseFloat($(this).val()) || 0;

            $discount_amount = $gross_amount * $discount_percentage / 100;

            $('input#discount_amount').val($discount_amount);

            updateNetAmount();

        });

        function updateGrossAmount() {
            let $gross_amount = 0;

            $('td.p_amount').each(function () {
                $gross_amount += parseFloat($(this).text()) || 0;
            });

            $('td#gross_amount').text($gross_amount.toFixed(2) + " TK");
            $('input#inGrossAmount').val($gross_amount.toFixed(2));

            updateNetAmount();
        }

        function updateNetAmount() {
            $gross_amount = $('input#inGrossAmount').val();

            $discount_amount = parseFloat($('input#discount_amount').val());

            $net_amount = parseFloat($gross_amount) - ($discount_amount ? $discount_amount : 0);

            $('td#net_amount').text($net_amount.toFixed(2) + ' TK');
            $('input#inNetAmount').val($net_amount.toFixed(2));
        }

        $('body').on('keyup change', 'input.inProductQuantity', function () {

            if (!parseFloat($(this).val())) {
                return;
            }

            let $parent = $(this).closest('tr');

            let $product_quantity_val = parseFloat($(this).val()) || 0;

            let $product_buy_price = $parent.find($('input#inProductBuyPrice'));

            let $product_buy_price_val = parseFloat($product_buy_price.val()) || 0;

            let $final_amount = ($product_buy_price_val * $product_quantity_val).toFixed(2);

            // setter elements
            let $product_amount = $parent.find($('input.product_amount'));
            let $td_product_amount = $parent.find($('td.p_amount'));

            $product_amount.val($final_amount);
            $td_product_amount.text($final_amount);

            updateGrossAmount();

        });

        $('body').on('keyup change', 'input.inProductBuyPrice', function () {

            if (!parseFloat($(this).val())) {
                return;
            }

            let $parent = $(this).closest('tr');

            let $product_buy_price_val = parseFloat($(this).val()) || 0;

            let $product_quantity = $parent.find($('input#inProductQuantity'));

            let $product_quantity_val = parseFloat($product_quantity.val()) || 0;

            let $final_amount = ($product_quantity_val * $product_buy_price_val).toFixed(2);

            // setter elements
            let $product_amount = $parent.find($('input.product_amount'));
            let $td_product_amount = $parent.find($('td.p_amount'));

            $product_amount.val($final_amount);
            $td_product_amount.text($final_amount);

            updateGrossAmount();

        });

    </script>


</body>
</html>