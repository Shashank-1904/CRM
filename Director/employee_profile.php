<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/toolbar.php');
?>
<h1 class="page-title" style="text-align:center;">Employee Profile</h1>
  <div class="row">
          <div class="col-xl-11">

           <!-- Modal Starts For Manual Record -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Employee Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                
                  <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="form-group mb-2">
                            <label>Name</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Enter Full Name" required />
                        </div>

                        <div class="form-group mb-2">
                            <label>Address</label>
                            <textarea name="p_addr" class="form-control" cols="30" rows="3"></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label>Contact</label>
                            <input type="text" name="p_contact" class="form-control" placeholder="Enter Your Contact No." required />
                        </div>

                        <div class="form-group mb-2">
                            <label>Gender</label>
                                <select class="form-control" name="p_gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                        </div>

                        <div class="form-group mb-2">
                            <label>Birth Date</label>
                            <input type="date" name="p_dob" class="form-control" required>
                        </div>

                        <div class="form-group mb-2">
                            <label>Blood Group</label>
                            <input type="text" name="p_bg" class="form-control" placeholder="Enter Blood Group" required />
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" name="add_employee" class="btn btn-success px-5 w-100" id="add_btn">Add Employee</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Ends -->

          <!-- Modal Starts For Excel Sheet -->

            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Drop Your Excel File of Employee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                
                  <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="form-group mb-2 mb-2">
                            <input type="file" name="p_file" class="form-control" required />
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" name="add_excelsheet" class="btn btn-success px-5 w-100" id="add_btn">Add Records</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Ends -->

            <!-- Modal Starts for Export Data -->

            <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Filter by Registered Date</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                          <form action="../handler/PatientExport.php" method="POST">
                              <div class="row">
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label>From Date</label>
                                          <input type="date" name="from_date" class="form-control" required>
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label>To Date</label>
                                          <input type="date" name="to_date" class="form-control" required>
                                      </div>
                                  </div>
                              </div>

                                <div class="text-center">
                                    <button type="submit" name="export_btn" class="btn btn-success mt-3 px-5 w-100">Download</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            <!-- Modal Ends -->

          <div class="row mb-3">
            <div class="col-3">
                <button type="button" class="btn btn-primary" id="add_mbtn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Manually Add Record</button>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary" id="add_esbtn" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fa-solid fa-plus"></i> Add Via ExcelSheet</button>
            </div>
            <div class="col-3"></div>
            <div class="col-3 text-end">
                <button type="button" class="btn btn-success" id="add_ebtn" data-bs-toggle="modal" data-bs-target="#reportModal"><i class="fa-solid fa-download"></i> Export </button>
          </div>
        </div>
          <?php if(isset($_GET['error'])){ ?> 
          <p class="error"><?php echo '<h4>' . $_GET['error'] . '</h4>'; ?> </p>
        <?php } ?>

        <?php if(isset($_GET['success'])){ ?> 
          <p class="success"><?php echo '<h4>' . $_GET['success'] . '</h4>'; ?> </p>
        <?php } ?>

        <table id="example" class="table table-striped" style="width:100%">
	        <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Salary</th>
                    <th>Join Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>    
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ABC</td>
                    <td>HR</td> 
                    <td>40000</td> 
                    <td>12/5/2000</td>
                    <td>
                        <form class="text-center" action="../handler/DownloadAdmissionForm.php" method="POST">
                            <button type="submit" name="down_btn" class="btn btn-success">Download</button>
                        </form>    
                    </td>
                    <td>
                            <button type="submit" name="delete_btn" class="btn btn-warning">Monitor</button>
                    </td>
                </tr>
            </tbody>
        </table>
          </div>
          <div class="col-xl-1">
            <div class="container-dialpad">
              <div id="output"></div>
              <div class="row-single">
                <div class="digit" id="one">1</div>
                <div class="digit" id="two">2
                  <div class="sub">ABC</div>
                </div>
                <div class="digit" id="three">3
                  <div class="sub">DEF</div>
                </div>
              </div>
              <div class="row-single">
                <div class="digit" id="four">4
                  <div class="sub">GHI</div>
                </div>
                <div class="digit" id="five">5
                  <div class="sub">JKL</div>
                </div>
                <div class="digit">6
                  <div class="sub">MNO</div>
                </div>
              </div>
              <div class="row-single">
                <div class="digit">7
                  <div class="sub">PQRS</div>
                </div>
                <div class="digit">8
                  <div class="sub">TUV</div>
                </div>
                <div class="digit">9
                  <div class="sub">WXYZ</div>
                </div>
              </div>
              <div class="row-single">
                <div class="digit">*
                </div>
                <div class="digit">0
                </div>
                <div class="digit">#
                </div>
              </div>
              <div class="botrow">
                <div class="call"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div style="background-color: red;" class="call"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
      </div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>new DataTable('#example');</script>
<?php
include('includes/footer.php');
include('includes/script.php');
?>