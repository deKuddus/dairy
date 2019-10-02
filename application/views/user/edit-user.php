<div class="content">
    <div class="printarea">
        <div class="d-none d-print-block col-10 text-center mx-auto">
            <h4 class="font-weight-bold"> Appteum Agro</h4>
            <p>Salimpur, Chittagong.</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                 
                <?php echo validation_errors(); ?>
                <?php echo isset($result)?$result:' ';?>
                <?php echo form_open_multipart('user/store','class="form-horizontal" id="addUser"'); ?> 
                    <?php foreach ($user_data as  $value) {
                        # code...
                    } ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Update User</h4>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input autocomplete="off" type="text" class="form-control" placeholder="John Doe..." name="fullname" value="<?php echo $value->name ?>"  />
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code>*</code>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Set Admin Type</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="type" > 
                                        <option value="admin">Super</option>
                                        <option value="operational" selected="selected">Operational</option>
                                        <option value="accounts" >Accounts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code>*</code>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Alloted Branches</label>
                            <div class="col-sm-6">
                                <!--<div class="form-group">-->

                                    <div class="form-check form-check-inline">

                                       <!--</div>-->

                                       <span style="color:#9a9a9a;">|&nbsp;</span>
                                       <label class="form-check-label">

                                        <input autocomplete="off" class="form-check-input" type="checkbox" name="allotted_branches[]" value="1">

                                        <span class="form-check-sign"></span>
                                        Agrabad
                                    </label>
                                    <span style="color:#9a9a9a;">&nbsp;|</span>
                                    <span style="color:#9a9a9a;">|&nbsp;</span>
                                    <label class="form-check-label">

                                        <input autocomplete="off" class="form-check-input" type="checkbox" name="allotted_branches[]" value="2">

                                        <span class="form-check-sign"></span>
                                        Halishahar
                                    </label>
                                    <span style="color:#9a9a9a;">&nbsp;|</span>
                                    <span style="color:#9a9a9a;">|&nbsp;</span>
                                    <label class="form-check-label">

                                        <input autocomplete="off" class="form-check-input" type="checkbox" name="allotted_branches[]" value="3">

                                        <span class="form-check-sign"></span>
                                        silver dairy
                                    </label>
                                    <span style="color:#9a9a9a;">&nbsp;|</span>
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code>*for Branch Admin</code>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input autocomplete="off" type="email" class="form-control" name="email" value="<?php echo $value->email ?>"  />
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code>*</code>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input autocomplete="off" type="password" class="form-control" name="password"  />
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code>*</code>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input autocomplete="off" type="password" class="form-control" name="password_confirmation"  />
                                </div>
                            </div>
                            <div class="col-sm-2 label-on-right">
                                <code>*</code>
                            </div>
                        </div>


                        <div class="row">
                            <!--<div class="col-sm-2 mx-0"></div>-->
                            <div class="col-4 offset-1 fileinput text-center fileinput-new" data-provides="fileinput">
                              <div class="fileinput-new thumbnail">
                                <img src="img/image_placeholder.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                            <div>
                                <span class="btn btn-rose btn-round btn-file">
                                  <span class="fileinput-new">Select image</span>
                                  <span class="fileinput-exists">Change</span>
                                  <input autocomplete="off" type="hidden" value="" name="..."><input autocomplete="off" type="file" name="pic" >
                              </span>
                              <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times" style="font-family: FontAwesome, Bangla717, sans-serif;"></i> Remove</a>
                          </div>
                      </div>
                      <div class="mx-0 col-sm-6"><code>type: JPG, PNG | Max Size: 5MB</code></div>
                  </div>


                  <div class="row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-8">
                        <button class="btn btn-default" type="submit">Create User</button>
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>