<?php 
include ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Inicial</title>
    <link rel="shortcut icon" type="imagex/png" href="fotos/Logo Tcc.png">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/pagina_inicial.css">
    <link rel="stylesheet" href="css/carrosel.css">
    <link rel="stylesheet" href="css/rodape.css">
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
    <script src="js/index-menu.js"></script>
    <script src="js/modos_cores.js"></script>
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
                <li class="active">
                        <a href="pagina_inicial.php">
                            <i class="fas fa-home"></i>
                            Página Inicial
                        </a>
                    </li>
                         <li>
                           <a href="comecar_horta.php" >
                                <i class="fas fa-seedling"></i>
                                Começar Horta
                            </a>
                            <ul class="collapse list-unstyled" id="ComecarHortaSubmenu">
                             
                            </ul>
                                </li>
                                <li>
                         <a href="fale_conosco.php">
                            <i class="fas fa-paper-plane"></i>
                            Fale Conosco
                        </a>
                    </li>
                    <li>
                        <a href="sobre_nos.php">
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
                        <ul  class="nav navbar-nav ml-auto">
                            <li  class="nav-item active">
                                <a class="nav-link" href="#">Página Inicial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="comecar_horta.php">Começar uma Horta</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Sobre Nós</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

           <div class="conteudo-inicial">
                <div class="primeiro-conteudo">
                    <h3 id="mudaCor">Sobre as Hortas</h3>
                    <p id="mudaCor" class="paragrafo-conteudo">
                        <!--Reescrever este paragrafo-->
                        <!--https://www.harpyja.com.br/blog/sustentabilidade/dicas-sustentaveis-como-comecar-uma-horta-caseira-->
                      No começo da pandemia do COVID-19 tivemos um aumento de 53 milhões de pessoas que desenvolveram depressão e 76 milhões apresentaram ansiedade em 2020 no mundo todo. Então a maioria procurou ideias de manter a mente ocupada, e uma dessas sugestões foram de criar hortaliças em casa ou em algum outro ambiente. Pesquisas apontam um grande crescimento nas vendas em produto que sejam para cultivar hortas.
                      As hortas são geralmente estabelecidas em pequenos espaços, variando em plantas aromáticas, medicinais ou alimentícias.
                      Montar e cultivar a própria horta gera economia, traz diversos benefícios tanto ambientais como pessoais. Um exemplo disso é o aumento da qualidade de vida, uma alimentação saudável, descartando o uso de agrotóxicos ou pesticidas.
                    </p>
                </div>
                
              
                <img class="mySlides" src="fotos/foto1.jpg" width="100%" height="50%">
                <img class="mySlides" src="fotos/foto2.jpg" width="100%" height="50%">
                <img class="mySlides" src="fotos/foto3.jpg" width="100%" height="50%">
                <img class="mySlides" src="fotos/foto4.jpg" width="100%" height="50%">
                

                    <div class="segundo-conteudo">
                    <h3>Ajuda na Educação Alimentar</h3>
                    <p class="paragrafo-conteudo">Ter uma horta em casa ajuda a nos livrar dos agrotóxicos, pois, segundo os dados do Ibama, o Brasil é o
                     país a consumir a maior quantidade de agrotóxicos em números absolutos do planeta Terra.
                     Então desta maneira você estará cuidando da sua saúde e da sua família, 
                     levando em consideração de que você vai colher, produzir e consumir na mesma 
                     hora um alimento fresco e saudável e repleto de bons nutrientes.</p>
                </div>
                <div class="terceiro-conteudo">
                    <h3>Terapia</h3>
                    <p class="paragrafo-conteudo">
                       Ad Adquirir uma horta dentro de sua casa também ajuda na sua saúde mental, pois, 
                       de acordo com alguns especialistas, ter contato com o solo ajuda em uma menor concentração dos hormônios ligados ao estresse.
                       Ajuda também na influência da diminuição da ansiedade, melhora a qualidade do sono e previne os sintomas da depressão. 
                       Fora a qualidade do ar que acaba melhorando também.
