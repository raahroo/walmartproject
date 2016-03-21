<?php
require_once("cabecalho.php"); ?>

	<div class="container-fluid" id="home">
		<div class="container" id="content-home">
			<img src="img/Walmart-logo-4.png" class="img-responsive">
			<div class="row">
				<a href="areacliente.php">
					<div class="col-md-4">
						<div class="thumbnail">
							<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
							<h3>Área do cliente</h3>
						</div>
					</div>
				</a>

				<a href="enderecos.php">
					<div class="col-md-4">
						<div class="thumbnail">
							<h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span></h2>
							<h3>Endereços cadastrados</h3>
						</div>
					</div>
				</a>

				<a href="pedidos.php">
					<div class="col-md-4">
						<div class="thumbnail">
							<h2><span class="glyphicon glyphicon-gift" aria-hidden="true"></span></h2>
							<h3>Seus pedidos</h3>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
<?php require_once("rodape.php");?>


</html>

