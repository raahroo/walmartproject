<?php 
require_once("cabecalho.php");
require_once("conexao.php");
require_once("bancofuncoes.php"); ?>


<div class="page-header">
  <div class="container">
     <h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
      Endereços cadastrados</h2>
  </div>
</div>

  <div id="welcome">       
    <h4>Edite e cadastre novos endereços para suas entregas <span class="glyphicon glyphicon-arrow-down"></span></h4>        
  </div>

<div class="container">  
  <div class="row">
  <?php
  $enderecos = listaEnderecos($conexao);
  if (array_key_exists("removido", $_GET) && $_GET['removido']=='true'){ ?>
    <h3 class="alert-success"> Endereço apagado com sucesso!</h3>
    <?php }
  ?>
   <?php if (array_key_exists("adicionado", $_GET) && $_GET['adicionado']=='true'){ ?>
  <h3 class="alert-success"> Endereço adicionado com sucesso!</h3>

  <?php } 
?> 
  <br>
   
  <div class= "enderecos" id="enderecos">
    <div class="col-md-3">
      <div class="thumbnail"> 
        <!-- Trigger the modal with a button -->
        <button style="width: 100%;" type="button" class="btn btn-info btn-lg add" data-toggle="modal" data-target="#myModal">       
       <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span><br>Adicionar<br> Endereço</button>

      </div>
    </div>

    <?php foreach ($enderecos as $endereco) : ?>
          <div class="col-md-3">
            <div class="thumbnail">   

            <p class="iconeseditar">        
            <button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button> 
            <a href="remove-endereco.php?id=<?=$endereco['id']?>">
            <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
            </p>  

              <h4>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <?=$endereco['destinatario'] ?>
              </h4>
              <p><?=$endereco['endereco'] ?></p>
              <p><?=$endereco['bairro'] ?></p>
              <p>CEP: <?=$endereco['cep'] ?></p>
              <p><?=$endereco['cidade']?> - <?=$endereco['estado']?></p>              
             </div>
             <p> <input type="radio" name="endereco" value="principal"> Endereço principal<br></p>
          </div>
    <?php endforeach ?>
</div>


 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Cadastre seu Endereço</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="logicaendereco.php">

            <div class="row">
              <div class="col-md-12">
                <label>Nome do destinatário*:</label>
                <input type="text" name="destinatario" class="form-control"> 
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label>CEP:*</label>
                <input type="number" name="cep" class="form-control"> 
                <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank">Não sei meu CEP</a>               
              </div>
            </div>


           <div class="row">
              <div class="col-md-12">
                <label>Endereço:*</label>
                <input type="text" name="endereco" class="form-control"> 
                 <input type="checkbox" name="sn" value="Sem Número">Sem número<br>
              </div>
           </div>


          <div class="row">
            <div class="col-md-6">
              <label>Número:</label>
              <input type="number"  name="numero" class="form-control">
            </div>      


          
            <div class="col-md-6">
              <label>Complemento:</label>
              <input type="text"  name="complemento" class="form-control">
            </div>
          </div>

           <div class="row">
              <div class="col-md-12">
                <label>Bairro:</label>
                <input type="text" name="bairro" class="form-control"> 
              </div>
           </div>



          <div class="row">
            <div class="col-md-6">
              <label>Cidade:*</label>
              <input type="text"  name="cidade" class="form-control">
            </div>      


          
            <div class="col-md-6">
              <label>Estado:*</label>
              <input type="text"  name="estado" class="form-control">
            </div>
          </div>



          <div class="row">                
            <div class="col-md-6">
              <label>Tipo de endereço:*</label>
              <input type="text"  name="tipoend" class="form-control"> 
            </div>
          </div>

          <div class="row">
             <div class="col-md-12">
                <label>Ponto de referência:</label>
                <input type="text"  name="pontoref" class="form-control"> 
              </div>
          </div>
          
        </div>
      



        <div class="modal-footer">
          <input type="submit" class="btn btn-success btn-lg" value="Cadastrar">          
          <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancelar</button>
          </form>
        </div>
      </div>

      
      
    </div>
  </div>
</div> 
</div>

<?php 

require_once("rodape.php"); ?>
