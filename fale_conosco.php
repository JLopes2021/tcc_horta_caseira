<?php 
include ("conexao.php");
include("/xampp/htdocs/tcc_horta_caseira/view/menu-geral-paginas.php")
?>
<!DOCTYPE html>
<head>
<link rel="shortcut icon" type="imagex/png" href="fotos/Logo Tcc.png">
        <title>Fale Conosco</title>
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/pagina_inicial.css">
        <link rel="stylesheet" href="css/faleconosco.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--Our Js-->
        <script src="/js/verifica-envio.js"></script>

</head>
</html>

<body>
            <!--Nosso formulário-->
            <center>

                  <div class="container">
                    <h1>Fale conosco</h1>
                    <form action="cadastro.php" method= "POST">
                        <div class="col-6">
                        <label for="name">Coloque o seu Nome</label>
                        <input type="name" class="form-control" name="nome" id="nome" aria-describedby="name"  required="required"  >
                        <small id="nome" class="form-text text-muted">Digite o seu nome</small>
                        <br>

                      </div>
                        <div class="col-6">
                        <label for="email">Coloque o seu email</label>
                        <input type="email" class="form-control" size="30" name="email" id="email" aria-describedby="endereco"  required="required" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <small id="email" class="form-text text-muted">Digite o seu Email</small>
                        <br>

                      </div>
                        
                        <div class="col-6">
                        <label for="mensagem">Digite a sua Mensagem</label>
                        <input type="text" class="form-control" name="mensagem" rows="5" id="mensagem" aria-describedby="mensagem" required="required" maxlength="255" rows="5" ></input>
                        <small id="mensagem" class="form-text text-muted">Digite a sua Mensagem </small>
                        <br>
                        <br>

                      </div>

                      <button type="submit" class="btn btn-primary" name="botao" value="botao"  >Envie a sua mensagem</button><br>
                     
                    </form>
                    </div>

            </center>
    
    

    </div>
    
   
    <script type="text/javascript">
        $(document).ready(function () {
    $('#botao-menu').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
    </script>
</body>
</html>




