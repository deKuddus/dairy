
<div class="content">
    <div class="printarea">
        <div class="d-none d-print-block col-10 text-center mx-auto">
            <h4 class="font-weight-bold"> Appteum Agro</h4>
            <p>Salimpur, Chittagong.</p>
        </div>


        <div class="card card-body">
            <p class="mb-0">
                <a class="font-weight-bold" href="http://dairy.octoriz.com/oct-account">Accounts</a> >
                <a class="font-weight-bold"
                href="http://dairy.octoriz.com/oct-account/2">Liabilities</a>
                >
                <a class="font-weight-bold"
                href="http://dairy.octoriz.com/oct-account/8">Current Liabilities</a>
                >
                <a class="font-weight-bold"
                href="http://dairy.octoriz.com/oct-account/9">Supplier</a>
                >
            </p>

        </div>




        <div class="card card-body">
            <h4 class="card-title mt-0">Supplier ledgers</h4>
            <ul class="mb-0">
                <?php foreach ($suppliers as $supplier) {?>
                <li><?php echo $supplier->name; ?></li>              
                <?php } ?>
            </ul>
        </div>


        <form class="card card-body" id="supplier-ladger" action="" method="POST">

            <input type="hidden" name="oct_account_id" value="9">

            <h4 class="card-title mt-0">Add Supplier ledger</h4>
            <span id="supplier_message" class="text-center"></span>

            <div class="form-group">
                <label for="">Title *</label>
                <input class="form-control" type="text" name="name" required>
                <?php echo form_error('name', '<p class="text-danger">', '</p>'); ?>
            </div>

            <div class="form-group">
                <label for="">Contact</label>
                <input class="form-control" type="text" name="contact">
                <?php echo form_error('contact', '<p class="text-danger">', '</p>'); ?>
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input class="form-control" type="text" name="address">
                <?php echo form_error('address', '<p class="text-danger">', '</p>'); ?>
            </div>

            <div class="form-group">
                <label for="">Comment</label>
                <input class="form-control" type="text" name="comment">
            </div>
            <button type="submit" class="btn btn-primary supplier">Create Ledger</button>
        </form>
    </div>
</div>


