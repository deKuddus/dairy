

<div class="content">
<div class="printarea">
    <div class="d-none d-print-block col-10 text-center mx-auto">
        <h4 class="font-weight-bold"> Appteum Agro</h4>
        <p>Salimpur, Chittagong.</p>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <?php  foreach ($ratios as $ratio) {  ?>
                 <?php echo form_open_multipart('ratio/update/'.$ratio->id, 'class="form-horizontal" id="addRatio"'); ?> 
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Ratio</h4>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Weight to Hay</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"> in Percentage(s): </span>
                                        </div>
                                        <input type="number" class="form-control test" name="weight_hay_feed_amount" value="<?php echo $ratio->hay; ?>" step="0.01" min="0" max="100"/>
                                        <?php echo form_error('weight_hay_feed_amount', '<p class="text-danger">', '</p>'); ?>

                                    </div>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                    <code>*</code>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                   <?php echo $ratio->hay; ?> %
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Weight to Green Fodder</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"> in Percentage(s): </span>
                                        </div>
                                        <input type="number" class="form-control test" name="weight_green_fodder_feed_amount" value="<?php echo $ratio->green_fooder; ?>" step="0.01" min="0" max="100"/>
                                        <?php echo form_error('weight_green_fodder_feed_amount', '<p class="text-danger">', '</p>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                    <code>*</code>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                   <?php echo $ratio->green_fooder; ?> %
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Weight to Concentrate</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"> in Percentage(s): </span>
                                        </div>
                                        <input type="number" class="form-control test" name="weight_concentrate_feed_amount" value="<?php echo $ratio->concentrate; ?>" step="0.01" min="0" max="100"/>
                                        <?php echo form_error('weight_concentrate_feed_amount', '<p class="text-danger">', '</p>'); ?>


                                    </div>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                    <code>*</code>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                   <?php echo $ratio->concentrate; ?> %
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Lactation to Concentrate</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"> in Percentage(s): </span>
                                        </div>
                                        <input type="number" class="form-control test" name="lactation_concentrate_feed_amount" value="<?php echo $ratio->lactation_concentrate; ?>"  step="0.01" min="0" max="100"/>
                                        <?php echo form_error('lactation_concentrate_feed_amount', '<p class="text-danger">', '</p>'); ?>


                                    </div>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                    <code>*</code>
                                </div>
                                <div class="col-sm-1 label-on-right">
                                    <?php echo $ratio->lactation_concentrate; ?> %
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">

                                </div>
                                <div class="col-sm-8">
                                    <button class="btn btn-default" type="submit">Save Ratio</button>
                                </div>

                            </div>

                        </div> <!-- card-body end -->
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>


</div>
</div>
