<?php
include('header.php');
include('sidebar.php');
include('toolbar.php');
?>

      <div class="row mt-5">
          <div class="col-xl-9">
            <div class="row">
              <div class="col-xl-12 col-md-12 proorder-md-1">  
                <div class="row"> 
                  <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2>42,954</h2>
                            <p class="mb-0 text-truncate"> Total Students</p>
                            <div class="d-flex student-arrow text-truncate">
                              <p class="mb-0 up-arrow bg-light-danger"><i class="icon-arrow-down font-danger"></i></p><span class="f-w-500 font-danger">- 17.06%</span>than last 6 Month
                            </div>
                          </div>
                          <div class="flex-shrink-0"><img src="../assets/images/dashboard-4/icon/student.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-2">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2>659</h2>
                            <p class="mb-0 text-truncate"> Total Teachers</p>
                            <div class="d-flex student-arrow text-truncate">
                              <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+27.02%</span>than last 4 Month
                            </div>
                          </div>
                          <div class="flex-shrink-0"><img src="../assets/images/dashboard-4/icon/teacher.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-3">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2>984</h2>
                            <p class="mb-0 text-truncate"> Events</p>
                            <div class="d-flex student-arrow text-truncate">
                              <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                            </div>
                          </div>
                          <div class="flex-shrink-0"><img src="../assets/images/dashboard-4/icon/calendar.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-4">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2>1,984</h2>
                            <p class="mb-0 text-truncate"> Invoice Status</p>
                            <div class="d-flex student-arrow text-truncate">
                              <p class="mb-0 up-arrow bg-light-danger"><i class="icon-arrow-down font-danger"></i></p><span class="f-w-500 font-danger">- 15.02%</span>than last 5 Month
                            </div>
                          </div>
                          <div class="flex-shrink-0"><img src="../assets/images/dashboard-4/icon/invoice.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
<?php
include('footer.php');
include('script.php');

?>