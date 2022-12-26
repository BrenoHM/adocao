@extends('site.base')

@section('css')
<link rel="stylesheet" href="css/slider.css">
@endsection

@section('js')
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
  $(window).load(function () {
      $('.slider')._TMS({
          show: 0,
          pauseOnHover: false,
          prevBu: '.prev',
          nextBu: '.next',
          playBu: false,
          duration: 800,
          preset: 'fade',
          pagination: true, //'.pagination',true,'<ul></ul>'
          pagNums: false,
          slideshow: 8000,
          numStatus: false,
          banners: true,
          waitBannerAnimation: false,
          progressBar: false
      })
  });
  $(window).load(function () {
      $('.carousel1').carouFredSel({
          auto: false,
          prev: '.prev',
          next: '.next',
          width: 960,
          items: {
              visible: {
                  min: 3,
                  max: 3
              },
              height: 'auto',
              width: 300,
          },
          responsive: true,
          scroll: 1,
          mousewheel: false,
          swipe: {
              onMouse: true,
              onTouch: true
          }
      });
  });
</script>
@endsection

@section('content')
<div class="top_block">
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt="">
            <div class="banner">Eles precisam do seu <span>Amor</span> e <i>Carinho</i>
              <p>É tão fácil fazê-los felizes</p>
            </div>
          </li>
          <li><img src="images/slide1.jpg" alt="">
            <div class="banner">Eles precisam do seu <span>Amor</span> e <i>Carinho</i>
              <p>É tão fácil fazê-los felizes</p>
            </div>
          </li>
          <li><img src="images/slide2.jpg" alt="">
            <div class="banner">Eles precisam do seu <span>Amor</span> e <i>Carinho</i>
              <p>É tão fácil fazê-los felizes</p>
            </div>
          </li>
          <li><img src="images/slide3.jpg" alt="">
            <div class="banner">Eles precisam do seu <span>Amor</span> e <i>Carinho</i>
              <p>É tão fácil fazê-los felizes</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="page1_block">
  <div class="container_12">
    <div class="grid_6">
      <h2>Bem vindo ao nosso site</h2>
      <br>
      <img src="images/page1_img5.jpg" alt="" class="img_inner fleft">
      <div class="extra_wrapper style1">
        <p class="text1"><a href="{{route('search')}}">Clique aqui</a> e confira os pets que estão cadastrados em nossa base até o momento.</p>
      </div>
      <div class="clear"></div>
      Este site tem como intuito ajudar as pessoas na procura/divulgação de pets para adoção/adotar.<br>
      <a href="{{route('search')}}" class="btn">Quero buscar um Pet</a>
    </div>
    <div class="grid_5 prefix_1">
      <h2 class="ic1">Quer doar o seu pet?</h2>
      <p>Caso você deseja doar um pet, faça seu cadastro clicando no link abaixo:</p>
      <a href="{{route('dashboard')}}" class="btn">Quero doar um Pet</a>
      {{-- <ul class="list">
        <li> <span>
          <time datetime="2045-01-01">27<span>APR</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Duis posuere consectetur pellentesqe;</a>
              <time datetime="2045-01-01">April 27.03.45</time>
            </div>
            Sed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risus,placerat ut scelerisque suscipit eu ante. Nullam vitae dolor ullcper felises</div>
        </li>
        <li> <span class="cnt">
          <time datetime="2045-01-01">28<span>APR</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Kuuis posuere consectetur pellentes;</a>
              <time datetime="2045-01-01">April 28.03.45</time>
            </div>
            Eed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risulacerat ut scelerisque et suscipit eu ante. Nullam vitae dolor ullcper felises. </div>
        </li>
        <li> <span>
          <time datetime="2045-01-01">29<span>APR</span></time>
          </span>
          <div class="extra_wrapper">
            <div class="col1"><a href="#">Opuis posuere honsectetur pellentesyt;</a>
              <time datetime="2045-01-01">April 29.03.45</time>
            </div>
            Koed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risujo placerat ut scelerisque et suscipit eu ante. Ullam vitae dolor ullcper felises. </div>
        </li>
      </ul> --}}
    </div>
  </div>
</div>
<div class="content page1">
  <div class="container_12">
    <div class="grid_12"> <a href="#" class="next"></a><a href="#" class="prev"></a>
      <h2>Em destaque para adoção</h2>
    </div>
    <div class="clear"></div>
    <ul class="carousel1">
      @foreach ($pets as $pet)
        <li class="grid_4"> <img src="photos/{{$pet->photo}}" alt="{{$pet->name}}" width="139" class="img_inner fleft">
          <div class="extra_wrapper pad1">
            <p class="col2"><a href="{{route('about', $pet->id)}}">{{$pet->name}}</a></p>
            {{$pet->breed->breed}}
            <p>{{$pet->breed->characteristics}}</p>
          </div>
        </li>
      @endforeach
      {{-- <li class="grid_4"> <img src="images/carousel1_img1.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Praesent quis orcidiam viverralopr </a></p>
          Raes quis orci eget diam viverralopr con equat. Fusce sagit quam ihui hyhy kolo opirlo pulvinarhjkjo. </div>
      </li>
      <li class="grid_4"> <img src="images/carousel1_img2.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li>
      <li class="grid_4"> <img src="images/carousel1_img3.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Tyeraesent quis hojo rcieget iam iverralji.</a></p>
          Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk equat. Usce sagittis ki quam ihui hyhy opirp. </div>
      </li>
      <li class="grid_4"> <img src="images/carousel1_img4.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li>
      <li class="grid_4"> <img src="images/carousel1_img5.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li>
      <li class="grid_4"> <img src="images/carousel1_img6.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li> --}}
    </ul>
  </div>
</div>
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_6">
      <h2>Pet Care Tips </h2>
      <br>
      Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit a convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius erat luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Vivamus est quam dapibus ullamco rper imperdiet nec, euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibus. Praesent quis orci eget diam viverra consequat. Fusce sagittis. </div>
    <div class="grid_4 prefix_2">
      <h2 class="ic1">Any Question?</h2>
      <img src="images/page1_img4.jpg" alt="" class="fleft img_inner">
      <div class="extra_wrapper">
        <div class="cont"> Call Us Free: <span>+1 800 559 6580</span> </div>
      </div>
      <div class="clear"></div>
      Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Viv amus est quam dapibus ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris. </div>
  </div>
</div>
@endsection