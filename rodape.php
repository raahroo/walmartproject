  <div id="topo">
    <a href="javascript:levTop();">
    <button class="btn btn-primary btn-lg">
      <span class="glyphicon glyphicon-chevron-up">
      </span>
    </button></a>
  </div>
  <footer class="container-fluid">
    <p>Desenvolvido por:
    <a href="http://www.rahrocom.com/" target="_blank">
    <img src="img/logo_rahro_comunicacao.png" alt="Rahro Comunicacao"></a></p>
    <p> São Paulo - SP | (11) 99788 6851</p>
  </footer>
  <!--scripts responsáveis pela animação do slider!-->
  <script src="js/jquery-2.1.3.js"></script>
  <script src="js/bootstrap.min.js"> </script>
  <!-- fim scripts responsáveis pela animação do slider!-->
  <!-- Script para voltar ao topo-->
  <script type="text/javascript">
    function topTop(){
        var totop = $(window).scrollTop()-8;
        if(totop <= 0){
           clearInterval(idInterval);
        }else{
            totop--;
            $(window).scrollTop(totop);
        }
    }
     
    function levTop(){
        idInterval = setInterval('topTop();', 1);
    }
  </script>
  <script>
    $( window ).scroll(function() {
        nScrollPosition = $( window ).scrollTop();
        if(nScrollPosition>=100){
             $( "#topo" ).css( "display", "block" );
        }else{
             $( "#topo" ).css( "display", "none" );
        }
    });
  </script>
  <!-- Fim Script para voltar ao topo-->
  <script>
    var url = window.location;
   
    $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
   
    $('ul.nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
  </script>
  <!-- Script Rolagem suave-->
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

  <script type="text/javascript">
  jQuery(document).ready(function($) { 
      $(".scroll").click(function(event){        
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
     });

      $('.menu-mobile p').click(function () {
        $('.menu-mobile ul').toggle("slow");
      });
  });
  </script>
  <!-- Fim Script Rolagem suave-->
  </body>
</html>