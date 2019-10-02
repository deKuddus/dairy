
<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a class="copyright" href="https://www.appteum.com/" target="_blank">Appteum Inc.</a>
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
            ©2019, made with <i class="fa fa-heart heart"></i> by Appteum
        </span>
    </div>
</div>
</div>
</footer>
</div>
</div>
<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" type="text/css" />-->
<!--   Core JS Files   -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/printThis.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re//version3/bootstrap.switch/ -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-switch.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="<?php echo base_url() ?>assets/js/sweetalert2.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url() ?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<!-- --Nm change----- -->
<script src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
<!-- Nm Change end -->
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?php echo base_url() ?>assets/js/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?php echo base_url() ?>assets/js/jquery-jvectormap.js"></script>
<!--  Plugin for the Bootstrap Table -->
<script src="<?php echo base_url() ?>assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Chart JS -->
<script src="<?php echo base_url() ?>assets/js/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url() ?>assets/js/paper-dashboard.min790f.js?v=2.0.1" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() ?>assets/js/demo.js"></script>
<!-- Share library -->
<script src="<?php echo base_url() ?>assets/js/jquery.sharrre.js"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
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

/*    $(document).ready(function () {


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

    });*/
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
/*        $(id).validate({
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
        });*/
    };

    $(document).ready(function () {
/*        setFormValidation('#RegisterValidation');
        setFormValidation('#TypeValidation');
        setFormValidation('#LoginValidation');
        setFormValidation('#RangeValidation');*/
    });

    $(document).ready(function(){
                //Search supplier
      $('input#supplier-name').on('keyup change', function () {
        var supplier = $(this).val();
        $('input#supplier-name').autocomplete({
            source:function(request,response){
                $.getJSON('<?php echo base_url() ?>supplier/supplier_name/'+supplier ,function(data){
                    var array = $.map(data,function(row){
                        return {
                            value:row.name,
                            label:row.name,
                            supplier_id:row.id
                        }
                    })
                    response($.ui.autocomplete.filter(array,request.term));
                })
            } ,            
            minLength:2,
            delay:500,
            select:function(event,ui){
                $("#supplier-id").val(ui.item.supplier_id);
            }
        });
    });

        //Supplier reset button
        $('button#btn-reset-supplier').on('click', function (e) {

            $('input#supplier-id').val("");
            $('input#supplier-name').val("");
            $('input#supplier-name').prop('disabled', false);

        });

        //Supplier check box

        $('#supplier-name').prop('disabled', true);
        $('#purchase-place').prop('disabled', true);
        $('#purchase-price').prop('disabled', true);
        $('#purchase-date').prop('disabled', true);

        $('#supplier-name').val('');
        $('#purchase-place').val('');
        $('#purchase-price').val('');
        $('#purchase-date').val('');

        $('#supplier-check').change(function () {
            if ($(this).prop("checked")) {
                console.log("Checked");
                $('#supplier-name').prop('disabled', false);
                $('#purchase-place').prop('disabled', false);
                $('#purchase-price').prop('disabled', false);
                $('#purchase-date').prop('disabled', false);
            } else {
                console.log("unchecked");
                $('#supplier-name').prop('disabled', true);
                $('#purchase-place').prop('disabled', true);
                $('#purchase-price').prop('disabled', true);
                $('#purchase-date').prop('disabled', true);

                $('#supplier-name').val('');
                $('#purchase-place').val('');
                $('#purchase-price').val('');
                $('#purchase-date').val('');

            }
        });
    });
</script>

