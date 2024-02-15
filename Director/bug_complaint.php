<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/toolbar.php');
?>
<h1 class="page-title" style="text-align:center;">Suggestion & Feedback</h1>
<div class="row">
    
          <div class="col-xl-9">
                <div class="card height-equal">
                  <div class="card-header">
                    <h4>CRM bug Complaint</h4>
                    <p class="f-m-light mt-1">
                        Please make sure fill all the filed before click on next button.</p>
                  </div>
                  <div class="card-body custom-input">
                  <form class="row g-3">
                      <div class="col-12"> 
                        <label class="form-label" for="first-name">First name</label>
                        <input class="form-control" id="first-name" type="text" placeholder="First name" aria-label="First name" required>
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="exampleFormControlInput1">Email address</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="pesamof475@saeoil.com" required>
                      </div>
                      <div class="col-12"> 
                        <label class="col-sm-12 col-form-label" for="inputPassword2">Subject</label>
                        <input class="form-control" id="inputPassword2" type="password" required>
                      </div>
                      <div class="col-12"> 
                        <label class="form-label" for="formFile">Choose file</label>
                        <input class="form-control" id="formFile" type="file">
                      </div>
                      <div class="col-12"> 
                        <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
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