<div class="canvas-wrap">
  <div class="menuToggle">
    <img src="@asset('images/menu.png')" alt="Menu">
  </div>
  <div class="menu hidden">
    <span class="menu-exit">X</span>
    <div class="menu-content">
      <div class="menu-content-contact">
        <img src="@asset('images/logo-dark.png')" alt="DK Development od.">
        <h4>O.D. DK Development</h4>
        {{-- <p class="intro">O.D. DK Development</p> --}}
        <p class="sub">web and mobile application development services</p>
        <p><strong>vl. Denin Korjenić</strong></p>
        <ul>
          <li>
            <span>Radićeva 4</span>
          </li>
          <li>
            <span>71000 Sarajevo</span>
          </li>
          <li>
            <span>Bosna i Hercegovina</span>
          </li>
          <li>
            <span>+387 (0)63 999-686</span>
          </li>
          <li>
            <span>info@dkdevelopment.io</span>
          </li>
        </ul>
      </div>
      <div class="right">
        {!! do_shortcode('[contact-form-7 id="4" title="Contact"]') !!}
      </div>
    </div>
  </div>
  <div class="canvas-bg">
    <div id="scene">
      <div data-depth="0.2" class="canvas-info">
        <p class="canvas-info-content">+387 (0)63 999-686<br><a href="mailto:info@dkdevelopment.io">info@dkdevelopment.io</a></p>
      </div>
      <div data-depth="0.3" class="canvas-content">
          <div class="logo">
            <img src="@asset('images/logo-dk.png')" alt="" class="logo-dk">
            <img src="@asset('images/logo-left.png')" alt="" class="logo-left">
            <img src="@asset('images/logo-right.png')" alt="" class="logo-right">
            <img src="@asset('images/logo-development.png')" alt="" class="logo-development">
          </div>
      </div>
      <div data-depth="0.1" class="canvas-bg-main"></div>
    </div>
  </div>
  <div id="canvas" class="gradient"></div>
</div>
