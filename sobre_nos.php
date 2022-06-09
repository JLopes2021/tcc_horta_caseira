<?php 
include ("conexao.php");
include ("./view/menu-lateral.php")
?>
<!-- Our Custom CSS -->
<link rel="stylesheet" href="css/pagina_inicial.css">
<link rel="stylesheet" href="css/sobrenos.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

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
                            <li class="nav-item">
                                <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                <!--Nosso contato-->
                <center>
                <h1>Desenvolvedores</h1>
                </center>
                <br>

                <!--Grid de Histórico-->
  <div class="row no gutters">
        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/88064068?v=4" width="100px" height="100px" /><br><br>
                        <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Isabel Limão</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                         <p class="card-text">
                                         Responsável pelo design específico da página e abastecimento
                                         das informações do site.
                                         </p>
                            <div class="card-footer">
                           <a href="https://github.com/isabelimao"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href=""><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>         
                </center>
        </div>
        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/81269229?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Jefferson Lopes</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                         <p class="card-text">
                                             Responsável pelo front end e pelo back end, e gerenciamento
                                             geral do projeto.
                                            </p>
                                            <br>
                                         <div class="card-footer">
                           <a href="https://github.com/JLopes2021"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href="https://www.linkedin.com/in/jefferson-lopes-b87605191/"><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
                </center>
        </div>

        <div class="col py-3 px-lg-5 border bg-light">
            <center>
                    <img src="https://avatars.githubusercontent.com/u/101489147?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Leticia Lima</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                    <p class="card-text">
                                             Responsável pelo esqueleto geral de front end e pelo design geral 
                                             da página.
                                            </p>   
                                            <br>                                      
                                            <div class="card-footer">
                           <a href="https://github.com/LETICIALIMA77"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href="https://www.linkedin.com/in/leticia-lima-0b0b6120b/"><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
            </center>
        </div>

        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/88008791?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Lucas Maciel</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                    <p class="card-text">
                                             Responsável pela criação do banco de dados MySql e revisão das páginas 
                                             antes da implementação.
                                            </p>                                         <div class="card-footer">
                           <a href="https://github.com/LucasMaciel17"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href="">https://www.linkedin.com/in/lucas-maciel-228413204/<img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
                </center>  
        </div>

        <div class="col py-3 px-lg-5 border bg-light">
                <center>
                    <img src="https://avatars.githubusercontent.com/u/88062904?v=4" width="100px" height="100px" /><br><br>
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Taina Ribeiro</div>
                                 <div class="card-body text-primary">
                                    <h5 class="card-title">O que eu fiz?</h5>
                                    <p class="card-text">
                                             Responsável pelo design específico da página e abastecimento
                                             das informações do site.
                                            </p>                                         <div class="card-footer">
                           <a href="https://github.com/Taina245"><img src="fotos/github.png" width="30px" height="30px"/> &nbsp;<em></em></a>
                           <a href=""><img src="fotos/linkedin.png.png" width="30px" height="30px"/> &nbsp;<em></em></a>  
                            </div>
                            <!--"https://www.flaticon.com/br/icones-gratis"-->
                        </div>  
                </center>
        </div>
    </div>
</body>

</html>
