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
                    <h4 class="card-title">Cow Database</h4>
                </div>

                <div class="card-body">

                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                        <a href="<?php echo base_url('cow/add'); ?>" class="btn btn-info">Add New Cow</a>
                        <a href="#" class="btn btn-info">Bulk Add Cow</a>


                        <a href="" class="btn btn-info pull-right">Excel <i>
                            <img src="download.svg" class="svg-button"/></i>
                        </a>
                    </div>

                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Branch</th>
                            <th>Shed</th>
                            <th>Number</th>
                            <th>Gender</th>
                            <!--<th>Date Of Birth</th>-->
                            <th>Age Class</th>
                            <!--<th>Purchased</th>-->
                            <!--<th>Breeding Status</th>-->
                            <!--<th>Breeding Percentage</th>-->
                            <th>Lactation</th>
                            <th>Heat</th>
                            <th>Pregnancy</th>
                            <th colspan="2" class="disabled-sorting text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>


                            <?php foreach ($cows as  $cow) {?>
                            <tr>
                                <td><?php echo $cow->name ?></td>
                                <td>
                                    <?php 
                                        foreach ($sheds as $shed) {
                                            if( $cow->shed_id == $shed->id) {
                                                echo $shed->name;
                                            }
                                        }
                                    ?>    
                                </td>
                                <td>
                                    <a href="<?php echo base_url('cow/details/'.$cow->cow_id); ?>" class="btn btn-outline-default"><span style="margin-top:2px;"><?php echo $cow->cow_id ?></span>
                                    </a>
                                </td>
                                <td> 
                                    <?php foreach ($genders as $gender) {
                                        if($cow->gender == $gender->id){
                                            echo $gender->name;
                                            }
                                        } ?> 
                                </td>
                                <td><?php echo calculate_age_class($cow->gender,$cow->dob); ?></td>
                                <td> <?php echo $cow->last_lactation; ?> </td>
                                <?php if(!empty($others_activity)){ foreach ($others_activity as $activity) {?>
                                    <td> <?php echo isset($activity->inHeat)?$activity->inHeat:'no'; ?> </td>
                                    <td> <?php echo isset($activity->isPregnant)?$activity->isPregnant:'no'; ?> </td>
                                <?php }}else{?>
                                    <td>no</td>
                                    <td>no</td>
                                <?php } ?>
                                <td class="text-right">
                                    <a href="<?php echo base_url('cow/edit/'.$cow->cow_id); ?>"
                                    class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                                </td>
                                <td class="text-right">
                                    <a href="<?php echo base_url('cow/delete/'.$cow->cow_id); ?>"
                                    class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="10">&nbsp;</td>
                            </tr>
                        <?php } ?>         
                        </tbody>
                    </table>
                </div>
                <div class="text-center mx-auto"></div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->

</div>
</div>
