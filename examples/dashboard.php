
<!DOCTYPE html>
<html lang="en">

<?php $pagename = "Smart Gate"; include "Header.php";?>
<!--------------------------------------------------------->
<div class="content">
<div class="row">
<div class="col-12">
<a href="./PerformanceTable.html"> 
<div class="card card-chart">
<div class="card-header ">
<div class="row">
<div class="col-sm-6 text-left">
<h2 class="card-title">Performance</h2></div></div></div>
<div class="card-body">
<div class="chart-area">
<canvas id="chartBig1"></canvas></div></div></div></a></div></div>
<!--------------------------------------------------------->
<div class="row">
<div class="col-lg-4">
<a href="./SecurityTable.html">
<div class="card card-chart">
<div class="card-header">
<h3 class="card-title"><i class="text-primary"></i> Security</h3></div>
<div class="card-body">
<div class="chart-area"><canvas id="chartLinePurple"></canvas></div></div></div></a> </div>
<!--------------------------------------------------------->
<div class="col-lg-4">
<div class="card card-chart">
<div class="card-header">
<h3 class="card-title"><i class="text-info"></i>Usability</h3></div>
<div class="card-body">
<div class="chart-area"><canvas id="CountryChart"></canvas></div></div></div></div>
<!--------------------------------------------------------->
<div class="col-lg-4">
<div class="card card-chart">
<div class="card-header">
<h3 class="card-title"><i class="text-success"></i> Error rate</h3></div>
<div class="card-body">
<div class="chart-area"><canvas id="chartLineGreen"></canvas></div></div></div></div></div>
<!--------------------------------------------------------->
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="card card-tasks">
<div class="card-header ">
<p class="card-category d-inline">Reports</p>
<div class="dropdown">
<button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
<i class="tim-icons icon-settings-gear-63"></i></button></div></div>
<!--------------------------------------------------------->
              <div class="card-body ">
              <div class="table-full-width table-responsive">
              <table class="table">
              <tbody>
              <tr>
                  
                  <td><div class="form-check"><label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="">
                       <span class="form-check-sign">
                       <span class="check"></span></span></label></div>
                  </td>
                  
                        <td><p class="title">Daily report (12 hours)</p>
                            <p class="text-muted">It contains the number of cases allowed to enter and the number of cases that were not allowed to enter at the time of their entry.</p>
                        </td>
                  
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task"><i class="tim-icons icon-pencil"></i></button>
                        </td></tr>
                  
                      <tr>
                          <td><div class="form-check"><label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span></span></label></div>
                          </td>
                          
                        <td><p class="title">Daily report (12 hours)</p>
                            <p class="text-muted">It contains the percentage of performance, security, and usability of the gate</p></td>
                          
                        <td class="td-actions text-right">
                             <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task"><i class="tim-icons icon-pencil"></i></button>
                        </td></tr>
                        <tr>
                        <td><div class="form-check"><label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign"><span class="check"></span></span></label></div>
                        </td>
                        <td><p class="title">Daily report (24 hours)</p>
                            <p class="text-muted">It contains the number of cases allowed to enter and the number of cases that were not allowed to enter at the time of their entry. </p>
                        </td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i></button>
                        </td></tr>
                      <tr>
                          <td><div class="form-check"><label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign"><span class="check"></span></span>
                              </label></div>
                          </td>
                        <td><p class="title">Daily report (24 hours)</p>
                             <p class="text-muted">It contains the percentage of performance, security, and usability of the gate</p>
                        </td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task"><i class="tim-icons icon-pencil"></i></button>
                        </td></tr>
                      <tr>
                        <td><div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" type="checkbox" value="">
                             <span class="form-check-sign"><span class="check"></span></span></label></div></td>
                        <td>
                          <p class="title">Daily report (24 hours)</p>
                          <p class="text-muted">ALL. </p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task"><i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign"><span class="check"></span>
                              </span></label></div></td>
                        <td>
                          <p class="title">ًWeekly report</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task"><i class="tim-icons icon-pencil"></i></button>
                        </td>
                      </tr>

                         <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign"><span class="check"></span></span></label> </div>
                        </td>
                        <td>
                          <p class="title">ًMonthly report</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>

                          <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span></span></label></div></td>
                        <td>
                          <p class="title">Annual report</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr></tbody></table></div></div></div></div>

<!--------------------------------------------------------->
<div class="col-lg-6 col-md-12">
<div class="card ">
<div class="card-header">
<h4 class="card-title">Security Guard Management</h4></div>
<div class="card-body">
<div class="table-responsive">
<table class="table tablesorter " id="">
<thead class=" text-primary">
<tr>
<th>ID</th><th>Name</th><th>Phone</th>
<th class="text-center">State</th>
<th class="text-center"></th>
</tr></thead>
<tbody>
<tr>
<td>1</td><td>Ali</td><td>05111111111</td><td class="text-center">Admin</td>
</tr>
<tr>
<td>2</td><td>Minerva Hooper</td><td>052222222222</td><td class="text-center">security guard</td>
    </tr></tbody></table></div></div></div></div></div>

    <?php include "footer.php"; ?> </div>
</html>
