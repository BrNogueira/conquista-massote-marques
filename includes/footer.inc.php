

<script>

$(document).ready(function(){
    $window = $(window);
    //Captura cada elemento section com o data-type "background"
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);   
            //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $scroll.data('speed')); 
                var coords = '100% '+ yPos + 'px';
                $scroll.css({ backgroundPosition: coords });    
            });
   });  
}); </script>

<footer>
  <div class="container">
    <div class="row">
<div class="box-footer">
      <div class="col-md-3">
        <div class="txt-destaque">
          <h3>
        <strong>Endereço</strong>
          </h3>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>Rua Celeste Gobbato, 32/204 Porto Alegre</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="txt-destaque">
          <h3>
        <strong>Email</strong>
          </h3>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>contato@teixeiramuller.com.br</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="txt-destaque">
          <h3>
        <strong>Telefone</strong>
          </h3>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>(51) 3026-3909</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="txt-destaque">
          <h3>
        <strong>Redes Sociais</strong>
          </h3>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="redes-sociais">
              <a href="https://www.facebook.com/teixeiramuller/" target="blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/teixeiramuller/" target="blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
</div>
    </div>
    <div class="row line-top justify-content-between">
      <div class="col-md-10">
        <span class="direitos">2018 © Todos os direitos reservados - Teixeira Müller Advogados Associados</span>
      </div>
      <div class=" lex">
        <a href="http://lexmarketing.com.br/" target="_blank">
        <img src="../assets/img/icons/lex.png"></a>
      </div>
    </div>
  </div>
</footer>
