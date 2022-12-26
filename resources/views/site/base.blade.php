<!DOCTYPE html>
<html lang="en">
<head>
<title>Club Pet @yield('title')</title>
<meta charset="utf-8">
<link rel="icon" href="{{asset('images/favicon.ico')}}">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

@yield('css')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.1.1.js')}}"></script>

@yield('js')

<script src="{{asset('js/superfish.js')}}"></script>
<script src="{{asset('js/jquery.equalheights.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.ui.totop.js')}}"></script>
<script>
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt=""></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="{{route('home')}}">Home</a></li>
            {{-- <li class="with_ul"><a href="{{route('about')}}">About Us</a> --}}
              {{-- <ul>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Archive</a></li>
              </ul>
            </li> --}}
            <li><a href="{{route('search')}}">Buscar Pet</a></li>
            {{-- <li><a href="{{route('blog')}}">Blog</a></li> --}}
            <li><a href="{{route('contacts')}}">Contato </a></li>
            @auth
              <li class="with_ul"><a href="{{ url("login") }}">Olá {{auth()->user()->name}}</a>
                <ul>
                  <li><a href="{{ url("profile") }}">Perfil</a></li>
                  <li><a href="{{ url("logout") }}">Sair</a></li>
                </ul>
              </li>
            @endauth
            @guest
              <li><a href="{{ url("login") }}">Entrar</a></li>
            @endguest
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
@yield('content')
<footer>
    <div class="container_12">
      <div class="grid_12">
        <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
        <p>ClubPet &copy; @php echo date('Y'); @endphp | <a href="#">Privacy Policy</a> | Design by: <a href="https://github.com/BrenoHM" target="_blank">Breno Mol</a></p>
      </div>
      <div class="clear"></div>
    </div>
  </footer>
  </body>
  </html>