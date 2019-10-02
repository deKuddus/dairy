<div class="content">
    <div class="printarea">
        <div class="d-none d-print-block col-10 text-center mx-auto">
            <h4 class="font-weight-bold"> Appteum Agro</h4>
            <p>Salimpur, Chittagong.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($cows as $cow) {?>
                    <?php echo form_open_multipart('cow/update/'.$cow->cow_id,'class="form-horizontal" id="addCow"'); ?>  
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="border-bottom: 1px solid #f1eae0">Edit Cow Data</h4>
                            <p class="text-danger"> <?php echo isset($img_err)?$img_err:""; ?></p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Cow ID</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cow_id" name="cow_id" placeholder="cow id" value="<?php echo $cow->dob; ?>"/>
                                        <?php echo form_error('cow_id', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code>*</code>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Select Branch</label>
                                <div class="col-sm-6">
                                 <select name="branch_id" id="branch-select" class="form-group form-control"  required="true">
                                    <?php foreach ($array['branches'] as $value) {?>
                                        <option value="<?php echo $value->id ?>"
                                            <?php echo $value->id == $cow->branch_id?"selected":""  ?>
                                            ><?php echo $value->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('branch_id', '<p class="text-danger">', '</p>'); ?>
                                    <?php echo form_error('branch_id', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code>*</code>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Shed</label>
                                <div class="col-sm-6">
                                 <select class="form-control"  id="shed_id" name="shed_id" required="true"> </select>
                                 <?php echo form_error('shed_id', '<p class="text-danger">', '</p>'); ?>
                             </div>
                             <div class="col-sm-2 label-on-right">
                                <code>*</code>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label" style="margin:10px 0;">Select Gender</label>
                            <div class="col-sm-6">
                                <select name="cow_gender" id="select-gender" class="form-group form-control"  required="true">
                                    <?php foreach ($array['genders'] as $value) {?>
                                        <option value="<?php echo $value->id ?>"
                                            <?php echo $value->id == $cow->gender?"selected":""  ?>
                                            ><?php echo $value->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('cow_gender', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code>*</code>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Cow Type</label>
                                <div class="col-sm-6">
                                 <select class="form-group form-control"  id="cow-type" name="cow_type" required="true">
                                     <?php foreach ($array['types'] as $value) {?>
                                        <option value="<?php echo $value->id ?>"
                                            <?php echo $value->id == $cow->type?"selected":""  ?>
                                            ><?php echo $value->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('cow_type', '<p class="text-danger">', '</p>'); ?>

                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code>*</code>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Cow Status</label>
                                <div class="col-sm-6">
                                    <select class="form-group form-control"  name="cow_status" id="cow-status" required="true">
                                        <?php foreach ($array['status'] as $value) {?>
                                            <option value="<?php echo $value->id ?>"
                                                <?php echo $value->id == $cow->status?"selected":""  ?>
                                                ><?php echo $value->name ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php echo form_error('cow_status', '<p class="text-danger">', '</p>'); ?>

                                    </div>
                                    <div class="col-sm-2 label-on-right">
                                        <code>*</code>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label"  style="margin:10px 0;">Availablity Status</label>
                                    <div class="col-sm-6">
                                        <select class="form-group form-control"  name="availability_status" id="availability-status" required="true">
                                         <?php foreach ($array['availability'] as $value) {?>
                                            <option value="<?php echo $value->id ?>"
                                             <?php echo $value->id == $cow->availability?"selected":""  ?>
                                             ><?php echo $value->name ?></option>
                                         <?php } ?>
                                     </select>
                                     <?php echo form_error('availability_status', '<p class="text-danger">', '</p>'); ?>
                                 </div>
                                 <div class="col-sm-2 label-on-right">
                                    <code>*</code>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Cow Weight</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="cow_weight" value="<?php echo $cow->weight; ?>" required="true"/>
                                        <?php echo form_error('cow_weight', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code>*</code>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Date Of Birth</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" placeholder="mm/dd/yyyy" name="date_of_birth" required="true"/ value="<?php echo $cow->dob; ?>">
                                        <?php echo form_error('date_of_birth', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code>*</code>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox form-group">
                                        <input type="checkbox" class="custom-control-input" id="supplier-check" name="supplier_check">
                                        <label class="custom-control-label " for="supplier-check">Check this to add supplier
                                        info</label>
                                    </div>
                                </div>
                            </div>

                            <input name="supplier_id" id="supplier-id" value="" type="hidden">

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Supplier</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="supplier-name" name="supplier_name" value="<?php echo $cow->supplier; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 label-on-right pt-0">
                                    <button class="btn btn-sm btn-danger mt-1 " type="button" id="btn-reset-supplier">
                                        Reset
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Purchase Date</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" id="purchase-date" name="purchase_date" value="<?php echo $cow->purchase_date; ?>" />
                                    </div>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code></code>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Purchase Place</label>
                                <div class="col-sm-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="purchase_place" id="purchase-place" value="<?php echo $cow->purchase_place; ?>" />
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code></code>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Purchase Price</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="purchase_price" id="purchase-price" value="<?php echo $cow->purchase_price; ?>"/>
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code></code>
                            </div>
                        </div>


                        <div class="row">
                            <label  class="col-sm-2 col-form-label" style="margin:10px 0;">Cow Color</label>
                            <div class="col-sm-6">
                                <select class="form-control"  name="cow_color" >
                                    <?php foreach ($array['colors'] as $value) {?>
                                        <option value="<?php echo $value->id ?>"
                                            <?php echo $value->id == $cow->color?"selected":""  ?>
                                            ><?php echo $value->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('cow_color', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code></code>
                                </div>
                            </div>


                            <div class="row">
                                <label  class="col-sm-2 col-form-label" style="margin:10px 0;">Breeding Status</label>
                                <div class="col-sm-6">

                                 <select class="form-control"  name="breeding_status">
                                    <?php foreach ($array['breeding_status'] as  $value) {?>
                                        <option value="<?php echo $value->id ?>"
                                            <?php echo $value->id == $cow->breeding_status?"selected":""  ?>
                                            ><?php echo $value->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <?php echo form_error('breeding_status', '<p class="text-danger">', '</p>'); ?>

                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code></code>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Breeding Percentage</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="number" class="form-control" min="0" max="100" name="breeding_percentage" value="<?php echo $cow->breeding_percentage ?>"/>
                                        <?php echo form_error('breeding_percentage', '<p class="text-danger">', '</p>'); ?>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"> % </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code></code>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" style="margin:10px 0;">Vendor Contact</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="vendor_contact" value="<?php echo $cow->vendor_contact ?>"/>
                                        <?php echo form_error('vendor_contact', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2 label-on-right">
                                    <code></code>
                                </div>
                            </div>

                            <div class="row">
                                <label  class="col-sm-2 col-form-label" style="margin:10px 0;">Paternal History</label>
                                <div class="col-sm-6">

                                    <select class="form-control"  name="paternal_history">
                                        <option class="bs-title-option" value>Choose Father</option>
                                        <?php foreach (fatherCow() as  $f) {?>
                                            <option class="bs-title-option" value='<?php echo  $f->cow_id ?>'
                                                <?php if($f->cow_id == $cow->fathernal_history) echo "selected"; ?>
                                                ><?php echo $f->cow_id; ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php echo form_error('paternal_history', '<p class="text-danger">', '</p>'); ?>

                                    </div>
                                    <div class="col-sm-2 label-on-right">
                                        <code></code>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label" style="margin:10px 0;">Maternal History</label>
                                    <div class="col-sm-6">
                                        <select class="form-control"  name="maternal_history">
                                            <option class="bs-title-option" value="">Choose Mother</option>
                                            <?php foreach (motherCow() as  $m) {?>
                                                <option class="bs-title-option" value='<?php echo  $m->cow_id ?>'
                                                    <?php if($m->cow_id == $cow->maternal_history) echo "selected"; ?>
                                                    ><?php echo $m->cow_id; ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php echo form_error('maternal_history', '<p class="text-danger">', '</p>'); ?>
                                        </div>
                                        <div class="col-sm-2 label-on-right">
                                            <code></code>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label" style="margin:10px 0;">Expected Sale Price</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="expected_selling_price" value="<?php echo $cow->expected_sale_price ?>"/>
                                                <?php echo form_error('expected_selling_price', '<p class="text-danger">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 label-on-right">
                                            <code></code>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label" style="margin:10px 0;">Estimated Sale Date</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control datepicker" value="<?php echo $cow->estimated_sale_date ?>" name="estimated_sale_date"/>
                                                <?php echo form_error('estimated_sale_date', '<p class="text-danger">', '</p>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 label-on-right">
                                            <code></code>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!--<div class="col-sm-2 mx-0"></div>-->
                                        <div class="col-4 offset-1 fileinput text-center fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="<?php echo base_url() ?>assets/img/image_placeholder.jpg" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="cow_image">
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"  data-dismiss="fileinput"><i class="fa fa-times" style="font-family: FontAwesome, Bangla717, sans-serif;"></i> Remove</a>
                                            </div>
                                        </div>
                                        <div class="mx-0 col-sm-6 d-flex align-items-center">
                                            <code>type: JPG, PNG | Max Size: 5MB</code>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-8">
                                            <button class="btn btn-default" type="submit">Submit New Cow Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>