<script>

    $(function () {
        demo.initDateTimePicker();
    });

    $('input#chkOpening').on('switchChange.bootstrapSwitch', function () {
        if (this.checked) {
            $('.ts-open-column').removeClass('d-none');
        } else {
            $('.ts-open-column').addClass('d-none');
        }
    });

    $('input#chkPurchase').on('switchChange.bootstrapSwitch', function () {
        if (this.checked) {
            $('.ts-purchase-column').removeClass('d-none');
        } else {
            $('.ts-purchase-column').addClass('d-none');
        }
    });

    $('input#chkSales').on('switchChange.bootstrapSwitch', function () {
        if (this.checked) {
            $('.ts-sale-column').removeClass('d-none');
        } else {
            $('.ts-sale-column').addClass('d-none');
        }
    });

    $('input#chkClosing').on('switchChange.bootstrapSwitch', function () {
        if (this.checked) {
            $('.ts-close-column').removeClass('d-none');
        } else {
            $('.ts-close-column').addClass('d-none');
        }
    });

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
    $(function () {
            // initialise Datetimepicker and Sliders
        demo.initDateTimePicker();

            if ($('.slider').length != 0) {
                demo.initSliders();
            }
        });



        $("#branch-select").on('change', function () {
            selectedBranch = $(this).val();
            $.ajax({
                url: '<?php echo base_url() ?>cow/shed/' + selectedBranch,
                type: 'get',
                data: {},
                dataType: 'JSON',
                success: function (data) {
                    // console.log(data)lem
                    var elems = '';
                    $.each(JSON.parse(JSON.stringify(data)), function (key, value) {
                        elems += '<option value="' + value.id + '">' + value.name + '</option>';
                    });

                    $("#shed_id").html(elems);
                }
            });
        });


        // Gets Cows for the selected shed
        $(document).on('change', '#shed-options', function (e) {
            e.preventDefault();

            var selectedShed = $(this).find(":selected").val();
            var selectedDate = $('#date-picker').val().replace('/', '-') || ' ';
            var selectedDate = selectedDate.replace('/', '-');

            //   console.log(selectedDate);
            $.ajax({
                // async: false,
                /* the route pointing to the post function */
                url: '/ajaxWeightFeed/' + selectedShed + '/' + selectedDate + '/',
                type: 'get',
                /* send the csrf-token and the input to the controller */
                data: {},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) {
                    // console.log(data);
                    $("#datatable").html(data['html']);
                    $('input:disabled').trigger('change');
                    $('input:disabled').trigger('input');
                    // $(window).load(document.URL+'#date-button');
                    // Show Hide Save Button
                    totalInputs = $('#datatable input').not('.cow-id').length;
                    totalDisabledInputs = $('#datatable input:disabled').not('.cow-id').length;
                    // console.log('totalInputs= '+ totalInputs + ',  totalDisabledInputs= '+ totalDisabledInputs);
                    if (totalInputs == totalDisabledInputs) {
                        $("#saves-data").hide();
                    } else {
                        $("#saves-data").show();
                    }
                }
            });
        });

        // Gets Cows for the selected date
        $(document).on('click', '#date-button', function (e) {
            e.preventDefault();

            var selectedShed = $("#shed-options").find(":selected").val();
            var selectedDate = $('#date-picker').val().replace('/', '-');
            var selectedDate = selectedDate.replace('/', '-');

            // console.log(selectedShed, selectedDate);
            $.ajax({
                // async: false,
                /* the route pointing to the post function */
                url: '/ajaxWeightFeed/' + selectedShed + '/' + selectedDate,
                type: 'get',
                /* send the csrf-token and the input to the controller */
                data: {},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) {
                    // console.log(data);
                    $("#datatable").html(data['html']);

                    // Show Hide Save Button
                    totalInputs = $('#datatable input').not('.cow-id').length;
                    totalDisabledInputs = $('#datatable input:disabled').not('.cow-id').length;
                    // console.log('totalInputs= '+ totalInputs + ',  totalDisabledInputs= '+ totalDisabledInputs);
                    if (totalInputs == totalDisabledInputs) {
                        $("#saves-data").hide();
                    } else {
                        $("#saves-data").show();
                    }
                }
            });
        }).trigger('click');


        // Concentrate Total: Add the row checkbox-1 to last td
        $(document).on('change', '.checkbox-1', function () {
            var $tr = $(this).closest('tr'); // get tr which contains the checkbox
            // console.log($tr);
            var tot = 0; // variable to sore sum
            $('.checkbox-1').each(function () { // iterate over inputs
                if ($(this).is(":checked")) {
                    tot += parseFloat($(this).closest('td').prev('td').text()) || 0; // parse and add value, if NaN then add 0
                } else {
                    tot += 0;
                }
            });

            // console.log($(this));
            $('#total-concentrate').html(tot.toFixed(2)); // update last column value

            $('input#total_concentrate').val(tot.toFixed(2));

        }).trigger('change'); // trigger input to set initial value in column

        // Fodder Feeding Total: Add the row checkbox-2 to last td
        $(document).on('change', '.checkbox-2', function () {
            var $tr = $(this).closest('tr'); // get tr which contains the checkbox
            // console.log($tr);
            var tot = 0; // variable to sore sum
            $('.checkbox-2').each(function () { // iterate over inputs
                if ($(this).is(":checked")) {
                    tot += parseFloat($(this).closest('td').prev('td').text()) || 0; // parse and add value, if NaN then add 0
                } else {
                    tot += 0;
                }
            });

            // console.log($(this));
            $('#total-hay').html(tot.toFixed(2)); // update last column value

            $('input#total_hay').val(tot.toFixed(2));

        }).trigger('change'); // trigger input to set initial value in column

        // Fodder Feeding Total: Add the row checkbox-2 to last td
        $(document).on('change', '.checkbox-3', function () {
            var $tr = $(this).closest('tr'); // get tr which contains the checkbox
            // console.log($tr);
            var tot = 0; // variable to sore sum
            $('.checkbox-3').each(function () { // iterate over inputs
                if ($(this).is(":checked")) {
                    tot += parseFloat($(this).closest('td').prev('td').text()) || 0; // parse and add value, if NaN then add 0
                } else {
                    tot += 0;
                }
            });
            // console.log($(this));
            $('#total-fodder').html(tot.toFixed(2)); // update last column value

            $('input#total_fodder').val(tot.toFixed(2));

        }).trigger('change'); // trigger input to set initial value in column


        // Add the row inputs to last td Feeding
        $(document).on('change', 'table .feed', function () {

            var $tr = $(this).closest('tr'); // get tr which contains the input
            var tot = 0; // variable to sore sum
            $('input', $tr).not('.cow-id').each(function () { // iterate over inputs
                // console.log($(this).is(":checked"));
                if ($(this).is(":checked")) {
                    tot += parseFloat($(this).closest('td').prev('td').text()) || 0; // parse and add value, if NaN then add 0
                }

            });

            $('td#total-feeds', $tr).text(tot.toFixed(2)); // update last column value

            // Add the last column inputs to get total milk
            var tor = 0;
            $('.total-feeds').each(function () {
                // console.log($(this).html())
                tor += parseFloat($(this).html()) || 0;
            });
            $('#total-fed').text(tor.toFixed(2));

        }).trigger('change'); // trigger input to set initial value in column

        // Check all button Hay
        $(document).on('click', "#check-toggle-concentrate", function () {
            var checkStatus = $(this).is(":checked");

            var $el_parent = $(this).parent('tr').parent().find('.checkbox-1');
            //$(".mak", $(this).parents('tr')).val(ui.item.medicin);

            // console.log(checkStatus);
            if (checkStatus == true) {
                // it is checked
                $(".checkbox-1").not(':disabled').each(function () {
                    $(this).prop("checked", "checked");
                }).trigger('change');

                $el_parent.innerHTML = "Uncheck All";

            } else {
                //   unchecked
                $(".checkbox-1").not(':disabled').each(function () {
                    $(this).prop("checked", false);
                }).trigger('change');

                $el_parent.innerHTML = "Check All";

            }
        //   console.log(checkStatus);
        });

        // Check all button Hay
        $(document).on('click', "#check-toggle-hay", function () {
            var checkStatus = $(this).is(":checked");

             var $el_parent = $(this).parent('tr').parent().find('.checkbox-2');

            // console.log(checkStatus);
            if (checkStatus == true) {
                // it is checked
                $(".checkbox-2").not(':disabled').each(function () {
                    $(this).prop("checked", "checked");
                }).trigger('change');

                $el_parent.innerHTML = "Uncheck All";

            } else {
                //   unchecked
                $(".checkbox-2").not(':disabled').each(function () {
                    $(this).prop("checked", false);
                }).trigger('change');

                $el_parent.innerHTML = "Check All";
            }
        //   console.log(checkStatus);
        });

        // Check all button Fodder
        $(document).on('click', "#check-toggle-fodder", function () {
            var checkStatus = $(this).is(":checked");

            var $el_parent = $(this).parent('tr').parent().find('.checkbox-3');

            // console.log(checkStatus);
            if (checkStatus == true) {
                // it is checked
                $(".checkbox-3").not(':disabled').each(function () {
                    $(this).prop("checked", "checked");
                }).trigger('change');

                $el_parent.innerHTML = "Uncheck All";

            } else {
                //   unchecked
                $(".checkbox-3").not(':disabled').each(function () {
                    $(this).prop("checked", false);
                }).trigger('change');

                $el_parent.innerHTML = "Check All";
            }
        //   console.log(checkStatus);
        });


        // Add the row inputs to last td Lactation
        $(document).on('input', 'table .lactation', function () {

            var $tr = $(this).closest('tr'); // get tr which contains the input
            var tot = 0; // variable to sore sum
            $('input', $tr).not('.cow-id').each(function () { // iterate over inputs
                tot += parseFloat($(this).val()) || 0; // parse and add value, if NaN then add 0
            });
            $('td:last', $tr).text(tot.toFixed(2)); // update last column value

            // Add the last column inputs to get total milk
            var tor = 0;
            $('.total-milk').each(function () {
                tor += parseFloat($(this).html()) || 0;
            });
            $('#total-milked').text(tor.toFixed(2));

            $('input#total_milk').val(tor.toFixed(2));

        }).trigger('input'); // trigger input to set initial value in column


    </script>
