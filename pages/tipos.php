<?php
	include('dados/dados.php');        
	 
			  foreach($dados as $value){
			?>
			   <p>
					nome:<?=$value["nome"];?>   -  tipo: <?=$value["tipo"];?>
			  </p>
              <?php
              }