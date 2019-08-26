<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
    {!! $logo !!}
	</a>
	<button class="mobile-menu-opener">Menu</button>
    <nav class="nav-primary">
		<button class="mobile-menu-closer">Close menu</button>
      @if (has_nav_menu('primary_navigation'))
        {!! bem_menu('primary_navigation', 'nav') !!}
      @endif
      @if (has_nav_menu('secondary_navigation'))
        {!! bem_menu('secondary_navigation', 'nav', 'nav--small') !!}
      @endif
    </nav>
  </div>
</header>
