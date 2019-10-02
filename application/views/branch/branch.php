

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
          <h4 class="card-title">Branch Database</h4>
        </div>
        <div class="card-body">
          <div class="toolbar">
          <!--        Here you can write extra buttons/actions for the toolbar              -->
            <a href="<?php echo base_url('branch/create') ?>" class="btn btn-info">Add New Branch</a>
          </div>
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th colspan="2" class="disabled-sorting text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($branches as  $value) { ?>
            <tr>
                <td><?php echo $value->name; ?></td>
                <td><?php echo $value->address_line_1; ?></td>
                <td><?php echo $value->contact; ?></td>
                <td class="text-right">
                  <a href="<?php echo base_url('branch/edit/'.$value->id) ?>" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                </td>
                <td>
                   <a href="<?php echo base_url('branch/delete/'.$value->id) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-link btn-icon btn-sm remove"> <i class="fa fa-times"></i></a>
                  </form>
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

