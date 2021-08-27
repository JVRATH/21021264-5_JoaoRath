<!DOCTYPE html>
   <html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <title>FORMULARIO </title>
      <link rel="stylesheet" href="css/boot.css">
      <link rel="stylesheet" href="css/style.css">	 
   </head>
  <body>
  <form>
        <fieldset>
                  <div>
                     <h1>Fale Conosco</h1>
                                 <br>
                  </div>

            <div >
                  <p><label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required></p>
            </div>
            
            <div >
               <p> <label for="email"><strong>Email</strong></label>
               <input type="email" name="email" id="email" required></p>
            </div>

            <div >
               <p><label for="endereço"><strong>Endereço</strong></label>
                <input type="text" name="endereço" id="endereço" required></p>
            </div>
            
            <div >
               <p><label for="telefone"><strong>Telefone</strong></label>
                <input type="text" name="telefone" id="telefone" required></p>
            </div>
       </fieldset> 

       <fieldset >
            <div >
                <br>
                                                <P>Mensagem</P> 
                <P> <textarea rows="6" style="width: 36em" id="experiencia" name="experiencia"></textarea></P>  
            </div>
        </fieldset>
                          <P><button class="botao" type="submit" onsubmit="">Concluído</button> </P>           
        </form>
    </body>
</html>
