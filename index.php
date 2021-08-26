<?php
	include('dados/dados.php');
?>
<!DOCTYPE html>
   <html lang="pt-br">
   <head>
   <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title> ATIVIDADE MAPA </title>
      <link rel="stylesheet" href="css/boot.css">
      <link rel="stylesheet" href="css/css.css">	 
   </head>

   <body>

 
	  <header class="main_header"> 
			<div class="main_header_content">
				<a href="#" class="logo"><img src="imagens/logo.jpg" height="100" alt="logo " title="logo"></a>
				
				<nav class="main_header_content_menu">
					<ul>
						<li><a href="index.php?pg=pages/home.php">PRINCIPAL</a></li>
						<li><a href="index.php?pg=pages/produtos.php">PRODUTO</a></li>
						<li><a href="index.php?pg=pages/qsomos.php">QUEM SOMOS</a></li>
						<li><a href="index.php?pg=pages/formulario.PHP">FORMULARIO</a></li>
						<li><a href="index.php?pg=pages/localizacao.php">LOCALIZAÇÃO</a></li>
					</ul>
				</nav>
			</div>
	  </header>
      <DIV>
 </a>
				

     </DIV>

	  <MAIn>
	        <div class="main_cta">
			  <article class="main_cta_content">
		           <div class="main_cta_content_spacer">
					  <?php
							if(isset($_GET["pg"]) && !empty($_GET["pg"]))
							{
							$pagina = $_GET["pg"];
							include("$pagina");
							}
		                ?>
				   	</d>
	            </article>
           </div>	
       
	   
	   </MAIn>
	   <footer class="main_optin">
		  <div class="main_optin_content">
			 <header>
				 <p>DADOS DO DESENVOLVEDOR  <a href="index.php?pg=pages/pessoais.php">JOÃO VALDAIR 
				 CARLOS RATH </a></p>   
			 </header>
		  </div>
	   </footer>
  </body>
</html>
