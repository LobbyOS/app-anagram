<?php
$this->addScript("jquery.scrollTo.js");
$this->addScript("jquery.niceScroll.js");
$this->addStyle("game.css");
$this->addScript("game.js");
?>
<div class="contents">
  <div class="loading">
    <img src="<?php echo $this->srcURL;?>/src/image/loading.gif" />
  </div>
  <div class="controls">
    <a id="newGame">New</a>
    <a id="solveGame">Solve</a>
  </div>
  <div class="letters"></div>
  <div class="input"></div>
  <div class="submit">
    <a class='btn'>Submit</a>
    <div class='status'></div>
  </div>
  <div class="boxes">
    <div class="boxes-inner">
      <div class='section' id='sec1'></div>
    </div>
  </div>
  <audio src='<?php echo $this->srcURL;?>/src/audio/wrong.mp3' id='wrong'></audio>
  <audio src='<?php echo $this->srcURL;?>/src/audio/correct.mp3' id='correct'></audio>
  <audio src='<?php echo $this->srcURL;?>/src/audio/select.mp3' id='select'></audio>
</div>
