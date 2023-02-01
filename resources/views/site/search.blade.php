@extends('site.base')
@section('title', "| Search")
@section('js')
  <script src="https://cdn.tailwindcss.com"></script>
@endsection
{{-- @section('head')
  @include('site.adsense')
@endsection --}}
@section('content')
<div class="content">
  <div class="container_12">
    <div class="grid_12">
      <h2 class="ic1 mb-5 text-[30px]">Pesquisar por um pet</h2>
    </div>
    <div class="clear"></div>

    <div class="bg-gray-100 p-5 mb-5">
        <form class="form-filter-pets sm:block md:flex gap-1">
            <input name="name" id="name" value="{{request('name') ?? ''}}" type="text" placeholder="Nome" class="p-2 sm:mb-3 md:mb-0 sm:w-full md:w-1/4">
            <select name="breed_id" id="breed_id" class="p-2 sm:mb-3 md:mb-0 sm:w-full md:w-1/4">
                <option value="">Selecione</option>
                @foreach ($breeds as $breed)
                    <option value="{{$breed->id}}" {{request('breed_id') == $breed->id ? 'selected' : ''}}>{{$breed->breed}}</option>
                @endforeach
            </select>
            <select name="color" id="color" class="p-2 sm:mb-3 md:mb-0 sm:w-full md:w-1/4">
                <option value="">Selecione</option>
                <option {{request('color') == 'Amarelo' ? 'selected' : ''}}>Amarelo</option>
                <option {{request('color') == 'Chocolate' ? 'selected' : ''}}>Chocolate</option>
                <option {{request('color') == 'Branco' ? 'selected' : ''}}>Branco</option>
                <option {{request('color') == 'Preto' ? 'selected' : ''}}>Preto</option>
                <option {{request('color') == 'Cinzento' ? 'selected' : ''}}>Cinzento</option>
                <option {{request('color') == 'Dourado' ? 'selected' : ''}}>Dourado</option>
                <option {{request('color') == 'Creme' ? 'selected' : ''}}>Creme</option>
                <option {{request('color') == 'Azul' ? 'selected' : ''}}>Azul</option>
                <option {{request('color') == 'Vermelho' ? 'selected' : ''}}>Vermelho</option>
            </select>
            <button class="sm:w-full md:w-1/4 bg-gray-300 text-white hover:bg-gray-500">Buscar</button>
        </form>
    </div>

    @foreach($pets as $key => $pet)
        <div class="grid_4 search-list">
          <div class="pad2"> <img src="{{asset('photos')}}/{{$pet->photo}}" alt="" class="img_inner fleft i2" width="139">
            <div class="extra_wrapper">
              <div class="text2 col2">
                <a href="{{route('about', $pet->id)}}">{{$pet->name}}</a>
              </div>
              {{$pet->breed->breed}}
            </div>
            <p>{{$pet->breed->characteristics}}</p>
            <div class="clear"></div>
          </div>
        </div>
        @if (($key + 1) % 3 == 0)
          <div class="clear he1"></div>
        @endif
    @endforeach

    <div class="clear"></div>
    
    {{$pets->withQueryString()->links()}}

  </div>
</div>
@endsection