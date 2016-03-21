<?php 
require_once("cabecalho.php");
require_once("conexao.php");
require_once("bancofuncoes.php"); ?>



       
    <div class="page-header">
        <div class="container">
            <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Área do Cliente</h2>
        </div>
    </div>  


    <div id="welcome">       
        <h4>Olá User! Bem-vindo à sua conta ;)</h4>
        <p>Confira aqui tudo sobre você.</p>     
    </div>
     
    <div class="container" id="areadocliente">
    <h2 class="areacliente"><span class="glyphicon glyphicon-tag"></span>  Histórico de compras</h2>
      <div id="historicocompras" class="carousel slide" data-ride="carousel">
        

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row">
             <div class="col-md-3">
                <div class="thumbnail">
                  <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                  <img src="img/note.jpg">
                  <p>Notebook Acer Intel Core i7 16GB 1TB Aspire 15.6" Windows 10 Grafite Placa de Vídeo NVIDIA GeForce 920M</p>
                  <p class="preco">R$ 3.659,00</p>
                  <small>10x de 365,90 sem juros</small><br>
                  
                </div>
              </div>
               <div class="col-md-3">
                <div class="thumbnail">
                   <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                   <img src="img/ultrawide.jpg">
                  <p>Monitor Gaming LED 29 UltraWide Full HD 29UM67 LG</p>
                  <p class="preco">R$ 1.500,00</p>
                  <small>10x de 150,00 sem juros</small><br>
                 
                </div>
              </div>
               <div class="col-md-3">
                <div class="thumbnail">
                 <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                   <img src="img/playstation.jpg">
                  <p>Console Sony Playstation 4 (PS4) / 500GB / 2 Controles</p>
                  <p class="preco">R$ 2.149,00</p>
                  <small>10x de 214,90 sem juros</small><br>
                  
                </div>
              </div>
               <div class="col-md-3">
                <div class="thumbnail">
                 <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                   <img src="img/caixasom.jpg">
                  <p>Caixa de Som com USB para Notebook e PC, Cor Branco Philips SPA3251/10</p>
                  <p class="preco">R$ 200,00</p>
                  <small>5x de 40,00 sem juros</small><br>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="item">
              <div class="row">
               <div class="col-md-3">
                <div class="thumbnail">
                  <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                  <img src="img/escrivaninha.jpg">
                  <p>Escrivaninha para Notebook Interlink Alexis Branco</p>
                  <p class="preco">R$ 293,89</p>
                  <small>4x de 73,47 sem juros</small><br>
                  
                </div>
              </div>
               <div class="col-md-3">
                <div class="thumbnail">
                   <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                   <img src="img/violino.jpg">
                  <p>Violino 4/4 Tradicional com 4 Afinadores Fixos BVN1 Benson</p>
                  <p class="preco">R$ 337,90</p>
                  <small>6x de 56,32 sem juros</small><br>
                 
                </div>
              </div>
               <div class="col-md-3">
                <div class="thumbnail">
                 <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                   <img src="img/afinador.jpg">
                  <p>Afinador Giannini TU-20 Eletrônico Digital de Clip Cromático Axcess Frequência 440Hz</p>
                  <p class="preco">R$ 38,90</p>
                  <small>à vista</small><br>
                  
                </div>
              </div>
               <div class="col-md-3">
                <div class="thumbnail">
                 <button class="btn btn-success btnbottom"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
                   <img src="img/fone.jpg">
                  <p>Fone de Ouvido Wireless Bluetooth Headset SHB7150FB Philips</p>
                  <p class="preco">R$ 320,90</p>
                  <small>5x de 64,18 sem juros</small><br>
                 
                </div>
              </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#historicocompras" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#historicocompras" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <br>
        <br>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>         
        </ol>


      </div>
     </div>   
    <hr>
    <div id="preferencias">
      <h2 class="areacliente"><span class="glyphicon glyphicon-thumbs-up"></span> Suas Preferências</h2>
        <div class="row">
          <div class="col-md-3">
            <ul>
              <li><img src="img/monitor.png"><input type="checkbox" checked> Eletrônicos</input></li>
               <li><img src="img/cozinha.png"><input type="checkbox"> Eletrodomésticos</input></li>
                <li><img src="img/music.png"><input type="checkbox" checked> Música</input></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <li><img src="img/phone.png"><input type="checkbox"> Telefonia</input></li>
               <li><img src="img/skate.png"><input type="checkbox" checked> Esporte e Lazer</input></li>
                <li><img src="img/computer.png"><input type="checkbox" checked> Informática</input></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <li><img src="img/automotivo.png"><input type="checkbox"> Automotivo</input></li>
               <li><img src="img/lip.png"><input type="checkbox"> Beleza e Saúde</input></li>
                <li><img src="img/game.png"><input type="checkbox" checked> Games</input></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <li><img src="img/toys.png"><input type="checkbox"> Brinquedos</input></li>
               <li><img src="img/baby.png"><input type="checkbox"> Bebê e Crianças</input></li>
                <li><img src="img/fashion.jpeg"><input type="checkbox"> Moda</input></li>
            </ul>
          </div>
        </div>
    </div>
    <hr>
    <div id="selos">
    <h2 class="areacliente"><span class="glyphicon glyphicon-certificate"></span>  Selos</h2>
      <img src="img/usuario_gold.png">
      <h4>Usuário Gold</h4>
    </div>
    
    <hr>
    <div id="dadospessoais">
      
        <div class="panel panel-default">
          <div class="panel-heading">            
            <h2 class="dados"><span class="glyphicon glyphicon-list"></span> Dados Pessoais</h2>
          </div>
          <div class="panel-body">
           <div class="row">
            <div class="col-md-6">
              <ul>
                <li><span class="title">Nome:</span><br>Freddie Mercury</li>
                <li><span class="title">CPF:</span><br>999.999.999-77</li>
                <li><span class="title">Sexo:</span><br>Masculino</li>
                <li><span class="title">Data de Nascimento:</span><br>5 de setembro de 1946</li>
              </ul>
            </div>

            <div class="col-md-6">
              <ul>
                <li><span class="title">Telefone:</span><br>(11) 99999 9999</li>
                <li><span class="title">e-mail:</span><br>freddie@queen.com</li>
                <li><span class="title">senha:</span><br>******</li>
                <li><input type="checkbox"> Desejo receber e-mails com<br> novidades e promoções</li>
              </ul>
            </div>
                <input  type="submit" class="btn btn-primary btn-lg botaoatualiza" value="Atualiar meus dados">  

           </div>
          </div>
        </div>
    </div>


    <hr>
    <section id="pesquisa">
      <h2 class="areacliente"><span class="glyphicon glyphicon-comment"></span> Pesquisa de Satisfação</h2>
        <form>
            <div class="row">
              <div class="col-md-12">
                <label>Como podemos te atender melhor?</label><br>
                <textarea rows="4"  class="form-control"></textarea>
            </div>

            <div class="row">
              <div class="col-md-12">
                <label>Tem algum produto que não vendemos e que gostaria de comprar pelo Walmart.com?</label><br>
               <textarea rows="4" class="form-control"></textarea>
              </div>


            </div>                
           <input type="submit" class="btn btn-success btn-lg" value="Enviar">          
          </form>
    </section>



 </div>
 </div>

<?php 
require_once("rodape.php"); ?>
