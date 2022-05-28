<?php 
include ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fale Conosco</title>
        <link rel="shortcut icon" type="imagex/png" href="fotos/Logo Tcc.png">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/pagina_inicial.css">
        <link rel="stylesheet" href="css/faleconosco.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
         <!-- jQuery CDN - Slim version (=without AJAX) -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <!-- Popper.JS -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
         <!-- Bootstrap JS -->
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 
    </head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MINHA HORTA MINHA VIDA</h3>
                <strong>MH</strong>
                <strong>MV</strong>
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="pagina_inicial.php">
                        <i class="fas fa-home"></i>
                        Página Inicial
                    </a>
                </li>
                <li >
                    <a href="comecar_horta.php">
                        <i class="fas fa-seedling"></i>
                        Começar Horta
                    </a>
                </li>
                <li class="active" >
                    <a href="fale_conosco.php">
                        <i class="fas fa-paper-plane"></i>
                        Fale Conosco
                    </a>
                </li>
                <li>
                    <a href="sobre_nos.html">
                        <i class="fas fa-briefcase"></i>
                        Sobre Nós
                    </a>
                    
                </li>        
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="botao-menu" class="btn btn-outline-success" >
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="comecar_horta.php">Começar uma Horta</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
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
        document.querySelector('input[type=email]').oninvalid = function() {

// remove mensagens de erro antigas
this.setCustomValidity("");

// reexecuta validação
if (!this.validity.valid) {

    // se inválido, coloca mensagem de erro
    this.setCustomValidity("Email inválido");
}
};
  
    </script>
</body>
</html>




