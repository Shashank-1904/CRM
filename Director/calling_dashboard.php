<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/toolbar.php');
?>
<h1 class="page-title" style="text-align:center;">Calling Dashboard</h1>
<div class="row">
    
          <div class="col-xl-9">
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
          <div class="col-xl-3">
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