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
    <div class="grid_6 welcome">
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
      @forelse ($pets as $pet)
        <li class="grid_4"> <img src="photos/{{$pet->photo}}" alt="{{$pet->name}}" width="139" class="img_inner fleft">
          <div class="extra_wrapper pad1">
            <p class="col2"><a href="{{route('about', $pet->id)}}">{{$pet->name}}</a></p>
            {{$pet->breed->breed}}
            <p>{{$pet->breed->characteristics}}</p>
          </div>
        </li>
      @empty
        <p>Ainda não temos nenhum pet cadastrado :(</p>
      @endforelse
    </ul>
  </div>
</div>
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_6">
      <h2>Sobre o Club Pet</h2>
      <br>
      O site do club pet vive de doações, ajude a manter o sistema no ar. Qualquer ajuda é bem vinda para que possamos continuar ajudando nossos animais.
      <br>
      <a href="{{route('contacts')}}" class="btn">Ajude-nos</a>
    </div>
    <div class="grid_4 prefix_2">
      <h2 class="ic1">Alguma pergunta?</h2>
      <img src="images/page1_img4.jpg" alt="" class="fleft img_inner">
      <div class="clear"></div>
      <p>Entre em contato através do nosso formulário de <a href="{{route('contacts')}}">contato</a>.</p>
    </div>
  </div>
</div>
@endsection