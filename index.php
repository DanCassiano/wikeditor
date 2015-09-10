<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Swiss Knives</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/wikeditor.css">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wikieditor.js"></script>
	<link rel="icon" type="image/png" href="fav.ico" />

</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">  

    		<button class="btn btn-default navbar-btn" id="btnEscondeColuna"> 
  				<span class="glyphicon glyphicon-option-vertical"></span>           
  			</button>

         <button id="testeMobile" class="btn btn-default navbar-btn"  data-toggle="modal" data-target="#modalNovoIndice2" >Testar Mobile</button>
         <button id="testeMobile2" class="btn btn-default navbar-btn"  data-toggle="modal" data-target="#modalNovoIndice3" >PageSpeed Insights</button>
         <button id="testeMobile3" class="btn btn-default navbar-btn"  data-toggle="modal" data-target="#modalNovoIndice4" >Compressor</button>
         <button id="testeMobile4" class="btn btn-default navbar-btn"  data-toggle="modal" data-target="#modalNovoIndice5" >Mini</button>
         <button id="testeMobile5" class="btn btn-default navbar-btn"   >SpriteCow</button>

         <!-- <h1 style="float:right">O Canivete Suiço</h1> -->
		</nav>
		<div class="row top">
  			<div class="col-xs-6 col-md-4 colunas-fixas coluna1" id="coluna1">
  				<div class="panel panel-default topo-menu ">
  				  	<div class="panel-heading header-relativo">
  				  		Topico
  				  		<button class="btn btn-default navbar-btn" id="btnNovoIndice"  data-toggle="modal" data-target="#modalNovoIndice"> 
  							<span class="glyphicon glyphicon-plus"></span> 
  						</button>	
  				  	</div>
					<ul class="list-group" id="listaIndices">
					  	<?php 

                ini_set('display_errors', 0);
                error_reporting( 0 );
                $arquivos = glob("*.html");
					  		foreach ( $arquivos as $arquivo) 
					  		{
					  			?>
									<li class="list-group-item"> 
										<a class="link" href="<?php echo $arquivo ?>"><?php echo $arquivo ?></a> <a href="editor.php?arquivo=<?php echo $arquivo ?>" class="btn-editor"> <span class="glyphicon glyphicon-pencil"></span> </a> </li>									
					  			<?php    						
							}
					  	 ?>

          
          </ul>
       
				</div>
  			</div>
  			<div class="col-xs-12 col-md-8 colunas-fixas coluna2" id="coluna2">
  				<iframe src="" frameborder="0" id="iframeView"></iframe> 				
  			</div>
		</div>
	</div>
	<div class="modal fade" id="modalNovoIndice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form method="GET" action="editor.php">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Novo indice</h4>
      			</div>
      			<div class="modal-body">
        			
  						<div class="form-group">
    						<label for="novoIndice">Nome</label>
    						<input type="text" class="form-control" id="novoIndice" placeholder="Nome" name="arquivo">
  						</div>
  					
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        			<button type="submit" class="btn btn-primary">Salvar</button>
      			</div>
    		</div>
  		</div>
  		</form>	
	</div>



    <div class="modal fade" id="modalNovoIndice2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
  
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel2">Teste Mobile Google</h4>
            </div>
            <div class="modal-body">
              
              <div class="form-group">
                <label for="novoIndice">Url</label>
                <input type="text" class="form-control" id="url" placeholder="Nome" name="arquivo">
              </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
              <button type="submit" class="btn btn-primary" id="btnTesteMovel" data-dismiss="modal">Salvar</button>
            </div>
        </div>
      </div>
      
    </div>




    <div class="modal fade" id="modalNovoIndice3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel3">Teste Mobile Google</h4>
            </div>
            <div class="modal-body">
              
              <div class="form-group">
                <label for="novoIndice">Url</label>
                <input type="text" class="form-control" id="url2" placeholder="Nome" name="arquivo">
              </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
              <button type="submit" class="btn btn-primary" id="btnTesteMovel2" data-dismiss="modal">Salvar</button>
            </div>
        </div>
      </div>
      
    </div>



    <div class="modal fade" id="modalNovoIndice4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
  
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel4">Compressor</h4>
            </div>
            <div class="modal-body">
              
                  <iframe src="ferramentas/compressor.html" id="compressor" frameborder="0"></iframe>
            
            </div>        
        </div>
      </div>
      
    </div>


      <div class="modal fade" id="modalNovoIndice5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
  
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel5">Compressor</h4>
            </div>
            <div class="modal-body">
              
                  <iframe src="ferramentas/minificador.php" id="compressor" frameborder="0"></iframe>
            
            </div>        
        </div>
      </div>
      
    </div>

</body>
</html>