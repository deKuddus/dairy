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
          <h4 class="card-title d-inline-block">West Shed Lactation Database</h4>
          <a href="javascript:void(0);" onclick="window.print();" class="btn btn-info d-inline-block pull-right mx-2">Print</a>
        </div>
        
        <div class="card-body">
            
          <div class="toolbar">
          <!--        Here you can write extra buttons/actions for the toolbar              -->
            <div class="row justify-content-around">
                
                <div class="col-sm-4 pull-right">
                    <div class="row align-items-center">
                      <label class="col-2 col-form-label">Start Date</label>
                        <div class="col">
                            <div class="form-group">
                                <input autocomplete="off" type="text" id="date-picker-start" class="form-control datepicker my-0" placeholder="09/09/2019" name="start_date" autocomplete="off"  />
                            </div>
                        </div>
                    </div>      
              </div>
                
                <div class="col-sm-4 pull-right">
                    <div class="row align-items-center">
                      <label class="col-2 col-form-label">End Date</label>
                        <div class="col">
                            <div class="form-group">
                                <input autocomplete="off" type="text" id="date-picker-end" class="form-control datepicker my-0" placeholder="09/10/2019" name="end_date" autocomplete="off"  />
                            </div>
                        </div>
                        
                    </div>      
              </div>
              <div class="col">
                    <button id="date-button" class="btn btn-default mt-0" >Get Report</button>
                </div>
              
            </div>
            <!--<h3>West Shed Lactation Log</h3>-->
          </div>
        
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th>Date</th>
                <th>Cow Number</th>
                <th>Amount</th>
                <th>Shed</th>
                <!--<th class="disabled-sorting">Actions</th>-->
              </tr>
            </thead>
            <tbody>
                          <tr>
                <td colspan="4" class="text-center">No logs found</td>
              </tr>
                          <tr>
                <td></td>
                
                <td class="font-weight-bold">Total</td>
                <td>0 LTRs</td>
                <td></td>
              </tr>

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