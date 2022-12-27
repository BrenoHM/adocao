@extends('site.base')
@section('title')
| Contacts
@endsection
@section('css')
<link rel="stylesheet" href="css/form.css">
@endsection

@section('js')
<script src="js/forms.js"></script>
@endsection

@section('content')
<div class="content pt1">
    <div class="container_12">
      <div class="grid_6">
        <h2>Informações de contato</h2>
        <br>
        {{-- <div class="map">
          <figure class="img_inner">
            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
          </figure>
          <address>
          <dl>
            <dt>
              <p>The Company Name Inc.<br>
                8901 Marmora Road,<br>
                Glasgow, D04 89GR.</p>
            </dt>
            <dd><span>Freephone:</span>+1 800 559 6580</dd>
            <dd><span>Telephone:</span>+1 800 603 6035</dd>
            <dd><span>FAX:</span>+1 800 889 9898</dd>
          </dl>
          </address>
        </div> --}}
        <div>Faça uma doação para que possamos continuar com esse lindo projeto</div>
        <p>Chave pix</p>
        <div><strong>Chave Pix</strong>:dc25aa47-1dbf-4562-ac1f-195223e94457</div>
      </div>
      <div class="grid_5 prefix_1">
        <h2 class="ic1">Contato</h2>
        <form id="form" action="#">
          <div class="success_wrapper">
            <div class="success">Formulário de contato enviado!<br>
              <strong>Entraremos em contato em breve.</strong>
            </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Nome:">
              <br class="clear">
              <span class="error error-empty">*Nome inválido.</span><span class="empty error-empty">*Este campo é obrigatório.</span>
            </label>
            <label class="email">
              <input type="text" value="Email:">
              <br class="clear">
              <span class="error error-empty">*Email inválido.</span><span class="empty error-empty">*Este campo é obrigatório.</span>
            </label>
            <label class="phone">
              <input type="tel" value="Telefone:">
              <br class="clear">
              <span class="error error-empty">*Telefone inválido.</span><span class="empty error-empty">*Este campo é obrigatório.</span>
            </label>
            <label class="message">
              <textarea></textarea>
              <br class="clear">
              <span class="error">*Sua mensagem está muito curta.</span> <span class="empty">*Este campo é obrigatório.</span>
            </label>
            <div class="clear"></div>
            <div class="btns"><a data-type="reset" class="btn">Limpar</a><a data-type="submit" class="btn">Enviar</a>
              <div class="clear"></div>
            </div>
          </fieldset>
          @csrf
        </form>
      </div>
    </div>
</div>
@endsection