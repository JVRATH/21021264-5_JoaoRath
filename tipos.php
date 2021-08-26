
DETALHES DO PRODUTO

<?php
	include('dados/dados.php');    
    
    if(isset($_GET["id"]) && !empty($_GET["id"])){
	$id = $_GET["id"];
	} else{
        return 0;
    }
    
	  foreach($dados as $value){
          if ($value["id"] == $id ){
			?>
			   <p>
					nome:<?=$value["nome"];?>   -  tipo: <?=$value["tipo"];?>
			  </p>
              <?php
                  }else{}
            }