                   <p> DESCRIÇÃO DO PRODUTO </p>
<?php
       
	include('dados/dados.php');    
    
    if(isset($_GET["id"]) && !empty($_GET["id"]))
       {
           $id = $_GET["id"];
    	} else
		  {
            return 0;
          }
    
	  foreach($doces as $value){
          if ($value["id"] == $id )
		   {
			 ?>
               <p>
                 SABOR <?=$value["nome"];?> - <?=$value["tipo"];?>   -  PREÇO: <?=$value["preco"];?> 
				 <?=$value["foto"];?>
               </p>
             <?php
          }else{
			  }
            }


            if(isset($_GET["id"]) && !empty($_GET["id"]))
            {
                $id = $_GET["id"];
           } else
           {
                 return 0;
               }
         
         foreach($salgadas as $value){
               if ($value["id"] == $id )
            {
            ?>
                    <p>
                      SABOR <?=$value["nome"];?> - <?=$value["tipo"];?>   -  PREÇO: <?=$value["preco"];?> 
              <?=$value["foto"];?>
                    </p>
                  <?php
               }else{
             }
                 }