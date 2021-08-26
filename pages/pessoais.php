

<!DOCTYPE html>
   <html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <title>pessoais </title>
      <link rel="stylesheet" href="css/boot.css">
      <link rel="stylesheet" href="css/style.css">	 
   </head>
   <body>

           <h1>DODOS PESSOAIS</h1>
           
           <img src="imagens/faculdade1.jpg" height="200" alt="logo " title="logo"></a>

       <p>
             <?php 
           
        foreach($disciplina as $value){
          echo $value ("nome");
          echo "<br>";

        }

        ?>





         </p>
  </body>
</html>