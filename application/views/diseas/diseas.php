
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
          <h4 class="card-title">Disease Database</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
          <!--        Here you can write extra buttons/actions for the toolbar              -->
            <a href="<?php echo base_url('diseas/create') ?>" class="btn btn-info">Add New Disease</a>
          </div>
          
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <!--<th>ID</th>-->
                <th>Name</th>
                <th>Type</th>
                <th>Comment</th>
                <th colspan="2" class="disabled-sorting text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($diseases as  $value) {?>
                <tr>
                <!--<td>1</td>-->
                    <td><a class="btn btn-default" href="#"><?php echo $value->name ?></a></td>
                    <td>
                      <?php 
                        foreach ($types as $type) {
                          if($value->type == $type->id){
                            echo $type->name;
                          }
                        }
                     ?>
                     </td>
                    <td><?php echo $value->comment ?></td>
                    <td class="text-right">
                      <a href="<?php echo base_url('diseas/edit/'.$value->id) ?>" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                      <a href="<?php echo base_url('diseas/delete/'.$value->id) ?>" class="btn btn-danger btn-link btn-icon btn-sm remove"onclick="return confirm('Are you sure? The data will be DELETED!')"><i class="fa fa-times"></i></a>
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
