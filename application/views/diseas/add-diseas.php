

<div class="content">
<div class="printarea">
    <div class="d-none d-print-block col-10 text-center mx-auto">
        <h4 class="font-weight-bold"> Appteum Agro</h4>
        <p>Salimpur, Chittagong.</p>
    </div>
    
<div class="row">
    <div class="col-md-12">
       <?php echo form_open_multipart('diseas/store','class="form-horizontal" id="addDiseas"'); ?>
                   <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New Disease Data</h4>
                </div>
                
                <div class="card-body">
 
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Disease Name</label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control" name="name" value="" required="true" />
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code>*</code>
                        </div>
                    </div>
 
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Disease Type</label>
                        <div class="col-sm-6">
                            <select class="selectpicker" data-style="btn btn-success btn-block" data-size="4" name="type" required="true"> 
                                <option class="bs-title-option" value>Choose One</option>
                                <?php foreach ($types as  $type) {?>
                                    <option value="<?php echo $type->id ?>"><?php echo $type->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code></code>
                        </div>
                    </div>
 
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control" name="comment" value="" />
                            </div>
                        </div>
                        <div class="col-sm-2 label-on-right">
                            <code></code>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-2">
                            
                        </div>
                        <div class="col-sm-8">
                            <button class="btn btn-default" type="submit">Save</button>
                        </div>
                        
                    </div>
                     
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