<script>

    $(function () {
        demo.initDateTimePicker();
    });

    $('a.oct-load-data').on('click', function () {

        let type = $(this).data('type');

        $.ajax({
            url: '/api/oct-account/transaction/' + type + '/03-08-2019/03-08-2019',
            success: function (data, textStatus, jqXHR) {

                let $parent = $('tbody#items');

                $parent.empty();

                let total_amount = 0.0;

                data.forEach(function (element) {

                    let $tr = '<tr>' +
                    '<td>' + element.dr_name + '</td>' +
                    '<td>' + element.cr_name + '</td>' +
                    '<td>' + element.total_amount + ' TK</td>' +
                    '<td>' + element.created_at + '</td>' +
                    '</tr>';

                    total_amount += parseFloat(element.total_amount);

                    $parent.append($tr);

                });

                let $tr = '<tr>' +
                '<td colspan="2"><strong>TOTAL</strong></td>' +
                '<td><strong>' + total_amount.toFixed(2) + ' TK</strong></td>' +
                '<td></td>' +
                '</tr>';

                $parent.append($tr);

            },
            error: function (jqXHR, textStatus, errorThrown) {

                console.log("textStatus: " + textStatus + " | errorThrown: " + errorThrown);

            }
        }
        );

    });

</script>
<script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
    //     // today = 2019-08-03 00:00:00;
    //     $("#general-date").datepicker({
    //         onSelect: function () { table.draw(); },
    //         changeMonth: true,
    //         changeYear: true,
    //         dateFormat : 'dd-mm-yy',
    //         defaultDate: new Date,

    //     });

    // Initializations
    $(function () {
        // initialise Datetimepicker and Sliders
        demo.initDateTimePicker();
        if ($('.slider').length != 0) {
            demo.initSliders();
        }

        // disable all field
/*            $("input[type=checkbox]").prop("checked", false);
        $("input")
            .not("[type=checkbox]")
            .not(".datepicker")
            .not("[name=_token]")
            .each(function () {
                $(this).prop('disabled', true);
                $(this).val(""); // reset value
            });
        $("select").prop('disabled', true);
        $("select").val(''); // reset value
        $("select").trigger('change'); // broadcast about value change
        $("button.dropdown-toggle").prop("disabled", true);
        $("button.btn-reset").prop("disabled", true);*/

    });

    $(function () {

        // Change row state
        $("input.enable-row").on("change", function () {

            $el_row = $(this).closest("tr");

            if ($(this).is(":checked")) {
                $el_row.find("input")
                .not("[type=checkbox]")
                .not("[name=_token]")
                .each(function () {
                    $(this).prop('disabled', false);
                });
                $el_row.find("select").prop('disabled', false);
                $el_row.find("button.dropdown-toggle").prop("disabled", false);
                $el_row.find("button.btn-reset").prop("disabled", false);
            } else {
                $el_row.find("input")
                .not("[type=checkbox]")
                .not("[name=_token]")
                .each(function () {
                    $(this).prop('disabled', true);
                    $(this).val("");
                });
                $el_row.find("select").prop('disabled', true);
                $el_row.find("select").val('');
                $el_row.find("select").trigger('change');
                $el_row.find("button.dropdown-toggle").prop("disabled", true);
                $el_row.find("button.btn-reset").prop("disabled", true);
            }

        });

        // Check all row
        $("input.check-all").on("change", function () {

                $el_form = $(this).closest("form");

                if ($(this).is(":checked")) {

                    $el_form.find("[type=checkbox]")
                        .not(".check-all")
                        .each(function () {

                            $(this).prop("checked", true);
                            $(this).trigger("change");

                        });

                } else {

                    $el_form.find("[type=checkbox]")
                        .not(".check-all")
                        .each(function () {

                            $(this).prop("checked", false);
                            $(this).trigger("change");

                        });

                }

        });

    });

    // Search Product
    $('input.medicine-name').on('keyup change', function () {
        var medicine = $(this).val();
        $('input.medicine-name').autocomplete({
            source:function(request,response){
                $.getJSON('<?php echo base_url() ?>activity/medicine/'+medicine ,function(data){
                    var array = $.map(data,function(row){
                        return {
                            value:row.name,
                            label:row.name,
                            medicin:row.id
                        }
                    })
                    response($.ui.autocomplete.filter(array,request.term));
                })
            } ,            
            minLength:2,
            delay:500,
            select:function(event,ui){
                $(".mak", $(this).parents('tr')).val(ui.item.medicin);
            }
        });
    });


    // Reset
    $('button.btn-reset').on('click', function () {

        let $parent = $(this).closest('tr');

        $parent.find('input[type=hidden]').val('');

        let $medicineName = $parent.find('input[type=text]');

        $medicineName.val('');
        $medicineName.prop('disabled', false);
    });
