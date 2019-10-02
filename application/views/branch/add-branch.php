<div class="content">
<div class="printarea">
    <div class="d-none d-print-block col-10 text-center mx-auto">
        <h4 class="font-weight-bold"> Appteum Agro</h4>
        <p>Salimpur, Chittagong.</p>
    </div>
    <script src="<?php echo base_url() ?>assets/js/country.js"></script>
<div class="row">
    <div class="col-md-12">
        <?php echo form_open_multipart('branch/store','class="form-horizontal" id="addBranch"'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Branch</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Branch Name</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name"  />
                                <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code>*</code>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Address Line 1</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="address_line_1"  />
                                 <?php echo form_error('address_line_1', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code>*</code>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Address Line 2</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="address_line_2" value=" " />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <select class="form-control" name="country" id="country" ></select>
                                 <?php echo form_error('country', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code>*</code>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">State | City</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <select class="form-control" name="state" id="state" ></select>
                                 <?php echo form_error('state', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="city"  placeholder="City"/>
                                 <?php echo form_error('city', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code>!* | *</code>
                        </div>
                    </div>
                    
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="number" class="form-control" id="contact" name="contact" />
                                 <?php echo form_error('contact', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code>*</code>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            
                        </div>
                        <div class="col-sm-8">
                            <button class="btn btn-default" type="submit">Save</button>
                        </div>
                        
                    </div>
                    <script>
                        populateCountries("country", "state");
                    </script>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
