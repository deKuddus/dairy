<div class="content">
    <div class="printarea">
        <div class="d-none d-print-block col-10 text-center mx-auto">
            <h4 class="font-weight-bold"> Appteum Agro</h4>
            <p>Salimpur, Chittagong.</p>
        </div>
         
        <div class="card">
            <div class="row col-md-12">
                <div class="col-md-8 mx-auto"><h4 class="text-center"><?php echo branch($branch_id); ?> - <?php echo shed($shed_id); ?> Activities</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-danger">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#weight" data-toggle="tab">Add Weighing Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sickness" data-toggle="tab">Add Sickness Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#heating" data-toggle="tab">Add Heating Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pregnancy" data-toggle="tab">Add Pregnancy Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#deworming" data-toggle="tab">Add Deworming Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#vaccination" data-toggle="tab">Add Vaccination Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#treatment" data-toggle="tab">Add Treatment Data</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-tabs-navigation">
                            <span id="weighing_message"></span>
                            <span id="sickness_message"></span>
                            <span id="heating_message"></span>
                            <span id="pregnancy_message"></span>
                            <span id="deworming_message"></span>
                            <span id="vaccination_message"></span>
                            <span id="treatment_message"></span>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="weight">
                                <form action="" id="weighing-form" class="form-horizontal"
                                method="POST">
                                    <div class="row">
                                        <label class="big col-sm-2 col-form-label">Select Date</label>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input autocomplete="off" class="form-control datepicker" type="text"name="date" placeholder="Select a date (DD/MM/YYYY)" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <label class="big form-check-label">
                                                            <input class="form-check-input check-all" type="checkbox" value="1">
                                                            <span class="form-check-sign"><span class="check"></span></span>
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Cow Id</th>
                                                <th>Cow Weight (Kgs)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($cows as $cow) {?>
                                            
                                            <tr>
                                                <td class="td-actions text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input enable-row" type="checkbox" name="cow_id[]"value="<?php echo $cow->cow_id; ?>">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php echo $cow->cow_id; ?>
                                                </td>
                                                <td>
                                                    <input type="number" min="1" max="999" class="form-control"name="weight[]"placeholder="Enter Weight (Kgs)" required>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-success weighing" type="submit">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="sickness">
                                <form action="" id="sickness-form" class="form-horizontal" method="POST">
                                    <div class="row">
                                        <label class="big col-sm-2 col-form-label">Select Date</label>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input autocomplete="off" class="form-control datepicker" type="text" name="date" placeholder="Select a date (DD/MM/YYYY)" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <label class="big form-check-label">
                                                            <input class="form-check-input check-all" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Cow Id</th>
                                                <th>Health Status</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($cows as $cow) {?>
                                            <tr>
                                                <td class="td-actions text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input enable-row" type="checkbox"  name="cow_id[]" value="<?php echo $cow->cow_id ?>">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php echo $cow->cow_id ?>
                                                </td>
                                                <td>
                                                    <select class="selectpicker"  data-style="btn btn-success btn-block" name="isSick[]" id="sickness-status" required>
                                                        <option class="bs-title-option" value>Choose</option>
                                                        <option value="0">Healthy</option>
                                                        <option value="1">Sick</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="description[]" autocomplete="off"  placeholder="Enter description" required>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-success sickness" type="submit">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="heating">
                                <form action="" id="heating-form" class="form-horizontal" method="POST">
                                    <div class="row">
                                        <label class="big col-sm-2 col-form-label">Select Date</label>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input autocomplete="off" class="form-control datepicker" type="text"  name="date" placeholder="Select a date (DD/MM/YYYY)" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <label class="big form-check-label">
                                                            <input class="form-check-input check-all" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Cow Id</th>
                                                <th>Heating Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($cows as $cow) {?>
                                            <tr>
                                                <td class="td-actions text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input enable-row" type="checkbox" name="cow_id[]"  value="<?php echo $cow->cow_id; ?>">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    0001
                                                </td>
                                                <td>
                                                    <select class="selectpicker" data-size="4"data-style="btn btn-success btn-block"  name="inHeat[]" id="heating-status"required>
                                                        <option class="bs-title-option" value>Choose</option>
                                                        <option value="0">Not Heating</option>
                                                        <option value="1">Heating</option>
                                                    </select>
                                                </td>
                                            </tr> 
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-right">

                                            <button class="btn btn-success heating" type="submit">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="pregnancy">
                                <form action="" id="pregnancy-form" class="form-horizontal" method="POST">
                                    <div class="row">
                                        <label class="big col-sm-2 col-form-label">Select Date</label>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input autocomplete="off" class="form-control datepicker" type="text"  name="date" placeholder="Select a date (DD/MM/YYYY)" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <label class="big form-check-label">
                                                            <input class="form-check-input check-all" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Cow Id</th>
                                                <th>Pregnant Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                        <?php foreach ($cows as $cow) {?>                           
                                            <tr>
                                                <td class="td-actions text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input enable-row" type="checkbox" name="cow_id[]" value="<?php echo $cow->cow_id; ?>">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php echo $cow->cow_id; ?>
                                                </td>
                                                <td>
                                                    <select class="selectpicker" data-size="4"
                                                            data-style="btn btn-success btn-block"name="isPregnant[]" id="pregnancy-status" required>
                                                        <option class="bs-title-option" value>Choose</option>
                                                        <option value="0">Not Pregnant</option>
                                                        <option value="1">Pregnant</option>
                                                    </select>
                                                </td>
                                            </tr> 
                                            <?php } ?>                                   
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-success" type="submit">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="deworming">
                                <form action="" id="deworming-form" class="form-horizontal"
                                      method="POST">
                                    <div class="row">
                                        <label class="big col-sm-2 col-form-label">Select Date</label>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input autocomplete="off" class="form-control datepicker" type="text" name="date" placeholder="Select a date (DD/MM/YYYY)" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <label class="big form-check-label">
                                                            <input class="form-check-input check-all" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                          <span class="check"></span>
                                                      </span>
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Cow Id</th>
                                                <th>Medicine Name</th>
                                                <th>Quantity</th>
                                                <th>Comment (Optional)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($cows as $cow) {?>
                                            <tr data-id="1">
                                                <td class="td-actions text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input enable-row" type="checkbox" name="cow_id[]" value="<?php echo $cow->cow_id; ?>">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php echo $cow->cow_id; ?>
                                                </td>
                                                <td>
                                                    <!-- <input type="hidden" name="medicine_id[]" required>
                                                    <input type="hidden" name="medicine_name_val[]"required> -->
                                                    <table width="100%">
                                                        <tr>
                                                            <td class="border-0 p-0">
                                                                <input type="text" class="form-control medicine-name"name="medicine_name[]" id="medicine_name" autocomplete="off"placeholder="Enter medicine name" required>
                                                                <input type="hidden" class="form-control mak" name="medicine_id[]" required>
                                                            </td>
                                                            <td class="border-0 p-0">
                                                                <button class="btn btn-sm btn-danger btn-reset" type="button">Reset
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control"name="deworming_quantity[]" autocomplete="off" placeholder="Enter quantity" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="comment[]" autocomplete="off"  placeholder="Enter comment (Optional)">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-success deworming" type="submit">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="vaccination">
                                <form action="" id="vaccination-form" class="form-horizontal"  method="POST">
                                    <div class="row">
                                        <label class="big col-sm-2 col-form-label">Select Date</label>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input autocomplete="off" class="form-control datepicker" type="text" name="date" placeholder="Select a date (DD/MM/YYYY)" required/>
                                            </div>

                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <label class="big form-check-label">
                                                            <input class="form-check-input check-all" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Cow Id</th>
                                                <th>Vaccine Name</th>
                                                <th>Quantity</th>
                                                <th>Comment (Optional)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($cows as $cow) {?>
                                           <tr data-id="1">
                                                <td class="td-actions text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input enable-row" type="checkbox"name="cow_id[]"value="<?php echo $cow->cow_id; ?>">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php echo $cow->cow_id; ?>
                                                </td>
                                                <td>
                                                    <!-- 
                                                    <input type="hidden" name="medicine_name_val[]"
                                                           required> -->
                                                    <table width="100%">
                                                        <tr>
                                                            <td class="border-0 p-0">
                                                                <input type="text" class="form-control medicine-name" name="medicine_name[]"autocomplete="off"placeholder="Enter vaccine name" required>
                                                                <input type="hidden" class="form-control mak" name="medicine_id[]" required>
                                                            </td>
                                                            <td class="border-0 p-0">
                                                                <button class="btn btn-sm btn-danger btn-reset" type="button">Reset
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control"name="deworming_quantity[]"autocomplete="off"placeholder="Enter quantity" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"name="comment[]" autocomplete="off"placeholder="Enter comment (Optional)">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-success" type="submit">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="treatment">
                                <form action="" id="treatment-form" class="form-horizontal"  method="POST">
                                    <div class="row">
                                        <label class="big col-sm-2 col-form-label">Select Date</label>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input autocomplete="off" class="form-control datepicker" type="text" name="date" placeholder="Select a date (DD/MM/YYYY)" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <label class="big form-check-label">
                                                            <input class="form-check-input check-all" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Cow Id</th>
                                                <th>Disease Name</th>
                                                <th>Tests Taken<br>(Optional)</th>
                                                <th>Medicines<br>(Optional)</th>
                                                <th>Quantity<br>(Optional)</th>
                                                <th>Dr. Name<br>(Optional)</th>
                                                <th>Dr. Contact<br>(Optional)</th>
                                                <th>Dr. Visit</th>
                                                
                                                <th>Remarks (Optional)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($cows as $cow) {?>
                                            <tr data-id="1">
                                                <td class="td-actions text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input enable-row" type="checkbox"name="cow_id[]"value="<?php echo $cow->cow_id; ?>">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                   <?php echo $cow->cow_id; ?>
                                                </td>
                                                <td>
                                                    <select class="selectpicker" data-size="4"data-style="btn btn-success btn-block" name="disease_id[]" id="treatment-status"required>
                                                        <option class="bs-title-option" value>Choose</option>
                                                        <?php foreach (diseases() as $diseases) {?>
                                                            <option value="<?php echo $diseases->id; ?>"><?php echo $diseases->name; ?></option>
                                                        <?php } ?>
                                                </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"name="tests[]"autocomplete="off"placeholder="Enter tests (Optional)">
                                                </td>
                                                <td>
                                                    <!-- <input type="hidden" name="medicine_id[]">
                                                    <input type="hidden" name="medicine_name_val[]"> -->
                                                    <table width="100%">
                                                        <tr>
                                                            <td class="border-0 p-0">
                                                                <input type="text" class="form-control medicine-name" name="medicine_name[]" autocomplete="off"  placeholder="Enter medicine name">
                                                                <input type="hidden" class="mak" name="medicine_id[]">
                                                            </td>
                                                            <td class="border-0 p-0">
                                                                <button class="btn btn-sm btn-danger btn-reset ml-2"type="button">Reset
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control"name="medicine_quantity[]" autocomplete="off" placeholder="Enter quantity">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="doctor_name[]" autocomplete="off" placeholder="Enter doctor name (Optional)">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="doctor_contact[]" autocomplete="off"placeholder="Enter doctor contact (Optional)">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control"name="doctor_visit[]"autocomplete="off"placeholder="Enter doctor visit" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control"name="remarks[]" autocomplete="off"placeholder="Enter remarks (Optional)">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-success" type="submit">Save Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>