

<div class="content">
<div class="printarea">
    <div class="d-none d-print-block col-10 text-center mx-auto">
        <h4 class="font-weight-bold"> Appteum Agro</h4>
        <p>Salimpur, Chittagong.</p>
    </div>
    <script src="js/country.js"></script>
<div class="row">
    <div class="col-md-12">
        <?php echo form_open_multipart('shed/store','class="form-horizontal" id="addBranch"'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Shed</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Shed Name</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="true" />
                                <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code>*</code>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Select Branch</label>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <select name="branch_id" id="" class="form-control" required="true">
                                    <?php foreach ($branches as $branch) {?>
                                    <option value="<?php echo $branch->id ?>"><?php echo $branch->name ?></option>
                                    <?php } ?>
                                </select>
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
