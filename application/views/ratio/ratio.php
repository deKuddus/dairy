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
          <h4 class="card-title">Ratios Database</h4>
        </div>
        <div class="card-body">
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Cow Type</th>
                <th>Weight to Hay</th>
                <th>Weight to Green Fodder</th>
                <th>Weight to Concentrate</th>
                <th>Lactation to Concentrate</th>
                <th colspan="3" class="disabled-sorting text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ratios as $ratio) {?>
              <tr>
                <td><?php echo $ratio->cow_type; ?></td>
                <td><?php echo $ratio->hay; ?>%</td>
                <td><?php echo $ratio->green_fooder; ?>%</td>
                <td><?php echo $ratio->concentrate; ?>%</td>
                <td><?php echo $ratio->lactation_concentrate; ?>%</td>
                <td class="text-right">
                  <a href="<?php echo base_url('ratio/edit/'.$ratio->id) ?>" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
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