</script>

<script>
    $(function () {
        demo.initDateTimePicker();
    });


    $(document).on('click', '#delete', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        let token = $(this).data('token');

        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it',
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: false
        }).then(function() {
            swal({
                title: 'Deleted!',
                text: 'Your imaginary file has been deleted.',
                type: 'success',
                confirmButtonClass: "btn btn-success",
                buttonsStyling: false
            }).then(function () {
                location.reload();
            }).catch(swal.noop);
        }, function(dismiss) {
            // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
            if (dismiss === 'cancel') {
                swal({
                    title: 'Cancelled',
                    text: 'Your imaginary file is safe :)',
                    type: 'error',
                    confirmButtonClass: "btn btn-info",
                    buttonsStyling: false
                }).catch(swal.noop);
            }
        }).catch(swal.noop);

        swal({
            title: 'Are you sure?',
            text: 'Invoice ' + id + ' will be deleted',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it',
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: false
        }).then(function () {
            $.ajax({
                url: "/oct-account/invoice/" + id,
                type: 'POST',
                data: {
                    "id": id,
                    "_token": token,
                    '_method': 'DELETE',
                },
                success: function (data) {
                    console.log(data);
                    if (data.status == "success")
                        swal({
                            title: 'Deleted!',
                            text: data.message,
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        }).then(function () {
                            location.reload()
                        }).catch(swal.noop);
                    }
                }).catch(swal.noop);
        }).catch(swal.noop);
    });

