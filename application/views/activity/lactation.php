<div class="content">
    <div class="printarea">
        <div class="d-none d-print-block col-10 text-center mx-auto">
            <h4 class="font-weight-bold"> Pacific Agro</h4>
            <p>Salimpur, Chittagong.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block" id="branch-id" data-shed="1"
                        data-branch="1"><?php echo branch($branch_id);
                        ?> <!-- Branch --> Daily Activity</h4>
                        <span id="lactation_message"></span>
                        <a href="javascript:void(0);" onclick="window.print();"
                        class="btn btn-info d-inline-block pull-right mx-2">Print</a>
                    </div>
                <form action="" id="lactation-form" method="post">
                    <?php //echo  form_open('lactation/save_lactation','id="lactation-form"') ?>
                    <div class="card-body">
                        <div class="toolbar row justify-content-between">
                            <div id="category-div" class="col-sm-4 d-print-none">
                                <input type="hidden" name="branch_id" value="<?php echo $branch_id; ?>">
                                <input type="hidden" name="shed_id" value="<?php echo $shed_id; ?>">
                            </div>
                            <?php //echo form_open('activity/lactation/bydate','class="form-horizontal"'); ?>
                            <div class="col-sm-6 pull-right">
                                <div class="row align-items-center">
                                    <label class="col-2 col-form-label">Date</label>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" id="date-picker" class="form-control datepicker my-0" value="" name="date" autocomplete="off" required/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-default mt-0">Go To Date</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fill-shed-cows">
                            <table id="datatablee" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>TYPE</th>
                                        <th>WEIGHT(KGS)</th>
                                        <th>LAST DAY LACTATION (KGS)</th>
                                        <th colspan="2">CONCENTRATE (KGS)</th>
                                        <th colspan="2">HAY FEED (KGS)</th>
                                        <th colspan="2">GREEN FOODER (KGS)</th>
                                        <th>TOTAL (KGS)</th>
                                        <th>LACTATION AM (KGS)</th>
                                        <th>LACTATION PM (KGS)</th>
                                        <th>LACTATION AMOUNT (KGS)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty(cowInShadeInBranch($shed_id,$branch_id))){ foreach (cowInShadeInBranch($shed_id,$branch_id) as $cow) {?>
                                        <tr>
                                           <td>
                                            <?php echo $cow->cow_id; ?>
                                            <input type="hidden" name="cow_id[]" value="<?php echo $cow->cow_id; ?>">
                                        </td>  
                                        <td>
                                            <?php foreach ($types as $type) {
                                                if($cow->type == $type->id){
                                                    echo "<b>".strtoupper($type->name)."</b>";
                                                }
                                            }?>
                                        </td>  
                                        <td><?php echo $cow->weight; ?></td>  
                                        <td><?php echo $cow->last_lactation; ?></td>
                                        <td>
                                        <?php 
                                            global $concentrate; 
                                            $age_class = calculate_age_class($cow->gender,$cow->dob);
                                            if($age_class == "calf"){
                                                echo $c_hay = 0;
                                            }else{
                                                $food_data = calculate_food_ratio($cow->gender,$cow->dob);
                                                if(!empty($food_data)){
                                                    foreach ($food_data as $conc) {
                                                    echo $concentrate = calculate_concentrate($cow->gender,$cow->dob,$cow->weight,$conc->concentrate,$cow->last_lactation);
                                                    }
                                                }
                                            }
                                        ?>

                                        </td>  
                                        <td>
                                         <div class="form-check">
                                            <label class="big form-check-label">
                                                <input class="form-check-input checkbox-1" type="checkbox" name="concentrate[]" value="<?php echo $concentrate; ?>">
                                                <span class="form-check-sign"><span class="check"></span></span>
                                            </label>
                                        </div>
                                    </td>  
                                    <td>
                                        <?php  
                                        $age_class = calculate_age_class($cow->gender,$cow->dob);
                                        if($age_class == "calf"){
                                            echo $c_hay = 0;
                                        }else{
                                            $food_data = calculate_food_ratio($cow->gender,$cow->dob);      
                                            if(!empty($food_data)){foreach ($food_data as $_hay) {}}
                                                $c_hay = ($_hay->hay *100) /$cow->weight;
                                            echo number_format((float)$c_hay, 2, '.', '');
                                        }
                                        ?>    
                                    </td> 
                                    <td>
                                     <div class="form-check">
                                        <label class="big form-check-label ">
                                            <input class="form-check-input  checkbox-2" type="checkbox" name="hay[]" value="<?php echo $c_hay; ?>">
                                            <span class="form-check-sign"><span class="check"></span></span>
                                        </label>
                                    </div>
                                </td>  
                                <td>
                                    <?php  
                                    $age_class = calculate_age_class($cow->gender,$cow->dob);
                                    if($age_class == "calf"){
                                     echo $green_f = 0;
                                 }else{
                                    $food_data = calculate_food_ratio($cow->gender,$cow->dob);
                                    if(!empty($food_data)){foreach ($food_data as $grass) {}}
                                        $green_f = ($grass->green_fooder *100) /$cow->weight;
                                    echo number_format((float)$green_f, 2, '.', '');
                                }

                                ?>
                            </td>
                            <td>
                             <div class="form-check">
                                <label class="big form-check-label">
                                    <input class="form-check-input  checkbox-3" type="checkbox" name="green_fooder[]" value="<?php echo $green_f; ?>">
                                    <span class="form-check-sign"><span class="check"></span></span>
                                </label>
                            </div>
                        </td>  
                        <td>
                            <input type="hidden" class="t_val" name="t_val[]" value="0">
                            <span class="total-val">0.00</span>
                        </td> 

                        <td><input type="number" min="1" name="lactation_am[]" class="lactation-am" <?php $gender_c = gender($cow->gender); if($gender_c == "male") echo "readonly"; ?> style="width: 70px" value="<?php echo today_am_lactation($cow->cow_id); ?>" ></td>
                        <td><input type="number" min="1" name="lactation_pm[]" class="lactation-pm" <?php $gender_c = gender($cow->gender); if($gender_c == "male") echo "readonly"; ?> style="width: 70px" value="<?php echo today_pm_lactation($cow->cow_id); ?>"></td>
                        <td>
                           <input type="hidden" class="lactation_milk" name="lactation_am_pm[]" value="0">
                           <span id="lactation_am_pm"></span>
                       </td> 
                   </tr>
               <?php } }?>

               <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2">Total Concentrate = <span id="total-concentrate"></span> KGs
                    <input type="hidden" name="t_concen" id="t_concen">
                </td>
                <td colspan="2">Total Hay = <span id="total-hay"></span> KGs
                    <input type="hidden" name="t_hay" id="t_hay" value="0">
                </td>
                <td colspan="2">Total Fooder = <span id="total-gFooder"></span> KGs 
                    <input type="hidden" name="t_food" id="t_food" value="0">
                </td>
                <td>Total Feed = <span id="total_feed"></span> KGs 
                    <input type="hidden" name="t_feed" id="t_feed" value="0">
                </td>
                <td></td>
                <td></td>
                <td> Total Milk = <span id="total_milk"></span> KGs
                   <input type="hidden" name="t_milk" id="t_milk">
               </td>
           </tr>
           <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">
                <div class="form-check">
                    <label class="big form-check-label">
                        <input class="form-check-input " type="checkbox" id="check-toggle-concentrate" value="">
                        <span class="form-check-sign"><span class="check"></span></span>
                    </label>
                </div>
            </td>
            <td colspan="2">
                <div class="form-check">
                    <label class="big form-check-label">
                        <input class="form-check-input " type="checkbox" id="check-toggle-hay" value="">
                        <span class="form-check-sign"><span class="check"></span></span>
                    </label>
                </div>
            </td>
            <td colspan="2">
                <div class="form-check">
                    <label class="big form-check-label">
                        <input class="form-check-input " id="check-toggle-fodder" type="checkbox" value="">
                        <span class="form-check-sign"><span class="check"></span></span>
                    </label>
                </div>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
<div class="col-sm-12"> <button type="submit" class="btn btn-success col-2 pull-right save_lactation" id="saves-data">Save Data</button>
</div>
</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>