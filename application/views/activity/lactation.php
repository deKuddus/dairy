<div class="content">
<div class="printarea">
    <div class="d-none d-print-block col-10 text-center mx-auto">
        <h4 class="font-weight-bold"> Pacific Agro</h4>
        <p>Salimpur, Chittagong.</p>
    </div>
        <form id="lactation-form" action="" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block" id="branch-id" data-shed="1"
                            data-branch="1"><?php echo branch($branch_id);
                            ?> <!-- Branch --> Daily Activity</h4>
                        <a href="javascript:void(0);" onclick="window.print();"
                           class="btn btn-info d-inline-block pull-right mx-2">Print</a>
                    </div>
                    <div class="card-body">
                        <div class="toolbar row justify-content-between">
                            <div id="category-div" class="col-sm-4 d-print-none">
                                <div class="row align-items-center">
                                    <label class="col-sm-2 col-form-label">Shed</label>
                                    <div class="col-sm-6">
                                            <select class="selectpicker" data-size="4"data-style="btn btn-success btn-block" name="shed_id" id="shed-options"required>
                                            <option  value>Choose Shed</option>
                                            <?php foreach (shade_in_branch($branch_id) as $shed) {?>
                                                <option value="<?php echo $shed->id; ?>"><?php echo $shed->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 pull-right">
                                <div class="row align-items-center">
                                    <label class="col-2 col-form-label">Date</label>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" id="date-picker" class="form-control datepicker my-0" value="03/08/2019" name="date" autocomplete="off" required/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button id="date-button" class="btn btn-default mt-0">Go To Date</button>
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
                                    <?php foreach (cowInShadeInBranch($shed_id,$branch_id) as $cow) {?>
                                    <tr>
                                         <td><?php echo $cow->cow_id; ?></td>  
                                         <td>
                                            <?php foreach ($types as $type) {
                                                if($cow->type == $type->id){
                                                    echo $type->name;
                                                }
                                            }?>
                                         </td>  
                                         <td>44</td>  
                                         <td>0</td>
                                         <td>0.60</td>  
                                         <td>
                                           <div class="form-check">
                                                <label class="big form-check-label">
                                                    <input class="form-check-input checkbox-1" type="checkbox" value="">
                                                    <span class="form-check-sign"><span class="check"></span></span>
                                                </label>
                                            </div>
                                         </td>  
                                         <td>0.60</td> 
                                         <td>
                                           <div class="form-check">
                                                <label class="big form-check-label ">
                                                    <input class="form-check-input  checkbox-2" type="checkbox" value="">
                                                    <span class="form-check-sign"><span class="check"></span></span>
                                                </label>
                                            </div>
                                         </td>  
                                         <td>0.60</td>
                                         <td>
                                           <div class="form-check">
                                                <label class="big form-check-label">
                                                    <input class="form-check-input  checkbox-3" type="checkbox" value="">
                                                    <span class="form-check-sign"><span class="check"></span></span>
                                                </label>
                                            </div>
                                         </td>  
                                         <td>0.60</td> 
                                         <td><input type="text" style="width: 70px"></td>
                                         <td><input type="text" style="width: 70px"></td>
                                         <td>0</td> 
                                    </tr>
                                <?php } ?>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2">Total Concentrate = 0.00 KGs</td>
                                        <td colspan="2">Total Hay = 0.00 KGs</td>
                                        <td colspan="2">Total Fooder = 0.00 KGs</td>
                                        <td>Total Feed = 0.00 KGs</td>
                                        <td></td>
                                        <td></td>
                                        <td> Total Milk = 0 KGs </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2">
                                            <div class="form-check">
                                                <label class="big form-check-label">
                                                    <input class="form-check-input " type="checkbox" id="check-toggle-concentrate" value="2">
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
                        <div class="col-sm-12"> <button type="submit" class="btn btn-success col-2 pull-right" id="saves-data">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>