</script>

<script>

    // vars
    $empty_element = '<tr><td colspan="5">No Item!</td></tr>';

    $(function () {


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
});

</script>

<script>

    $(function () {

        // init
        $('input#expense_id').val("");
        $('input#expense_name').val("");
        $('textarea#comment').val("");
        $('input#amount').val("");
        $('input#amount').prop('disabled', true);

    });

    // Search Expenses
    $('input#expense_name').on('keyup change', function () {

        $('input#expense_name').autocomplete({
            source: "/api/oct-account/0/none/ledger/" + $(this).val(),
            minLength: 1,
            select: function (event, ui) {
                $('input#expense_id').val(ui.item.id);
                $(this).prop('disabled', true);

                viewEnable(true);
            }
        });

    });

    // Reset amount fiels
    $('button#btn-reset-expense').on('click', function (e) {

        $('input#expense_id').val("");
        $('input#expense_name').val("");
        $('input#expense_name').prop('disabled', false);

        viewEnable(false);

    });

    function viewEnable(yes) {

        $('input#amount').val("");

        if (yes) {
            $('input#amount').prop('disabled', false);
            $('textarea#comment').prop('disabled', false);
        } else {
            $('input#amount').prop('disabled', true);
            $('textarea#comment').prop('disabled', true);
        }

    }

