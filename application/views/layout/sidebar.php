    <div class="sidebar-wrapper">
    	<div class="user">
    		<div class="photo">
    			<img src="<?php echo base_url('/') ?>assets/img/favicon.png" alt=""/>
    		</div>
    		<div class="info">
    			<a data-toggle="collapse" href="#collapseExample" class="collapsed">
    				<span>
    					Appteum Admin
    					<b class="caret"></b>
    				</span>
    			</a>

    			<div class="clearfix"></div>
    			<div class="collapse" id="collapseExample">
    				<ul class="nav">
    					

    					<li>

    						<a class="dropdown-item ts-logout" href=""
    						onclick="event.preventDefault();
    						document.getElementById('logout-form').submit();">
    						Logout
    					</a>

    					<form id="logout-form" action="" method="POST"
    					style="display: none;">
    					<input type="hidden" name="_token" value="">                            
    				</form>

    			</li>
    		</ul>
    	</div>
    </div>
</div> <!-- User Info End-->
<ul class="nav">
	<li>
		<a href="<?php echo base_url('/') ?>">
			<i class="nc-icon nc-layout-11"></i>
			<p>Demo Dashboard</p>
		</a>
	</li>

	<li>
		<a data-toggle="collapse" href="#actions">
			<i class="nc-icon nc-user-run"></i>
			<p>
				Activities
				<b class="caret"></b>
			</p>
		</a>
		<div class="collapse " id="actions">
			<ul class="nav">
				<?php foreach (branches() as $branch) {?>
					<li>
						<a href="<?php echo base_url('activity/show/').$branch->id; ?>">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal"><?php echo $branch->name; ?></span>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</li>

	<li>
		<a data-toggle="collapse" href="#cows">
			<!--<a href="#">-->
				<i><img src="<?php echo base_url() ?>assets/img/cow.svg" class="svg-icon"/></i>
				<!--<i class="nc-icon nc-bank"></i>-->
				<p>
					Cows
					<b class="caret"></b>
				</p>
			</a>

			<div class="collapse " id="cows">
				<ul class="nav">
					<li>
						<a href="<?php echo base_url('cow'); ?>">
							<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
							<span class="sidebar-normal"> All Cows </span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('cow/add') ?>">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal"> Add Cow </span>
						</a>
					</li>    
				</ul>
			</div>
		</li>


		<li>
			<a data-toggle="collapse" href="#accounts">
				<i><img src="<?php echo base_url() ?>assets/img/account.svg" class="svg-icon"/></i>
				<p>
					Accounts
					<b class="caret"></b>
				</p>
			</a>
			<div class="collapse " id="accounts">
				<ul class="nav">
					<li>
						<a href="">
							<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
							<span class="sidebar-normal">Accounts</span>
						</a>
					</li>

					<li>
						<a href="stock-report.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Stocks</span>
						</a>
					</li>

					<li>
						<a href="medicine-ladger.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Medicines</span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url('supplier/create'); ?>">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Suppliers</span>
						</a>
					</li>

					<li>
						<a href="customer-ladger.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Customers</span>
						</a>
					</li>

					<li>
						<a href="expense.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Expenses</span>
						</a>
					</li>

					<hr>

					<li>
						<a href="add-purchase.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Add Purchase</span>
						</a>
					</li>

					<li>
						<a href="add-sale.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Add Sale</span>
						</a>
					</li>

					<li>
						<a href="cash-payment.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Add Cash Payment</span>
						</a>
					</li>

					<li>
						<a href="cash-recived.php">
							<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
							<span class="sidebar-normal">Add Cash Receive</span>
						</a>
					</li>

				</ul>

			</div>
		</li>

		<li>
			<a data-toggle="collapse" href="#reports">
				<i class="nc-icon nc-chart-pie-36"></i>
				<p>
					Reports
					<b class="caret"></b>
				</p>
			</a>
			<div class="collapse" id="reports">

				<ul class="nav">

					<li>
						<a href="daily-invoice.php">
							<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
							<span class="sidebar-normal">Daily Invoice Report</span>
						</a>
					</li>

					<li>
						<a href="stock-report.php">
							<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
							<span class="sidebar-normal">Stock Value Report</span>
						</a>
					</li>

					<li>
						<a href="transaction-history.php">
							<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
							<span class="sidebar-normal">Transaction History</span>
						</a>
					</li>

					<li>
						<a href="t">
							<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
							<span class="sidebar-normal">Receipts & Payments Statement</span>
						</a>
					</li>

				</ul>

			</div>

		</li>
		<li>
			<a data-toggle="collapse" href="#all-options">
				<i class="nc-icon nc-settings"></i>
				<p>
					Settings
					<b class="caret"></b>
				</p>
			</a>
			<div class="collapse" id="all-options">

				<ul class="nav">
					<li>
						<a data-toggle="collapse" href="#sheds">
							<i class="nc-icon nc-shop"></i>
							<p>
								Sheds
								<b class="caret"></b>
							</p>
						</a>
						<div class="collapse " id="sheds">
							<ul class="nav">
								<li>
									<a href="<?php echo base_url('shed'); ?>">
										<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
										<span class="sidebar-normal"> All Sheds </span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('shed/create'); ?>">
										<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
										<span class="sidebar-normal"> Add New</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<li>
						<a data-toggle="collapse" href="#users">
							<i class="nc-icon nc-badge"></i>
							<p>
								Users
								<b class="caret"></b>
							</p>
						</a>
						<div class="collapse" id="users">
							<ul class="nav">
								<li>
									<a href="<?php echo base_url('user'); ?>">
										<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
										<span class="sidebar-normal"> All Users </span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('user/create') ?>">
										<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
										<span class="sidebar-normal"> Add New</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li>
						<a data-toggle="collapse" href="#branches">
							<i class="nc-icon nc-vector"></i>
							<p>
								Branches
								<b class="caret"></b>
							</p>
						</a>
						<div class="collapse " id="branches">
							<ul class="nav">
								<li>
									<a href="<?php echo base_url('branch'); ?>">
										<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
										<span class="sidebar-normal"> All Branches </span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('branch/create'); ?>">
										<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
										<span class="sidebar-normal"> Add New</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<li>
						<a data-toggle="collapse" href="#ratios">
							<i class="nc-icon nc-bank"></i>
							<p>
								Feed Ratios
								<b class="caret"></b>
							</p>
						</a>
						<div class="collapse " id="ratios">
							<ul class="nav">
								<li>
									<a href="<?php echo base_url('ratio'); ?>">
										<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
										<span class="sidebar-normal"> All Ratios </span>
									</a>
								</li><!-- 
								<li>
									<a href="<?php //echo base_url('ratio/create'); ?>">
										<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
										<span class="sidebar-normal"> Add Ratios</span>
									</a>
								</li> -->

							</ul>
						</div>
					</li>

					<li>
						<a data-toggle="collapse" href="#diseases">
							<i class="nc-icon nc-sound-wave"></i>
							<p>
								Diseases
								<b class="caret"></b>
							</p>
						</a>
						<div class="collapse " id="diseases">
							<ul class="nav">
								<li>
									<a href="<?php echo base_url('diseas'); ?>">
										<i class="nc-icon nc-bullet-list-67 sidebar-mini-icon"></i>
										<span class="sidebar-normal"> All Diseases </span>
									</a>
								</li>

								<li>
									<a href="<?php echo base_url('diseas/create'); ?>">
										<i class="nc-icon nc-simple-add sidebar-mini-icon"></i>
										<span class="sidebar-normal"> Add Disease</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
				</ul>
			</div>
		</li>            
	</ul>
</div>