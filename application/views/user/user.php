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
            <h4 class="card-title">User Database</h4>
          </div>

          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
              <a href="<?php echo base_url('user/create'); ?>" class="btn btn-info">Add New User</a>
            </div>

            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Type</th>
                  <th>Branches Allotted</th>
                  <th>Email</th>
                  <th>Picture</th>
                  <th>Password</th>
                  <th colspan="2" class="disabled-sorting text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($user_data as  $value) {?>

                <tr>
                  <td><?php echo $value->name; ?></td>
                  <td><?php echo $value->role ?></td>
                  <td><?php echo $value->alloted_branch ?></td>
                  <td><?php echo $value->email ?></td>
                  <td style="width:60px;height:60px;"><img src="<?php echo $value->image ?>" alt="" ></img></td>
                  <td><a href="" class="btn btn-warning btn-link">Update</a></td>
                  <td class="text-right">

                    <a href="<?php echo base_url('user/edit/'.$value->id) ?>" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                  </td>
                  <td>
                    <form action="" method="POST" class="form-inline">
                     <input type="hidden" name="_method" value="DELETE">                  
                     <button id="delete-1" class="btn btn-danger btn-link btn-icon btn-sm remove" type="submit" name="action" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></button>
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