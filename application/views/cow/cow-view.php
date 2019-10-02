

<div class="content">
    <div class="printarea">
        <div class="d-none d-print-block col-10 text-center mx-auto">
            <h4 class="font-weight-bold"> Appteum Agro</h4>
            <p>Salimpur, Chittagong.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"></h4>
                        </div>

                        <div class="card-body">

                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for tde toolbar              -->
                                <h5 class="d-inline-block">Cow Profile</h5>
                                <a href="" class=" pull-right btn btn-info">Add New Cow</a>

                                <a href="" onclick="return confirm('Are you sure? tde data will be DELETED!')" class="pull-right btn btn-danger remove d-inline-block mx-2"> Delete </a>
                                 <a href="" class="pull-right btn btn-warning edit d-inline-block mx-2"> Edit </a>
                                <a href="" class="btn btn-info pull-right mx-2">Excel <i><img src="http://dairy.octoriz.com/svg/download.svg" class="svg-button"></img></i></a>
                                <a href="javascript:void(0);" onclick="window.print();" class="btn btn-info pull-right mx-2">Print</a>
                            </div>

                            <div class="row col-12 justify-content-between px-0 mx-0 mt-4">
                                <?php if(!empty($cows)){ foreach ($cows as $cow) { } ?>
                                <div class="col-6">

                                    <table id="datatable-left" class="table table-striped table-bordered" cellspacing="0"
                                    width="100%">
                                    <!--<thead>-->
                                        <tr>
                                            <td class="text-center font-weight-bold" width="50%">Cow Number</td>
                                            <td class="text-center" id="cow-id"><?php echo $cow->cow_id; ?></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center font-weight-bold">Branch Name</td>
                                            <td class="text-center">
                                                <?php foreach ($data['branches'] as $branch) {
                                                    if($branch->id == $cow->branch_id){
                                                        echo $branch->name;
                                                    }
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Shed Name</td>
                                            <td class="text-center">
                                                <?php echo shedOfBranch($cow->shed_id,$cow->branch_id); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Gender</td>
                                            <td class="text-center">
                                                <?php foreach ($data['genders'] as $gender) {
                                                    if($gender->id == $cow->gender){
                                                        echo $gender->name;
                                                    }
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Cow Status</td>
                                            <td class="text-center">
                                                <?php foreach ($data['status'] as $status) {
                                                    if($status->id == $cow->status){
                                                        echo $status->name;
                                                    }
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Cow Breed</td>
                                            <td class="text-center">
                                                <?php foreach ($data['breeding_status'] as $breeding_status) {
                                                    if($breeding_status->id == $cow->breeding_status){
                                                        echo $breeding_status->name;
                                                    }
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Date Of Birth</td>
                                            <td class="text-center"><?php echo $cow->dob; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Cow Color</td>
                                            <td class="text-center">
                                                <?php foreach ($data['colors'] as $colors) {
                                                    if($colors->id == $cow->color){
                                                        echo $colors->name;
                                                    }
                                                } ?>
                                                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Age Class</td>
                                            <td class="text-center">
                                                <?php 
                                                $age = age($cow->dob);
                                                if($age >1){
                                                    echo "Adult";
                                                }else{
                                                    echo " Calf";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Last Deworimg</td>
                                            <td class="text-center">None</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-weight-bold">Last Sickness</td>
                                            <td class="text-center">05/03/2019</td>
                                        </tr>

                                    </table>

                                </div>

                                <div class="col-6">

                                    <table id="datatable-right" class="table table-striped table-bordered" cellspacing="0"
                                    width="100%">
                                    <tr>
                                        <td class="text-center font-weight-bold" width="50%">Weight</td>
                                        <td class="text-center"><?php echo $cow->weight.' KG'; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Total Lactation</td>
                                        <td class="text-center">247 KGs</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Purchased</td>
                                        <td class="text-center"> <?php if($cow->purchase_price) {echo "Yes";}else{echo "No";}?> </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Cow Type</td>
                                        <td class="text-center">
                                            <?php 
                                                foreach ($data['types'] as $types) {
                                                    if($types->id == $cow->type){
                                                        echo $types->name;
                                                    }
                                                } ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center font-weight-bold">Health Status</td>
                                        <td class="text-center"> Sick </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Breeding Percentage</td>
                                        <td class="text-center"><?php echo $cow->breeding_status." %"; ?></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center font-weight-bold">Heat</td>
                                        <td class="text-center"> No                                     </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Lactation</td>
                                        <td class="text-center">                                            Yes </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Pregnancy</td>
                                        <td class="text-center"> No </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Last Pregnancy</td>
                                        <td class="text-center">None</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-weight-bold">Last Vaccination</td>
                                        <td class="text-center">None</td>
                                    </tr>
                                </table>

                            </div>
                        <?php }else{
                            echo "<h2 class='text-center' >no data found</h2>";
                        } ?>


                        </div><!--Table Row Ended-->

                    <table id="datatable-left" class="table table-striped table-bordered col-12" cellspacing="0" width="100%"> </table>

                </div>
                <!-- end content-->

            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
        </div>
        <!-- end row -->


<!--         //////////////////////////// -->

<div id="load-data"><!--Main Row Starts-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Reports</h5>
            </div>
            <!-- Card Body Starts-->
            <div class="card-body">
                <!-- NavTabs Navigation Starts-->
                <div class="nav-tabs-navigation">
                    <!-- Nav Tabs Wrapper Starts-->
                    <div class="nav-tabs-wrapper">
                        <ul id="tabs" class="nav nav-tabs d-flex justify-content-start" role="tablist">


                            <li class="nav-item mr-2">
                                <a class="nav-link active show" data-toggle="tab" href="#feed-tab" role="tab" aria-expanded="false" aria-selected="true">Feedings</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" data-toggle="tab" href="#lactation-tab" role="tab" aria-expanded="false" aria-selected="false">Lactations</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" data-toggle="tab" href="#weight-tab" role="tab" aria-expanded="true" aria-selected="false">Weighings</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" data-toggle="tab" href="#deworming-tab" role="tab" aria-expanded="false" aria-selected="false">Dewormings</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" data-toggle="tab" href="#pregnancy-tab" role="tab" aria-expanded="true" aria-selected="false">Pregnancies</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" data-toggle="tab" href="#sicknesses-tab" role="tab" aria-expanded="false" aria-selected="false">Sicknesses</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" data-toggle="tab" href="#treatments-tab" role="tab" aria-expanded="true" aria-selected="false">Treatments</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" data-toggle="tab" href="#vaccination-tab" role="tab" aria-expanded="true" aria-selected="false">Vaccinations</a>
                            </li>

                        </ul>
                    </div>
                    <!-- Nav Tabs Wrapper Ends-->
                </div>
                <!-- NavTabs Navigation Ends-->
                <!-- Tab Content Starts-->
                <div id="my-tab-content" class="tab-content text-center">

                    <div class="tab-pane" id="weight-tab" role="tabpanel" aria-expanded="true">


                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="POST" action="http://dairy.octoriz.com/get-weight">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Weighings</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-block">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minWeight" type="text">
                                                </td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxWeight" type="text">
                                                </td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="weight" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="weightTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Weight</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>

                    <div class="tab-pane" id="lactation-tab" role="tabpanel" aria-expanded="false">

                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="GET" action="http://dairy.octoriz.com/ajaxLactation">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Lactation</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-none">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minMilking" type="text">
                                                </td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxMilking" type="text">
                                                </td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="lactation" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="milkingTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Milking</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>

                    <div class="tab-pane active show" id="feed-tab" role="tabpanel" aria-expanded="false">


                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="GET" action="http://dairy.octoriz.com/ajaxFeed">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Feedings</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-none">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minFeeding" type="text">
                                                </td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxFeeding" type="text">
                                                </td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="feed" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="feedingTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Amount</td>
                                            <td class="text-center">Feed Type</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>


                    <div class="tab-pane" id="deworming-tab" role="tabpanel" aria-expanded="false">

                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="POST" action="http://dairy.octoriz.com/ajaxDeworm">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Lactation</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-none">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minDeworming" type="text">
                                                </td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxDeworming" type="text">
                                                </td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="deworming" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="dewormingTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Deworming Cost</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>

                    <div class="tab-pane" id="pregnancy-tab" role="tabpanel" aria-expanded="false">

                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="POST" action="http://dairy.octoriz.com/ajaxPregnancy">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Lactation</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-none">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minPregnancy" type="text">
                                                </td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxPregnancy" type="text">
                                                </td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="pregnancy" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="dewormingTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Pregnancy Status</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>

                    <div class="tab-pane" id="sicknesses-tab" role="tabpanel" aria-expanded="false">

                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="POST" action="http://dairy.octoriz.com/ajaxSickness">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Lactation</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-none">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minSickness" type="text">
                                                </td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxSickness" type="text">
                                                </td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="sickness" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="dewormingTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Sickness Status</td>
                                            <td class="text-center">Description</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>


                    <div class="tab-pane" id="treatments-tab" role="tabpanel" aria-expanded="false">

                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="POST" action="http://dairy.octoriz.com/ajaxTreatment">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Lactation</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-none">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minTreatment" type="text">
                                                </td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxTreatment" type="text">
                                                </td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="treatment" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="dewormingTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Disease Name</td>
                                            <td class="text-center">Medicines</td>
                                            <td class="text-center">Total Cost</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>


                    <div class="tab-pane" id="vaccination-tab" role="tabpanel" aria-expanded="false">

                        <div class="col-md-12">
                            <div class="card">
                                <!--<div class="card-header">-->
                                <!--  <h4 class="card-title"></h4>-->
                                <!--</div>-->

                                <div class="card-body">
                                    
                                    <form method="POST" action="http://dairy.octoriz.com/ajaxVaccination">
                                        <input type="hidden" name="_token" value="VxlL4hb9gjh4LGTnx6M9qtYMfQYZLQLjrGbwCG1E">                                        <table border="0" cellspacing="5" cellpadding="5">
                                            <!--<thead><h3>Lactation</h3></thead>-->
                                            <tbody>
                                            <tr class="d-print-none">
                                                <td class="text-center">Minimum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker min" name="min" id="minVaccination" type="text"></td>

                                                <td class="text-center">Maximum Date:</td>
                                                <td class="text-center"><input autocomplete="off" class="datepicker max" name="max" id="maxVaccination" type="text"></td>

                                                <input type="hidden" name="id" value="0001/">

                                                <td class="text-center"><input data-type="vaccination" class="btn btn-success submit-button" type="submit" name="Submit"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table id="dewormingTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <td class="text-center">Date</td>
                                            <td class="text-center">Vaccine Name</td>
                                            <td class="text-center">Cost</td>
                                            <td class="text-center">Comment</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->


                    </div>

                </div>
                <!-- Tab Content Starts-->
            </div>
            <!-- Card Body end-->
        </div>
    </div>
</div>
<!--End Main Row--></div>
<!--         //////////////////////////// -->





</div>
</div>