</p>
                </div>
                <div class="quarto-conteudo">
                    <h3>Decora o seu ambiente</h3>
                    <p class="paragrafo-conteudo">
                     Se caso não tiver muito espaço no ambiente em que estiver pensando em montar uma horta, não se preocupe, pois, mesmo com vasos 
                       pequenos você consegue plantar um pé de manjericão, alface, cebolinha, 
                       coentro e diversas outras opções, trazendo a aparência de um ambiente decorado, até porque o verde traz uma sensação de ar fresco e harmonia. 
                    </p>
                </div>
            <div class="quinto-conteudo">
                    <h3>Preservam o Meio Ambiente</h3>
                    <p class="paragrafo-conteudo">
                     Ter uma horta caseira traz todos esses e outros demais benefícios, contando com que você ainda pode ajudar com o bem-estar 
                        do planeta, ajudando a reduzir a utilização de embalagens, contribuí para a diminuição dos gases poluentes na qual seria 
                        dos transportes dos alimentos e também ajudará a 
                        desestimular o desmatamento, poluição dos rios e dos solos causados pela agricultura intensiva.
                    </p>
                </div>
            </div>
          
            <center>
                <ul class="produtos">
                    <li>
                        <h2>Começar Horta</h2>
                        <a href="comecar_horta.php">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEilXltnwInMyn36UlyOhvtm0dMOPBEMt4YPnNnJ7k6zzYlNyVmdpRVcOeOam1QE1MUK1Ns7QyMu0JMH8bgfalB4X0pU7_Y3wqtAePIDV-Tk9otZ48tXV0PeM9Lk6UiM7lfGncfUqz6NZUhc62SnCcbzeQDtLzyFvmffgMw96Sd_-4jf0WikQF-LztFQMw/s320/foto_comecar_horta.png" height="35%" width="35%">
                        </a>
                        <p class="produto-descricao">Clique acima para dar os seus primeiros passos</p>
                    </li>   
                    <li>
                        <h2>Sazonais</h2>
                        <a href="https://ceagesp.gov.br/sazonalidade-de-compras/">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhgb24LzgD_38-gWTWXOpElUcru00yVgiBirMweUMHpXBYB-F7e4sc5F2bZlsFsul4bw087vU4OHomOLDYctnDBTghh4uFrjKG_SdLS5KHHv-qJMS778L31dVKXsei2uEJcBpO2fXJLYkaZaaWiTynJLyiTSeRJYfzY6AGalgUigu05JQgg816Fb2abHQ/s320/cesta%20dos%20sazonais.png" height="35%" width="35%">
                        </a>
                        <p class="produto-descricao">Clique acima para uma lista de alimentos</p>
                    </li>    
                </ul>  
            </center>        
        </div>
    </div>
    

   
    <script type="text/javascript">
        $(document).ready(function () {
            $('#botao-menu').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        // Carrosel
        var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
    </script>

<footer id="myFooter">
        <div class="container-fluid">
            <div class="row">
            <div class="col">
                    <h5></h5>
                    <ul>
                       <li><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgZ3XxklIUzw0TzLuzYGfCTc-638poVOjTIilJUi0yrGPTGynF8KpaIRab1PdTCH3aWH1WxVH7kjp6c494_2ZOYX43O8gXkfrPUGYqgnIiuMJ7t35uej2GaVT8nMZ5wJYgkAR4OtPW0B5gi7vZmj6qtM5WVr66tljTizBAJWOdlcMiS3LfekicYWKNQjA/s320/Logo%20Tcc.png" height="150px" width="150px"></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="https://programadorviking.com.br/">Home</a></li>
                        <li><a href="https://ceagesp.gov.br/">CEAGESP</a></li>
                        <li><a href="https://www.sp.senac.br/cursos-livres/curso-de-horta-organica-caseira#:~:text=Voc%C3%AA%20aprender%C3%A1%20a%20realizar%20cultivo,o%20plantio%20e%20a%20manuten%C3%A7%C3%A3o.&text=Posso%20fazer%20este%20curso%3F,ser%20maior%20de%2018%20anos.">Cursos</a></li>
                    </ul>
                </div>
                <div class="col">
                <h5>Mapa do Site</h5>
                    <ul>
                        <li><a href="pagina_inicial.php">Página Inicial&nbsp;<i class="fa fa-home"></i></a></li>   
                        <li><a href="comecar_horta.php">Começar Horta&nbsp;<i class="fa fa-seedling"></i></a></li>
                        <li><a href="fale_conosco.php">Fale Conosco&nbsp;<i class="fas fa-paper-plane"></i></a></li> 
                        <li><a href="sobre_nos.php">Sobre Nós&nbsp;<i class="fa fa-briefcase"></i></a></li>
                    </ul>   
                </div>
                <div class="col">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="mailto: jeffinho.je8@gmail.com">FAQ</a></li>
                    </ul>
                </div>
                
                <div class="col">
                <h5></h5>
                    <ul>
                       <li><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgZ3XxklIUzw0TzLuzYGfCTc-638poVOjTIilJUi0yrGPTGynF8KpaIRab1PdTCH3aWH1WxVH7kjp6c494_2ZOYX43O8gXkfrPUGYqgnIiuMJ7t35uej2GaVT8nMZ5wJYgkAR4OtPW0B5gi7vZmj6qtM5WVr66tljTizBAJWOdlcMiS3LfekicYWKNQjA/s320/Logo%20Tcc.png" height="150px" width="150px"></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="footer-copyright">
            <p>© 2022 ETEC Albert Einstein</p>
        </div>
        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
