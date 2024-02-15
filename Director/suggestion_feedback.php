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
                    <h4>Suggestion and Feedback form</h4>
                    <p class="f-m-light mt-1">
                        Please make sure fill all the filed before click on next button.</p>
                  </div>
                  <div class="card-body custom-input">
                    <form class="form-wizard" id="regForm" action="#" method="POST">
                      <div class="tab">
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter your name" required="required">
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="student-email-wizard">Email<span class="txt-danger">*</span></label>
                            <input class="form-control" id="student-email-wizard" type="email" required="" placeholder="Mofi@gmail.com">
                          </div>
                          <div class="col-12">
                            <label class="col-sm-12 form-label" for="password-wizard">Password<span class="txt-danger">*</span></label>
                            <input class="form-control" id="password-wizard" type="password" placeholder="Enter password" required="">
                          </div>
                          <div class="col-12">
                            <label class="col-sm-12 form-label" for="confirmpassowrd">Confirm Password<span class="txt-danger">*</span></label>
                            <input class="form-control" id="confirmpassowrd" type="password" placeholder="Enter confirm password" required="">
                          </div>
                        </div>
                      </div>
                      <div class="tab">
                        <div class="row g-3 avatar-upload">
                          <div class="col-12">
                            <div>
                              <div class="avatar-edit">
                                <input id="imageUpload" type="file" accept=".png, .jpg, .jpeg">
                                <label for="imageUpload"></label>
                              </div>
                              <div class="avatar-preview">
                                <div id="image"></div>
                              </div>
                            </div>
                            <h6>Add Profile</h6>
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="exampleFormControlInput1">Portfolio URL</label>
                            <input class="form-control" id="exampleFormControlInput1" type="url" placeholder="https://Mofi">
                          </div>
                          <div class="col-12"> 
                            <label class="form-label" for="projectDescription">Project Description</label>
                            <textarea class="form-control" id="projectDescription" rows="2"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="tab">
                        <h5 class="mb-2">Social Links </h5>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="twitterControlInput">Twitter</label>
                            <input class="form-control" id="twitterControlInput" type="url" placeholder="https://twitter.com">
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="githubControlInput">Github</label>
                            <input class="form-control" id="githubControlInput" type="url" placeholder="https:/github.com">
                          </div>
                          <div class="col-12"> 
                            <div class="input-group">
                              <input class="form-control" id="inputGroupFile04" type="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                              <button class="btn btn-outline-secondary" id="inputGroupFileAddon04" type="button">Submit</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <select class="form-select" aria-label="Default select example">
                              <option selected="">Positions</option>
                              <option value="1">Web Designer</option>
                              <option value="2">Software Engineer</option>
                              <option value="3">UI/UX Designer </option>
                              <option value="3">Web Developer</option>
                            </select>
                          </div>
                          <div class="col-12"> 
                            <label class="form-label" for="quationsTextarea">Why do you want to take this position?</label>
                            <textarea class="form-control" id="quationsTextarea" rows="2"></textarea>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="text-end pt-3">
                          <button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
                          <button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
                        </div>
                      </div>
                      <!-- Circles which indicates the steps of the form:-->
                      <div class="text-center"><span class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span></div>
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