<?php 
include ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Inicial</title>
    <link rel="shortcut icon" type="imagex/png" href="fotos/Logo Tcc.png">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/pagina_inicial.css">
    <link rel="stylesheet" href="css/comecar_horta.css">
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
</head>

<body>

    <a id="top"> <div class="wrapper"></a>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div  class="sidebar-header">
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
                         <li class="active">
                           <a href="#ComecarHortaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fas fa-home"></i>
                                Começar Horta
                            </a>
                            <ul class="collapse list-unstyled" id="ComecarHortaSubmenu">
                                <a class="subMenu" href="#casa">Casa</a>
                                <a class="subMenu" href="#apto">Apartamento</a>
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
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="pagina_inicial.php">Página Inicial</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="comecar_horta.php">Começar uma Horta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre_nos.php">Sobre Nós</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!--
                Compostagem de resíduos orgânicos
            -->
            <div class="dicas-comecar">
                <h3 class="titulo-dicas">Dicas iniciais de Como Começar uma Horta</h3>
                <p class="paragrafo-dicas">
                   Mais de uma das pessoas acham que não têm força ínfima para começar uma horta
                    caseira, que dá muito trabalho, e não já tinha espaço para concretizar o feito.
                    Praticar jardinagem além de ser excelente para o meio ambiente por toda a
                    valorização ambiental que aplicamos nos micro-universos biológicos que criamos, é
                    também terapêutico.
                    Você pode se surpreender com os efeitos que a conexão com a natureza pode ter em
                    sua vida. Cientistas dizem que a exposição à bactéria Mycobacterium vaccae(presente
                    no solo) pode estimular uma produção de serotonina, o hormônio da felicidade. Este é
                    apenas uma das provas científicas sobre a relação da jardinagem e o bem-estar.
                    Algumas dicas para vocês que querem começar uma horta caseira mas está perdida na
                    largada. Dicas são atitudes cotidianas, de fácil aplicação e adaptáveis a sua realidade.

                </p>
                <h3 class="titulo-dicas">Compostagem de resíduos orgânicos</h3>
                <p class="paragrafo-dicas">
                    O processo de decomposição de matéria orgânica apresenta-se em restos de
                    alimentação na forma de um composto rico em substâncias húmicas e nutricionais de
                    plantas altamente recomendados para a adubagem.
                    Compre ou peça (tem gente que doa) algumas minhocas para realizar a compostagem
                    dos seus resíduos.
                    Você pode jogar como cascas de frutas e legumes na terra das plantas para que elas se
                    decomponham lá e gerem nutrientes. Se não quiser investir na compostagem, por qual
                    seja seus motivos, separe seus resíduos os mesmos orgânicos.
                    Se você mora em casa, jogue sempre os resíduos orgânicos (restos alimentares) na
                    terra não vai feder pelo espaço disponível. Já se decompor mais rápido com a
                    incidência de sol e chuva.
                    Farinha de casca de ovos, borra do café e água do aquário (se você tiver um) são
                    alguns fertilizantes naturais bem fáceis de se conseguir e que não vão gerar cheiro
                    forte.
                </p>
                <h3 class="titulo-dicas">Preparando o espaço</h3>
                <p class="paragrafo-dicas">
                    Você mora em casa e selecione uma parte do terreno que gostaria de transformar em horta.
                    As plantas precisam de energia para a fotossíntese, então escolhas as regiões que batem mais
                    sol em casa. Em apartamentos, selecione os destinatários e a exigência de importância.
                    Máxima drenagem de água e terra que pode ser adquirida em floriculturas, ou você pode pedir
                    para que tenha um terreno ocioso. Sobre os recipientes, vaso, caixa vira horta, bolas de argila
                    expandida no fundo.
                    O ideal é colocar uma cerca para impedir o contato dos animais com as plantas. Caso você
                    tenha animais domésticos, tente colocar a horta em lugares que eles não alcançam
                </p>
                <h3 class="titulo-dicas">Escolhendo as Sementes</h3>
                <p class="paragrafo-dicas">
                   Esta é uma etapa fundamental para o plantio. A escolha dos alimentos vai
                    depender de suas preferências pessoais, do espaço que você dispõe, da
                    incidência de luminosidade e alguns outros fatores externos.
                    Não adianta nada você querer plantar tubérculos como batatas, cenoura e beterraba, que são
                    alimentos que crescem debaixo da terra, se você não possui infraestrutura suficiente para tal.
                    Em apartamentos prefira sempre os temperos como manjericão, salsinha, coentro,
                    cebolinha, hortelã, pimenta, alecrim, tomilho, sálvia, endro, etc...
                    Alimentos mais importantes para a cozinha são alimentos que economizam dinheiro e idas ao
                    mercado na hora de preparar suas receitas.
                    Misturar temperos, frutas, leguminosas e flores pode ser uma escolha muito interessante para
                    se ver livre de pragas e insetos. Para quem tem terreno para a associação de diversas plantas é
                    tal.
                    Alecrim, erva-doce, arruda, citronela e losna são algumas das plantas que ajudam a manter os
                    insetos longe. Cosmos, cravo, capuchinha e lavanda também ajudam no controle de pragas
                    como pulgões e nematóides.
                </p>
                <h3 class="titulo-dicas">Investir no ciclo de alimentação</h3>
                <p class="paragrafo-dicas">
                    Guarde as sementes de pimentas, melancia, melão, abóboras, tomate, vágem, pepino,
                    abobrinha, etc.
                    Existem alguns alimentos que brotam de seus próprios pedaços:
                    Alecrim: separe alguns galhos de alecrim e coloque em um copo com água.
                    Troque a água de dois em dois dias e depois de uma semana estará pronto para
                    plantar. Alecrim é ótimo para fazer marinadas, temperar batatas e até fazer chá.
                    Manjericão: assim como o alecrim, basta que você coloque na água e plante ao
                    final de uma semana. Manjericão vai muito bem como molho de tomates e
                    dependendo da produtividade, você pode fazer um belo Pesto!
                    Cebolinha: O mesmo processo, a única diferença é que com a cebolinha você
                    deve deixar o copo em um lugar que pegue sol. Você deve cobrir com água
                    apenas a parte branca da cebolinha, cerca de 2,5 cm. É um ingrediente muito
                    versátil, ótimo para os preparos triviais do dia-a-dia.
                    Hortelã: basta separar algumas hastes e cortar cerca de 10 cm do comprimento.
                    Em poucos dias na água as raízes vão começar a aparecer e suas mudas estarão
                    prontas para o plantio. Hortelã é um ótimo tempero para comida árabe, sucos
                    refrescantes e sobremesas.
                </p>
                <h3 class="titulo-dicas">E não se esqueça, tome alguns cuidados básicos</h3>
                <p class="paragrafo-dicas">
                    A rega do sol prefira no final da tarde, quando a luminosidade de bem baixa. O calor do sol
                    pode cozinha como caso decida regá-las plantas durante o dia.
                    Caso tenha esquecido de regar as plantas no dia anterior e só se deu conta
                    durante o dia seguinte, espere o fim da tarde para realizar a rega.
                    Identifique as causas de seus problemas exercitando a observação de suas plantas. Às vezes
                    elas não se adaptaram ao local escolhido, suas raízes não possuem espaço para crescer.
                    Não existe sentimento mais agradável do que colher os seus próprios alimentos e saber que
                    eles estão livres de pesticidas e agrotóxicos. Mas tenha sempre em mente que os cuidados e
                    valem à pena.
                    Hortas caseiras para pegar a prática e se maravilhar com a terapia de tratamento de amanhã
                    estão mais bem difundidas, conseguimos também apresentar resultados mais simples do que
                    nunca antes.
                </p>
            </div>

            <!--Guia das Hortaliças-->
            <div class="container">
                <h5>Guia das Hortaliças</h5>
                <p class="paragrafos">
                    <p4>Existem diferentes itens que podem apontar diferenças entre as hortas rurais e as caseiras, o nosso objetivo não é elencar uma a uma, mas, ajudar você a construir a sua horta no meio urbano onde você mora.<br>
                    O grande impasse para quem mora em meios urbanos é: “Não tenho espaço em casa”, sabendo disso, temos aqui os passos básicos para que você possa começar a produzir seus alimentos, ainda que em pequena escala, na sua casa.<br>
                   </p4>
                </p>
             </div>   
                
            <div class="informacoes_div">
                <img src="Fotos/guia das hortalicas.png" height="35%" width="40%" align="right">
                <ul>
                    <il>
                        <div class="foto_informacoes">
                            <img src="Fotos/abobora.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   A <strong class="titHort">ABÓBORA</strong> possui vitaminas A, B, C, E, sais minerais 
                                    (fósforo, potássio e cálcio) e alta 
                                    concentração de caroteno.
                                    Sementes: vermífugo natural.
                                    Combate hepatite, uretrite e câncer.                   
                            </p>
                        </div>
                    </il>
                    <il>
                        <div class="foto_informacoes">
                            <img src="Fotos/abobrinha.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   A <strong class="titHort">ABOBRINHA</strong> possui vitaminas A, B, C, sais minerais
                                   (cálcio, fósforo e ferro) e rica em fosfato.
                                   Tônico para o cérebro.    <br> <br>              
                            </p>
                        </div>
                    </il>
                    <il>
                        <div class="foto_informacoes">
                            <img src="Fotos/alface.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   A <strong class="titHort" >ALFACE</strong> possui vitaminas A, complexo B e C, sais 
                                   minerais (cálcio e ferro), rica em
                                   potássio e fibras, ótimo para o 
                                   funcionamento intestinal.
                                   Baixo valor calórico, diurética e calmante.               
                            </p>
                        </div>
                    </il>
                    <il>
                        <div class="foto_informacoes">
                            <img src="Fotos/alho.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   O <strong class="titHort" >ALHO</strong> Rico em vitamina B, C e E.
                                   Reduz o colesterol, controla a pressão 
                                   sanguínea e previne a formação de 
                                   coágulos nas artérias.
                                   Tem propriedades antibióticas e 
                                   imunológicas e previne alguns
                                   tipos de câncer e doenças crônicas 
                                   associadas ao envelhecimento.                
                            </p>
                        </div>
                    </il>
                    <il>
                        <div class="foto_informacoes">
                            <img src="Fotos/beterraba.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   A <strong class="titHort">BETERRABA</strong> Rica em Vitamina A, do complexo B 
                                   e sais minerais (potássio, sódio,
                                   fósforo e ferro).
                                   Folhas: ricas em nutrientes.
                                   Indicada para casos de anemia.    
                                   <br><br>         
                            </p>
                        </div>
                    </il> <il>
                        <div class="foto_informacoes">
                            <img src="Fotos/berinjela.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   A <strong class="titHort">BERINJELA</strong> possui vitaminas A e B e rica em potássio.
                                   Ajuda no tratamento do colesterol
                                   alto, hipertensão e protege contra
                                   o câncer da próstata
                                   <br><br>                
                            </p>
                        </div>
                    </il>
                    <il>
                        <div class="foto_informacoes">
                            <img src="Fotos/brocolis.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   O <strong class="titHort">BRÓCOLIS</strong> Rico em vitaminas B, C, E, K e sais 
                                   minerais (cálcio, ferro e potássio). 
                                   Formação e manutenção
                                   de ossos e dentes. 
                                   Atua no funcionamento dos sistemas 
                                   nervoso e imunológico e elimina 
                                   compostos cancerígenos do organismo.              
                            </p>
                        </div>
                    </il>
                </ul>
               <!--FALTA COMPLETAR A LISTA DE HORTALIÇAS-->  
               <!--COLOCAR AQUI AS DICAS DE COMO SE COMEÇAR UMA HORTA-->
               <!--CASA OU APTO-->  
               <div class="horta-local">
                <h3 id="casa">Casa</h3>
                <p class="paragrafo-casa-apto">
                       A <strong class="titHort">CASA</strong>           
                </p>
                <h3 id="apto">Apartamento</h3>
                <p class="paragrafo-casa-apto">
                       A <strong class="titHort">CASA</strong>           
                </p>
                <!--Depois arrumem o design do botao usando bootstrap-->
                <a href="#top"><button class="" id="#top">Voltar ao Topo</button> </a>
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
