<div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
   <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a href="#" class="navbar-brand">Slidefolio</a>
  </div>
  <div class="collapse navbar-collapse" id="mobilemenu">

	  <ul class="nav navbar-nav navbar-right text-center">
      @can('admin',App\User::class)
    <li><a href="{{route('home')}}"><i class="service-icon fa fa-home"></i>&nbsp;Admin</a></li>
      @endcan
      
      @if (Auth::check())
                       <li class="section-btn">
                         <a class="" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                       </li>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                   @else
 <li><a href="{{route('login')}}"><i class="service-icon fa fa-home"></i>&nbsp;login</a></li>
      <li><a href="{{route('register')}}"><i class="service-icon fa fa-home"></i>&nbsp;register</a></li>
                   @endif

   
	    <li><a href="#top"><i class="service-icon fa fa-home"></i>&nbsp;Home</a></li>
        <li><a href="#about"><i class="service-icon fa fa-info"></i>&nbsp;About</a></li>
        <li><a href="#services"><i class="service-icon fa fa-laptop"></i>&nbsp;Services</a></li>
        <li><a href="#portfolio"><i class="service-icon fa fa-camera"></i>&nbsp;Portfolio</a></li>
        <li><a href="#contact"><i class="service-icon fa fa-envelope"></i>&nbsp;Contact</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>