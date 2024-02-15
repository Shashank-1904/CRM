<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/toolbar.php');
?>
<h1 class="page-title" style="text-align:center;">Word</h1>
<div class="row">

  <div class="col-xl-9">
    <!-- Word Actual Content -->
    <div id="div_editor1"></div>
    <div class="content-space-1">
      <button class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover px-5"
        onclick="btngetHTMLCode();return false;">Get Html Code</button>
      <button class="btn btn-sm btn-primary btn-pill transition-3d-hover px-5"
        onclick="btnsetHTMLCode();return false;">Set Html Code</button>
      <button class="btn btn-sm btn-outline-info btn-pill transition-3d-hover px-5"
        onclick="btngetPlainText();return false;">Get Plain Text</button>
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
<script>
  var editor1 = new RichTextEditor("#div_editor1");

  editor1.setHTMLCode("<p><b>Hello</b> World</p><p>Click the button below to show this HTML code</p>");

  function btngetHTMLCode() {
    alert(editor1.getHTMLCode())
  }

  function btnsetHTMLCode() {
    editor1.setHTMLCode("<h1>editor1.setHTMLCode() sample</h1><p>You clicked the setHTMLCode button at " + new Date() + "</p>")
  }
  function btngetPlainText() {
    alert(editor1.getPlainText())
  }

</script>
<?php
include('includes/footer.php');
include('includes/script.php');

?>