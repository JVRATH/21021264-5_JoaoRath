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
	
<H1>PRODUTOS</H1>
		
		<section class="main_blog">
			<header class="main_blog_header">
				<h1>PRODUTOS</h1>
			</header>

			<article>
				<header>
					
					<h2><a href="#" class="category"><?=$conteudo[0]["title"];?>!--HTML-->
						
					</a></h2>
				</header>
				<a href="#">
                    <img src="style/pipoca.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                </a>
			
				<p><?php echo substr($conteudo[0]["description"],0, 150);?></p>
			</article>

			<article>
				<header>
			
					<h2><a href="#" class="category"><?=$conteudo[0]["title"];?>!--CSS--></a></h2>
				</header>
				<a href="#">
                    <img src="style/pipoca1.jpg" alt="JOAO" title="Lorem Ipsum is simply">
                </a>
				
				<p><?php echo substr($conteudo[1]["description"],0, 150);?></p>
			</article>

			<article>
				<header>
					<h2><a href="#" class="category"><?=$conteudo[2]["title"];?></a></h2>
					<a href="#">
                    <img src="imagens/leiteninho.jpg" alt="elefantinho" title="elefantinho azul">
                </a>
					<p><?php echo substr($conteudo[2]["description"],0, 150);?></p>
				</header>
			</article>
		</section>
		
		<section class="main_blog">
			<header class="main_blog_header">
				<h1>PIPOCAS DOCES </h1>
			</header>

			<?php
			  foreach($dados as $key => $value){
			?>
			  <article>
			     	<header>
					<h1><a href="index.php?pg=pages/tipos.php&id=<?=$value["id"];?>"><?=$value["nome"];?></a></h1>
			    	</header>
				<p>
					<?php echo ($value["tipo"]);?>
				</p>

				<p>
					<?php echo ($value["preco"]);?>
				</p>

				</article>
			<?php
			}
			?>
		</section>

	
                
        </article>

	 </main>
    
      
       
       
</body>
</html>