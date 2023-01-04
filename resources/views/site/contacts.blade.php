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
        <div>Faça uma doação para que possamos continuar com esse lindo projeto</div>
        <br />
        <div><strong>Chave Pix</strong>: <span class="pix-code">dc25aa47-1dbf-4562-ac1f-195223e94457</span></div>
        <div class="text-center" style="margin-top: 40px;">
          <span>Ou escaneie o qr-code abaixo:</span>
          <img src="./images/qrcode-pix.png" alt="">
        </div>
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