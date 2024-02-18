<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/toolbar.php');
?>
<h1 class="page-title" style="text-align:center;">Google</h1>
<div class="row">

  <div class="col-xl-9">
    <!-- Google Actual Content -->
    <!-- Header -->
    <header>
      <nav class="navbar">
        <ul>
          <li>
            <a class="link" href="">Gmail</a>
          </li>
          <li>
            <a class="link" href="">Images</a>
          </li>
          <li>
            <div class="circle-shadow">
              <a class="menu-icon" href=""><i class="fas fa-bars"></i></a>
            </div>
          </li>
          <li>
            <div class="circle-shadow">
              <a class="user-icon" href=""><span>J</span></a>
            </div>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Content -->
    <section class="content-section">
      <div class="content-wrapper">
        <img class="logo-img" src="./images/logo.jpg" alt="Google Logo Image">
        <div class="search-bar">
          <i class="fas fa-search"></i>
          <input id="search-input" class="search-input" type="text">
          <i class="fas fa-keyboard"></i>
          <i class="fas fa-microphone"></i>
        </div>
        <div class="search-btns">
          <button class="google-search-btn">Google Search</button>
          <button class="lucky-search-btn">I'm Feeling Lucky</button>
        </div>
        <div class="language">
          <p>Google Offered in: <a href="">Maori</a></p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="footer-content upper-footer">
        <p>New Zealand</p>
      </div>
      <div class="footer-content lower-footer">
        <ul class="lower-left-footer">
          <li>
            <a href="">About</a>
          </li>
          <li>
            <a href="">Advertising</a>
          </li>
          <li>
            <a href="">Business</a>
          </li>
          <li>
            <a href="">How Search Works</a>
          </li>
        </ul>
        <ul class="lower-right-footer">
          <li>
            <a href="">Privacy</a>
          </li>
          <li>
            <a href="">Terms</a>
          </li>
          <li>
            <a href="">Settings</a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <!------------------------------------------>
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
<script>
  const searchInput = document.querySelector("#search-input");

  searchInput.addEventListener("keydown", function (event) {
    if (event.code === "Enter") {
      search();
    }
  });

  function search() {
    const input = searchInput.value;

    window.location.href = "https://www.google.com/search?q=" + input + "&rlz=1C5CHFA_enNZ948NZ948&oq=" + input + "&aqs=chrome.0.69i59l2j46i175i199i433j46i199i291i433j46j0i433j0j69i60.875j0j9&sourceid=chrome&ie=UTF-8"
  }
</script>
<?php
include('includes/footer.php');
include('includes/script.php');

?>