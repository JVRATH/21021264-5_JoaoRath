<!DOCTYPE html>
   <html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>PRINCIPAL </title>
      <link rel="stylesheet" href="css/boot.css">
      <link rel="stylesheet" href="css/style.css">	 
   </head>
<body>
	
         <h1>PAGINA PRINCIPAL</h1>
         <header>
				<a href="#">
                    <img src="imagens/html5-386614_640.jpg" alt="imagem do produto" title="imagem do produto">
                </a>
           </header>
           <section class="main_blog">
			<header class="main_blog_header">
				<h1>Conteúdo das aulas</h1>
			</header>
		   <?php
			    foreach($dados as $key => $value){
		   ?>
			        <article>
			         	<header>
	   <h2><a href="#" class="category"><?=$value["title"];?></a></h2>
	     	</header>
	      <p><?php echo substr($value["description"],0, 150);?>...</p>
			    <p class="data">Data/hora: 
					      <?php
					$date = new DateTime($value["date"]);
					echo $date->format('d/m/Y');
				?> às 19h00
				</p>
			   </article>
			  <?php
			}
			?>

		</section>
           
		  </div>
	   </footer>
</body>
</html>