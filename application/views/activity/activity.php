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
                    <h4 class="card-title"> 
                        <?php echo branch($branch_id); ?> Activity</h4>
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Shed Name</th>
                            <th>Branch</th>
                            <th>Total Cows</th>
                            <th class="disabled-sorting text-center">Activities</th>
                            <!--<th class="disabled-sorting text-center">Activity Lists</th>-->
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sheds as $shed) { ?>
                             <tr>
                                <td><?php echo $shed->name; ?></td>
                                <td>
                                    <?php foreach ($branches as $each_branch) {
                                        if($each_branch->id == $shed->branch_id){
                                            echo $each_branch->name;
                                        }
                                    } ?>
                                </td>
                                <td><?php 
                                        $shed_id = $shed->id;
                                        $branch_id = $shed->branch_id;
                                        cowInShade($shed_id,$branch_id);//from cow_helper.php
                                 ?></td>

                                <td class="text-center">
                                    <!--<a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i class="fa fa-heart"></i></a>-->
                                <!--<a href="http://dairy.appteum.com/activity-log/1/lactation" class="btn btn-info s d-inline-block font-weight-bold"><i class="fa fa-edit">Activity Log</i></a>-->
                                    <a href="<?php echo base_url('lactation/lactation/').$shed->id.'/'.$shed->branch_id; ?>"
                                       class="btn btn-primary  d-inline-block font-weight-bold">
                                        <i class="fa fa-edit"></i>
                                        Weight Feeding & Lactation
                                    </a>
                                     <a href="<?php echo base_url('activity/others/').$shed->id.'/'.$shed->branch_id; ?>"
                                       class="btn btn-warning  d-inline-block font-weight-bold">
                                        <i class="fa fa-edit"></i>
                                        Other Activities
                                    </a>
                                </td>
                                
                            </tr>
                        <?php } ?>
                        
                        </tbody>
                    </table>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>
</div>