</script>

<script type="text/javascript">
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      demo.initDateTimePicker();
        if ($('.slider').length != 0) {
            demo.initSliders();
        }
    });
        
    // Gets Cows for the selected date 
    $(document).on('click','#date-button', function(e) {
        e.preventDefault();
        var startDate = $('#date-picker-start').val().replace('/', '-');
        var startDate = startDate.replace('/', '-') || ' ';

          var endDate = $('#date-picker-end').val().replace('/', '-');
          var endDate = endDate.replace('/', '-') || ' ';
          $.ajax({
                url: '/log-lactation-ajax/'+ 1 + '/' + startDate + '/' + endDate + '/',
                type: 'get',
                data: {},
                dataType: 'JSON',
                success: function (data) { 
                    $("#datatable").html('');
                    $("#datatable").html(data['html']);
                    
                }
            });
    }).trigger('click');
</script>

<script type="text/javascript">
    $(window).on('load', function (e) {
        // console.log('load works');
        e.preventDefault();

        selectedCow = $("#cow-id").data('id');

        // load datatable asynchronously
        $.ajax({
            // async: false,
            /* the route pointing to the post function */
            url: '/ajaxGetReports/' + selectedCow + '/',
            type: 'get',
            /* send the csrf-token and the input to the controller */
            data: {},
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                // console.log(data);
                $("#load-data").html(data['html']);
                // initialise Datetimepicker and Sliders
                demo.initDateTimePicker();
                if ($('.slider').length != 0) {
                    demo.initSliders();
                }

                // var datepickerVar = $('.datepicker')
                // $(datepickerVar).each(function() {
                //   $(this).datepicker();

                // });
            }
        });


    });

    $(document).on('click', '.submit-button', function (e) {

        e.preventDefault();
        // console.log( $(this).parent().parent().parent().find('.min').val() );
        parent = $(this).parent().parent().parent();
        selectedType = $(this).data('type');
        selectedMin = $(parent).find('.min').val().replace('/', '-');
        selectedMin = selectedMin.replace('/', '-') || ' ';
        selectedMax = $(parent).find('.max').val().replace('/', '-');
        selectedMax = selectedMax.replace('/', '-') || ' ';
        // console.log(selectedType)
        // console.log('selectedMin= '+selectedMin)
        // console.log('selectedMax= '+ selectedMax)
        // load datatable asynchronously
        $.ajax({
            // async: false,
            /* the route pointing to the post function */
            url: '/ajaxGetSingleReport/' + 1 +'/' + selectedType + '/' + selectedMin + '/' + selectedMax + '/',
            type: 'get',
            /* send the csrf-token and the input to the controller */
            data: {},
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
                // console.log(data);
                // parent.parent().parent().next('table').html('')
                parent.parent().parent().next('table').html(data['html']);
                // initialise Datetimepicker and Sliders
                // demo.initDateTimePicker();
                // if ($('.slider').length != 0) {
                //   demo.initSliders();
                // }
                // var datepickerVar = $('.datepicker')
                // $(datepickerVar).each(function() {
                //   $(this).datepicker();

                // });
            }
        });
    });
