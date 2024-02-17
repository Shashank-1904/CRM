<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/toolbar.php');
?>
<h1 class="page-title" style="text-align:center;">File Manager</h1>
<div class="row">
    
          <div class="col-xl-9">
              <iframe src="https://cc.creativeitservicess.com/index.php/login" height="500" width="300" frameborder="0"></iframe>
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
include('includes/footer.php');
include('includes/script.php');

?>