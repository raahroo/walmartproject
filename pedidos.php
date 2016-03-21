<?php 
require_once("cabecalho.php");
require_once("conexao.php");
require_once("bancofuncoes.php"); ?>

<link rel="stylesheet" href="css/status.css">

<div class="page-header">
  <div class="container">
   <h2><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Seus Pedidos</h2>
  </div>
</div>
<div id="welcome">       
  <h4>Acompanhe a entrega dos seus pedidos <span class="glyphicon glyphicon-arrow-down"></span></h4> 
</div>

<div class="container" id="pedidos">
  <div class="col-md-3">
    <div class="thumbnail">
      <div class="row">
       <button class="btn btn-warning btnok"><span class="glyphicon glyphicon-music" aria-hidden="true"></span></button>
        <img style="margin: 0 auto;" src="img/lespaul.png" class="img-responsive" 
        style="width: 100%" />
      </div>  
      <div class="caption">
        <p>Guitarra Les Paul</p> 
        <p class="preco">R$ 800,00</p>    
        <p>Fender</p> 
      </div> 

      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"> Status
          </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <button class="btn btn-danger"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span>  Aguardando<br>confirmação
          </button>
          <br>
          
        </div>
       </div>
     </div>      
    </div>  
  </div>
   <div class="col-md-3">
    <div class="thumbnail">
      <div class="row">
        <button class="btn btn-warning btnok"><span class="glyphicon glyphicon-music" aria-hidden="true"></span></button>
        <img style="margin: 0 auto;" src="img/me-80_angle_5_gal.jpg" class="img-responsive" 
       />
      </div>  
      <div class="caption">
        <p>Pedaleira ME-80</p> 
        <p class="preco">R$ 1200,00</p>    
        <p>Boss</p> 
      </div> 

      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"> Status
          </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <button class="btn btn-warning"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>  Em trânsito</button>
          <br>
          <p class="codigocompra">Código da compra:</p>
          <h4>00001</h4>
        </div>
       </div>
     </div>      
    </div>  
  </div>
 
 <div class="col-md-3">
    <div class="thumbnail">
      <div class="row">
       <button class="btn btn-warning btnok"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>
        <img style="margin: 0 auto;" src="img/suporte.jpg" class="img-responsive" 
        style="width: 100%" />
      </div>  
      <div class="caption">
        <p>Suporte Articulado</p> 
        <p class="preco">R$ 60,00</p>    
        <p>Suporte Quality</p> 
      </div> 

      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"> Status
          </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <button class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Entregue</button>
          <br>
        </div>
       </div>
     </div>      
    </div>  
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <div class="row">
       <button class="btn btn-warning btnok"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>
        <img style="margin: 0 auto;" src="img/luz.jpg" class="img-responsive" 
        style="width: 100%" />
      </div>  
      <div class="caption">
        <p>Refletor de LED</p> 
        <p class="preco">R$ 159,90</p>    
        <p>Walmart</p> 
      </div> 

      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"> Status
          </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <button class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Entregue</button>
          <br>
        </div>
       </div>
     </div>      
    </div>  
  </div>  
</div>
<?php 
require_once("rodape.php"); ?>