</script>

<script type="text/javascript">

    var weighing_form = $('form#weighing-form');
    weighing_form.ajaxForm({
        url: '<?php echo base_url() ?>activity/weighing',
        beforeSend: function() {
            weighing_form.find('.weighing').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 weighing_form.find('.weighing').text('Save Data');
                 $('#message').hide("slow");
             }, 2000);
            }
            else{
                $('#message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });

    var sickness_form = $('form#sickness-form');
    sickness_form.ajaxForm({
        url: '<?php echo base_url() ?>activity/sickness',
        beforeSend: function() {
            sickness_form.find('.sickness').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#sickness_message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 sickness_form.find('.sickness').text('Save Data');
                 $('#sickness_message').hide("slow");
             }, 2000);
            }
            else{
                $('#sickness_message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });

    var heating_form = $('form#heating-form');
    heating_form.ajaxForm({
        url: '<?php echo base_url() ?>activity/heating',
        beforeSend: function() {
            heating_form.find('.heating').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#heating_message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 heating_form.find('.heating').text('Save Data');
                 $('#heating_message').hide("slow");
             }, 2000);
            }
            else{
                $('#heating_message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });

    var pregnancy_form = $('form#pregnancy-form');
    pregnancy_form.ajaxForm({
        url: '<?php echo base_url() ?>activity/pregnancy',
        beforeSend: function() {
            pregnancy_form.find('.pregnancy').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#pregnancy_message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 pregnancy_form.find('.pregnancy').text('Save Data');
                 $('#pregnancy_message').hide("slow");
             }, 2000);
            }
            else{
                $('#pregnancy_message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });

    var deworming_form = $('form#deworming-form');
    deworming_form.ajaxForm({
        url: '<?php echo base_url() ?>activity/deworming',
        beforeSend: function() {
            deworming_form.find('.deworming').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#deworming_message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 deworming_form.find('.deworming').text('Save Data');
                 $('#deworming_message').hide("slow");
             }, 2000);
            }
            else{
                $('#deworming_message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });

    var vaccination_form = $('form#vaccination-form');
    vaccination_form.ajaxForm({
        url: '<?php echo base_url() ?>activity/vaccination',
        beforeSend: function() {
            vaccination_form.find('.vaccination').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#vaccination_message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 vaccination_form.find('.vaccination').text('Save Data');
                 $('#vaccination_message').hide("slow");
             }, 2000);
            }
            else{
                $('#vaccination_message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });

    var treatment_form = $('form#treatment-form');
    treatment_form.ajaxForm({
        url: '<?php echo base_url() ?>activity/treatment',
        beforeSend: function() {
            treatment_form.find('.treatment').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#treatment_message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 treatment_form.find('.treatment').text('Save Data');
                 $('#treatment_message').hide("slow");
             }, 2000);
            }
            else{
                $('#treatment_message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });


    var supplier_form = $('form#supplier-ladger');
    supplier_form.ajaxForm({
        url: '<?php echo base_url() ?>supplier/store',
        beforeSend: function() {
            supplier_form.find('.supplier').text('Please wait..');
        },
        success: function(data) {
            if (data.status == 200) {
                $('#supplier_message').html('<div class="alert alert-success"> Data Added successfully</div>');
                setTimeout(function () {
                 supplier_form.find('.supplier').text('Save Data');
                 $('#supplier_message').hide("slow");
             }, 2000);
            }
            else if(data.status == 300){
                $('#supplier_message').html('<div class="alert alert-danger">Failed To Add Data</div>');
            }
        }
    });

</script>

</body>
</html>