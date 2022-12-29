@extends('site.base')
@section('title', "| Sobre $pet->name")

@section('css')
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
@endsection

@section('content')
<div class="page1_block nb">
    <div class="container_12">

      <div class="grid_7">
        <h2>Quem sou eu?</h2>
        <br>
        <img src="{{asset('photos')}}/{{$pet->photo}}" alt="" class="img_inner i1">
        <div class="extra_wrapper">
          <p><strong>Nome:</strong> {{$pet->name}}</p>
          <p><strong>Raça:</strong> {{$pet->breed->breed}}</p>
          <p><strong>Cor:</strong> {{$pet->color}}</p>
          <p><strong>Características da Raça:</strong> {{$pet->breed->characteristics}}</p>
          <p><strong>Telefone:</strong> {{$pet->phone}}</p>
        </div>
      </div>
      
      <div class="grid_4 prefix_1">
        <h2 class="ic1">Breve História</h2>
        <p>{{$pet->description}}</p>

        <div class="clear"></div>
        <a href="https://wa.me/+55<?=str_replace(['(', ')', '-', ' '], '', $pet->phone)?>?text=Olá, gostaria de adotar o {{$pet->name}}." class="btn" target="_blank">
          Entrar em contato
        </a>

        <h2 class="ic1">Compartilhe</h2>

        <div class="btn-compartilhar">
          <a href="whatsapp://send?text=Ajude a compartilhar este pet: {{route('about', $pet->id)}}" target="_blank" title="Compartilhar no Zap">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
          </a>

          <a href="https://facebook.com/sharer/sharer.php?u={{route('about', $pet->id)}}" target="_blank" title="Compartilhar no Face">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h2 class="ic1" >Mais pets desta raça</h2>
      </div>
      <div class="clear"></div>

      @foreach($relations as $key => $relation)
        <div class="grid_4">
          <div class="pad2"> <img src="{{asset('photos')}}/{{$relation->photo}}" alt="" class="img_inner fleft i2" width="139">
            <div class="extra_wrapper">
              <div class="text2 col2">
                <a href="{{route('about', $relation->id)}}">{{$relation->name}}</a>
              </div>
              {{$relation->breed->breed}}
            </div>
            <p>{{$relation->breed->characteristics}}</p>
            <div class="clear"></div>
          </div>
        </div>
        @if (($key + 1) % 3 == 0)
          <div class="clear he1"></div>
        @endif
      @endforeach

      {{-- <div class="grid_4">
        <div class="pad2"> <img src="{{asset('images/page2_img2.jpg')}}" alt="" class="img_inner fleft i2">
          <div class="extra_wrapper">
            <div class="text2 col2"><a href="#">Cats</a></div>
            Laes quis orci eget diam viverralopr con equat. Fusce sagit quam ihui hyhy kolo opirlo pulvinarhjkjo.</div>
          <div class="clear"></div>
          Araesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ulamcorper accumsan semo lectus ut sapien. Lonec venienatis posuere velit aty convallis neque ullamcorper quis. Integerylo posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Musce fringilla erat ac urna ba. </div>
      </div> --}}

      {{-- <div class="grid_4">
        <div class="pad2"> <img src="{{asset('images/page2_img3.jpg')}}" alt="" class="img_inner fleft i2">
          <div class="extra_wrapper">
            <div class="text2 col2"><a href="#">Dogs </a></div>
            Foaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.</div>
          <div class="clear"></div>
          Loraesent quis orci eget diam viverra consuilot equat. Fusce sagittis quam in pulvinar sollicituo udin velit velit cursus nibh ullamcorper accutelo msan semy lectus ut sapien. Donec venenatisw posuere velit aty convallis neque ullamcorpertu quis. Integerylo posuere ipsum eu risus sollic itudin nec varius eratylo luctus. Fusce fringilla. </div>
      </div> --}}

      {{-- <div class="grid_4">
        <div class="pad2"> <img src="{{asset('images/page2_img4.jpg')}}" alt="" class="img_inner fleft i2">
          <div class="extra_wrapper">
            <div class="text2 col2"><a href="#">Rodents</a></div>
            Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk equat. Usce sagittis ki quam ihui hyhy opirp. </div>
          <div class="clear"></div>
          Toraesent quis orci eget diam viverra consuilot equat. Kusce sagittis quam in pulvinar sollicituo udin velit velit cursus nibh ullamcorper accutelo msan semy lectus ut sapien. Jonec venenatisw posuere velit aty convallis neque ullamcorpertu quis. Integerylo osuere ipsum eu risus sollicyulitudin nec varius eratylo luctus. Fusce fkioerat.</div>
      </div> --}}

      {{-- <div class="clear he1"></div> --}}

      {{-- <div class="grid_4">
        <div class="pad2"> <img src="{{asset('images/page2_img5.jpg')}}" alt="" class="img_inner fleft i2">
          <div class="extra_wrapper">
            <div class="text2 col2"><a href="#">Birds</a></div>
            Oaes quis orci eget diam viverralopr conequat. Husce sagit quam ihui hyhy kolo opirlo pulvinarhjkjl.</div>
          <div class="clear"></div>
          Graesent quis orci eget diam viverra consequat. Dusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ulamcorper accumsan semo lectus ut sapien. Ionec venienatis posuere velit aty convallis neque ullamcorper quis. Integerylo posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Musce fringilla erat ac urna ba. </div>
      </div> --}}

      {{-- <div class="grid_4">
        <div class="pad2"> <img src="{{asset('images/page2_img6.jpg')}}" alt="" class="img_inner fleft i2">
          <div class="extra_wrapper">
            <div class="text2 col2"><a href="#">Fish</a></div>
            Maes quis orci eget diam viverralopr conequat. Ausce sagit quam ihui hyhy kolo opirlo pulvinarhjkjyu.</div>
          <div class="clear"></div>
          Ahaesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ulamcorper accumsan semo lectus ut sapien. Monec venienatis posuere velit aty convallis neque ullamcorper quis. Sntegerylo posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Musce fringilla erat ac urna. </div>
      </div> --}}

      {{-- <div class="grid_4">
        <div class="pad2"><img src="{{asset('images/page2_img7.jpg')}}" alt="" class="img_inner fleft i2">
          <div class="extra_wrapper">
            <div class="text2 col2"><a href="#">Reptiles</a></div>
            Zaes quis orci eget diam viverralopr conequat. Ausce sagit quam ihui hyhy kolo opirlo pulvinarhjkjlo.</div>
          <div class="clear"></div>
          Jhaesent quis orci eget diam viverra consequat. Gusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ulamcorper accumsan semo lectus ut sapien. Sonec venienatis posuere velit aty convallis neque ullamcorper quis. Sntegerylo posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Ousce fringilla erat ac urnl. </div>
      </div> --}}

    </div>
  </div>
  <div class="bottom_block bot1">
    <div class="container_12">
      {{-- <div class="grid_12">
        <h2>Dados </h2>
      </div> --}}

      {{-- <div class="grid_4">
        <div class="pad2">
          <img src="{{asset('images/page2_img8.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <div class="col2"><a href="#">Mark Kromstein</a></div>
            Kaes quis orci eget diam viverralopr conequat. Busce sagit quam ihui hyhy kolo opirlo pulvinarhjkj. </div>
        </div>
      </div> --}}

      <div class="grid_4 text-center dados-estatisticos">
        <div class="pad2">
          {{-- <img src="{{asset('images/page2_img8.jpg')}}" alt="" class="img_inner fleft"> --}}
          <div class="extra_wrapper">
            {{-- <div class="col2">
              <a href="#">Mark Kromstein</a>
            </div> --}}
            <span>{{$qtdUsers}}</span>
            <p>Doadores</p>
          </div>
        </div>
      </div>

      <div class="grid_4 text-center dados-estatisticos">
        <div class="pad2">
          {{-- <img src="{{asset('images/page2_img8.jpg')}}" alt="" class="img_inner fleft"> --}}
          <div class="extra_wrapper">
            {{-- <div class="col2">
              <a href="#">Mark Kromstein</a>
            </div> --}}
            <span>{{$qtdPets}}</span>
            <p>Pets Cadastrados</p>
          </div>
        </div>
      </div>

      <div class="grid_4 text-center dados-estatisticos">
        <div class="pad2">
          {{-- <img src="{{asset('images/page2_img8.jpg')}}" alt="" class="img_inner fleft"> --}}
          <div class="extra_wrapper">
            {{-- <div class="col2">
              <a href="#">Mark Kromstein</a>
            </div> --}}
            <span>-</span>
            <p>Doações</p>
          </div>
        </div>
      </div>
      
      {{-- <div class="grid_4">
        <div class="pad2"> <img src="{{asset('images/page2_img9.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <div class="col2"><a href="#">Sandra Grosh</a></div>
            Maes quis orci eget diam viverralopr conequat. Ausce sagit quam ihui hyhy kolo opirlo pulvinarhjkjyu. </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="pad2"> <img src="{{asset('images/page2_img10.jp')}}g" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <div class="col2"><a href="#">Ann Priston</a></div>
            Zaes quis orci eget diam viverralopr con equat. Ausce sagit quam ihui hyhy kolo opirlo pulvinarhjkjlo. </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection