<?php
	include('dados/dados.php');
?>
<!DOCTYPE html>
   <html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <title>PRODUTO </title>
      <link rel="stylesheet" href="css/boot.css">
      <link rel="stylesheet" href="css/style.css">	 
   </head>
   
   <body>
	   
   <h1> A MELHOR PIPOCA DA RIGIÃO ESCOLHA A SUA</h1>

		<section class="main_blog">
				<header class="main_blog_header">
				<H1>PIPOCAS DOCES </H1>
	
		         </header>
			 <?php
				foreach($doces as $value)
				{ ?>
					<article>
						<header>         
							<h1>
							<a href="index.php?pg=pages/tipos.php&id=<?=$value["id"];?>"><?php echo ($value["foto"]);?></a>
							</h1>
							<p><?php echo ($value["nome"]);?></p>
						</header>       
					</article>
				<?php }
			?>
	   </section>
  </body>
</html>