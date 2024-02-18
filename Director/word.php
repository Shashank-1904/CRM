<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/toolbar.php');
?>
<h1 class="page-title" style="text-align:center;">Word</h1>
<div class="row">

  <div class="col-xl-9">
    <!-- Word Actual Content -->
    <div id="toolbar-container">
      <span class="ql-formats">
        <select class="ql-font"></select>
        <select class="ql-size"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-bold"></button>
        <button class="ql-italic"></button>
        <button class="ql-underline"></button>
        <button class="ql-strike"></button>
      </span>
      <span class="ql-formats">
        <select class="ql-color"></select>
        <select class="ql-background"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-script" value="sub"></button>
        <button class="ql-script" value="super"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-header" value="1"></button>
        <button class="ql-header" value="2"></button>
        <button class="ql-blockquote"></button>
        <button class="ql-code-block"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-list" value="ordered"></button>
        <button class="ql-list" value="bullet"></button>
        <button class="ql-indent" value="-1"></button>
        <button class="ql-indent" value="+1"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-direction" value="rtl"></button>
        <select class="ql-align"></select>
      </span>
      <span class="ql-formats">
        <button class="ql-link"></button>
        <button class="ql-image"></button>
        <button class="ql-video"></button>
        <button class="ql-formula"></button>
      </span>
      <span class="ql-formats">
        <button class="ql-clean"></button>
      </span>
    </div>
    <div id="editor">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
<script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
<script>
  const quill = new Quill('#editor', {
    modules: {
      syntax: true,
      toolbar: '#toolbar-container',
    },
    placeholder: 'Compose an epic...',
    theme: 'snow',
  });
</script>
<?php
include('includes/footer.php');
include('includes/script.php');

?>