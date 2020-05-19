<header id="site-header" class="type-1">
  <div class="container-fluid">
    <h1 class="header__logo-area">
      <figure class="header__logo-wrapper">
        <img class="header__logo" src="" alt="" />
      </figure>
    </h1>
    <div class="header__nav-area">
      <nav class="header__nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
      </nav>
    </div>
    <div class="header__mob-area">
      <div class="header__hamburger">
        <button class="hamburger js-nav_toggle">
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
        </button>
      </div>
    </div>
  </div>
</header>