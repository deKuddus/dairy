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
          <h4 class="card-title">Shed Database</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
          <!--        Here you can write extra buttons/actions for the toolbar              -->
            <a href="<?php echo base_url('shed/create'); ?>" class="btn btn-info">Add New Shed</a>
          </div>
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Shed Name</th>
                <th>Branch</th>
                <th>Total Cows</th>
                <th colspan="3" class="disabled-sorting text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sheds as  $value) {?>
              <tr>
                <td><?php echo $value->name ?></td>
                <td>
                  <?php foreach ($branches as  $branch) {
                    if($branch->id == $value->branch_id){
                      echo $branch->name;
                    }
                  } ?>
                </td>
                <td>3</td>
                <td class="text-right">
                  <a href="<?php echo base_url('lactation/lactation-log') ?>" class="btn btn-default">Lactaton Report</a>
                </td>
                <td class="text-right">
                  <a href="<?php echo base_url('shed/edit/'.$value->id) ?>" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                  <a href="<?php echo base_url('shed/delete/'.$value->id) ?>" class="btn btn-danger btn-link btn-icon btn-sm remove" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                  </form>
                </td>
              </tr>
            <?php  } ?>
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
