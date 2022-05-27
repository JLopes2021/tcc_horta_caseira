<!DOCTYPE html>
   <html lang="en">
   <head>
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
      <div class="header"></div>
   </body>
   </html>
<?php
include("conexao.php");
 $emailAdm =($_POST['email']); 
 $senhaAdm =($_POST['senha']); 




    $result_usuarios = ("SELECT * FROM `administradores` WHERE `senha` = '{$senhaAdm}'");
    $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){     
        ?>
        <h3>Mensagens dos Usuários</h3>
        <?php 
                $result_usuarios = ("SELECT * FROM `msg_usu` WHERE `respondido` = 'N' ");
                $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
                while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
                    echo "Nome: " . $row_usuario['nome'] . "<br>";
                    echo "E-mail: " . $row_usuario['email'] . "<br>";
                    echo "Mensagem: " . $row_usuario['mensagem'] . "<br><hr>";
              
                }
        ?> 
        <a href="suporte.html"><button class="btn btn-primary">Voltar a Home do Sistema</button></a>       
        <?php
    } 
    
?>
