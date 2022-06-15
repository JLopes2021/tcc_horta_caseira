<?php 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Começar uma Horta</title>
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
                    Algumas dicas para vocês que querem começar uma horta caseira mas estão perdidos na
                    largada. Dicas são atitudes cotidianas, de fácil aplicação e adaptáveis à sua realidade.

                </p>
                <h3 class="titulo-dicas">Compostagem de resíduos orgânicos</h3>
                <p class="paragrafo-dicas">
                    O processo de decomposição de matéria orgânica apresenta-se em restos de
                    alimentação na forma de um composto rico em substâncias húmicas e nutricionais de
                    plantas altamente recomendados para a adubagem.
                    Compre ou peça (tem gente que doa) algumas minhocas para realizar a compostagem
                    dos seus resíduos (as mais recomendadas são as californianas).
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
                    As plantas precisam de luz solar para a fotossíntese, então escolhas as regiões que batem mais
                    sol em casa. Em apartamentos, selecione os destinatários e a exigência de importância.
                    Máxima drenagem de água e terra que pode ser adquirida em floriculturas, ou você pode pedir
                    para que tenha um terreno ocioso. Sobre os recipientes, vaso, caixa vira horta, bolas de argila
                    expandida no fundo.
                    O ideal é colocar uma cerca para impedir o contato dos animais com as plantas.tenha animais domésticos, tente colocar a horta em lugares que eles não alcançam.
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
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjXWyuTcBO3_CjLpPA7VBn3Xh6eWMUvyp7xvs-oYEmMgkXUCgCKeU8jksqXG5Yqdt62FTdnZrZkrMOfBJJ4tk2r3FBWL3t_OfiAH-BUBejvzUDoHGePaB71IL8v0fk9UjEMr1w5JfCyP0mh4gWtXogG7Rpra8MtORuT7wT0RP92TLZVs34v_vy4kvqs1A/s320/guia%20das%20hortalicas.png" height="35%" width="40%" align="right">
                <ul>
                    <il>
                        <div class="foto_informacoes">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiEF5B8TqyAVEaGy0LvlTjhF8_H0biz1szf0tUiyEJ51279GwjcdAh7eVnhlk4WucoX9-rYnhXo-uZFwXBSl9oSB4p3KsyzCQyPjcQfLAUrIT1LdkpP0ngUkZJlsZ-iD7XaCDr4gITfh7SxUbNezQsFHe9Yk3yofwi5KbKRTWWvXkvMmrD0CZCLnYlhjQ/s320/abobora.png" height="5%" width="10%" align="left">  <br>
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
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEie1VHOCxmtL6WUbfzXcUKAAiLiOav31d_fKQXsyBS0AgmshURmqmHuATwJ4P866iIRcVtUv6GZbf9IiqrthAEhp4hVoOr4bzpVfGTsWFwmxg5zSdJVmK1dJJCDSFhUasp-SSlsWEvXes8l95qDQdqBDEnk5tZ8LJfSfpPCkJRwtz1QScMpoRbgPBikvQ/s320/abobrinha.png" height="5%" width="10%" align="left">  <br>
                            <p class="p_foto_infos">
                                   A <strong class="titHort">ABOBRINHA</strong> possui vitaminas A, B, C, sais minerais
                                   (cálcio, fósforo e ferro) e rica em fosfato.
                                   Tônico para o cérebro.    <br> <br>              
                            </p>
                        </div>
                    </il>
                    <il>
                        <div class="foto_informacoes">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi49-riQY9no-8TLhGlfoI7cyYjUn7zrIKX7XITGRN1R5DD8gzwjJGWr3Ep86VKRUx1_jZexL16KWWTBIokD2bt9ZOj1omb9xqQhqGLzD2eAQkctvW-jXwmSeMgC8FeaUbn3c11WgwRh7flot0stjlEkxIL2fiU9kTZ_RPFeg_Z4VETtpwdmm95LlYJKA/s320/alface.png" height="5%" width="10%" align="left">  <br>
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
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgzdLScfaHcUfCc5Dw5lVYEwg7A71gdFynuv45SW-rqaWeXoolBZ2kY5-ipQRi-DJbjx2gf5TpF3IsH-gYOFZSFX0y8ZA7N2OQOLowg-TlSO5ZgBS-6FRgqxZuGZ8MmwM3zqfDmW2ePsFMWC8MQAaps77mp_xRVKM_a3IG5Rn4yw6LDdUbAbqBJ5nRWQg/s320/alho.png" height="5%" width="10%" align="left">  <br>
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
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg0FImCjTCMObrmOvcDqktQedzDevp8on4zp9D-fzpVlKFqfsgJnfLNlI8bbO8wWX0qxN2i7jHt2lG98i9h7498pAa9fKQKsFTndE8Mll9HasRYS6Ik1pOERpuBew0GO6Vyr3HOxFByB3TmEzeInWLx2hDOrgiHE2whJTLxIXup2z3m9u2hk1uSi00h-A/s320/beterraba.png" height="5%" width="10%" align="left">  <br>
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
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg2pEZK9u9oCw9y4D-dZFS8T8U80ZpJGykoQGP9ADSj0guOkDM0e9UZgwpp9p8X1vbmubaBoqDXk1XttahJCU9JURzJOBkpLFEhqh_UqXz0ioYwPImZtId7TMCrhfVFxDAneLUKpx9XK_ovJ6506aIRwgxmlc9hpNdXWsGWcLH3lPrfYQ2igxsMHRDHaQ/s320/berinjela.png" height="5%" width="10%" align="left">  <br>
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
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgi1d-o9Q16dAvj-uncfmSJEKetu8bw9PbxReJ5sSK0d-nJWMheis7lCBYfwy9xJjGLyzZqDwaHCCLl8lQHphmeiS_cTYTBuPAkT2mAASDuWMpf53JEyjzqbRfNI7cKWuLTR5vf9zqpgpmg3X_crH2C9zjb_68TNGz-ul1y57cB018Gagd9n4TKyQghEQ/s320/brocolis.png" height="5%" width="10%" align="left">  <br>
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
                      O <strong class="titHort">Apartamento</strong>           
                </p>
                                <p>

                  <h3> <ul>Como cultivar uma horta em seu apartamento?</ul> </h3>
                  <p>Já pensou em fazer sua própria horta em um espaço que está vazio em seu apartamento? Aqui iremos trazer algumas dicas sobre espaços para pode montar sua horta, dica de vasos e também do que plantar em sua horta e como cuidar dela.
</p>
                  
                  <p>
                  1- Busque locais que batem raios de sol.
Para que sua horta dê certo, é preciso colocar suas plantações em um local do seu apartamento em que bata sol pelo menos 4 horas por dia, escolha lugares como varanda ou próximo de janelas, pois os vegetais plantados necessitam dessa quantidade de tempo sob exposição à luz do sol para ajudar no crescimento.
                  </p>
                  <div class="foto_informacoes">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhXLyHMGKQKG80NQWbuxR6POW38m5heGBDhbXNeu2v8x2IG-tBprnVjNufvlCpHXI5uFV11lKEPGacK5hop2K9R_gdo2GaWK0uezUJb51CyR5aNTN-FCemwKEUz2Dxvx6u_W-Fh2A7yc1OXm_DVHVEd_ncXONWVCdvrXuvPoXnfo_KhcNnfVCwnX34Q3w/s320/sol.png" alt="Imagem Sol" height="5%" width="10%" align="left">  <br>
                  </div><br><br><br>
                  
  <p>
                  2- Escolha dos vasos.
Cultivar uma horta em vasos é uma tendência no apartamento. Neste caso, é aconselhável escolher vasos furados para que a água irrigada possa escoar.
Outra consideração importante é a profundidade do vaso para permitir que as raízes cresçam, normalmente vasos de 7 a 15 cm de profundidade podem acomodar a maioria das ervas ou temperos.
  
                </p>
                  <div class="foto_informacoes">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhgB_kmL-gLikEbSgjPR4GzIWE9KeTrNfpigi0cJ3iFzrVXE56-3Dt3G2vEPWfzgQ9wwR_ItoFyRyI-VxhsVye7PbOj1ilu7jvQ92xKiLwPkVuGgCGZZByu0G7RbbG3a4_WE92oRCHqcSmXvLCh7AC-v5t4YwsGm86WTRDm9T4SPG46ytiPtZ_Th7iWjQ/s320/vasos.png" height="5%" width="10%" align="left">  <br>
                  </div>  </div><br><br><br>
     
  <p>
                  3- Escolha das terras.
É preciso escolher uma terra com base na qualidade do que você quer comer, a plantas necessariamente precisam de uma base rica em nutrientes (nitrôgenio, oxigênio, fósforo, entre outros) para que cresçam bem. Neste sentido a terra deve ter um aspecto de esponja para ajudar na entrada de oxigênio e para manter uma boa umidade.
  
                </p>
                  <div class="foto_informacoes">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh6JNEgeBxIvs4NrGzw_chyCpq6MS9_oUdrirGzYRJHSiPES63ONFoBt016bfzPire_JhYmbX0ySS80Lt41yWtUfL_R9anvdoEaN1EiO3zScBcUAnURhQm1FtFvdT-1rXqivwwMrFsXIBzvAqjb3o4uFBQsH9VxuJZ_VvX285O2xZyduCwKSTXOOyAWHg/s320/adubo.png" height="5%" width="10%" align="left">  <br>
                  </div>  </div><br><br><br>


                  <h3> <ul>Vamos por a mão na massa?</ul> </h3>

<ol>Preparação das terras
<p>1º Passo</p>
</ol>
<div class="lista-acoes">
    <li>Areia: necessária para drenar a água e ajudar na fixação das raízes;</li>
    <li>Terra comum e terra vegetal: importante para garantir a umidade necessária à planta além de fornecer as substâncias nutritivas básicas para o crescimento da planta;</li>
    <li>Adubo orgânico (compostagem, húmus de minhocas, estercos, etc): auxilia com os nutrientes necessários para o crescimento saudável da planta junto à terra;</li>
    <li>Brita ou argila expandida: para forrar o fundo do vaso;</li>
    <li>Cobertura morta (folhas secas, serragem de madeira, grama cortada): forma uma proteção que preserva a umidade do solo e reduz a ação de fungos, crescimento de plantas daninhas e a proliferação de insetos;</li>
    <li>Vaso: escolha o tamanho ideal, com furos no fundo como uma forma de escape da água;</li> 
    <li>Pedaço de manta bidin ou tecido de algodão: para reter a umidade do substrato do vaso.</li>
</div>

<ol><p>2-Passo</p></ol>
<div class="lista-acoes">
    <li>Coloque a brita ou argila expandida no fundo do vaso;</li>
    <li>Cubra com o retalho de tecido de algodão ou manta bidin;</li>
    <li>Coloque no vaso a maior parte do solo (mistura de areia, terra e adubo orgânico), sem compactá-lo. Misture a areia e os 2 tipos de terra, na proporção 1:1:1;</li>
    <li>Plante as mudas ou as sementes, conforme as instruções do fornecedor;</li>
    <li>Acrescente a parte restante do solo; deixando a camada fofa;</li>
    <li>Regue e coloque a forragem (folhas secas, serragem de madeira, podas de grama);</li>
    <li>Acomode o vaso em um lugar com a iluminação adequada para o tipo de planta.</li>
</div><br>
	

<ol><p>4- Escolhas entre sementes ou brotos.</p></ol>

Para pessoas que estão iniciando nessa parte de plantação e que desejam ter resultados rápidos, é indução começar com brotos. Determinadas plantas têm essa opção, como alface, cebola e tomate.
É necessário tomar cuidado ao plantar os brotos para que não machuquem as suas raízes. Para que isso não aconteça é legal que façam buracos grandes na terra para quando forem colocar os brotos e em seguida pressione um pouco o substrato que se encontra ao redor e por fim molhe com água.
<ol><p>5- Preste bem atenção na quantidade de água.</p></ol>
É necessário verificar a quantidade de água de cada planta, pois nem todas contam com o mesmo tipo de regras. Tem algumas que precisam que as raízes sejam molhadas e outras não. 
É legal verificar a região do país em que você mora e as estações do ano, pois temos plantas que precisam de mais ou menos água e dependem da temperatura do ambiente e do nível de umidade. 
É recomendado regar sempre seu plantio durante a manhã ou no final de tarde, pois é dessa forma a água não irá evaporar durante o calor do dia.</li>
<ol><p>6- Adubação</p></ol>
As plantas precisam extrair do solo os nutrientes que a ajudam a crescer. Dessa forma à medida que são colhidas, elas precisam de mais nutrientes para crescerem novamente. 
Esse é um ciclo continuo fazendo com que o solo empobreça, consequentemente, os nutrientes dos vegetais também. E assim a adubação se torna importante, já que pra fornece os nutrientes para as plantas em vasos. </li>
<ol><p>Quais são as plantas que podem ser cultivadas em apartamento?</p></ol>
<ol><p>Frutos</p></ol>
<div class="">
•	Morango
O vaso de morango pode ter por volta de 20 ou 30 centímetros, e a planta não fica muito alta, é necessário usar terra de qualidade. A colheita pode ocorrer o ano todo, porém, é mais comum entre os meses de maio e outubro. </div> <br>
<div class = ""> •	Amora
 É uma fruta que tem boa adaptação e que cresce de maneira semelhante ao morango.
A colheita da amora começa em outubro e vai até dezembro. Para colher, é preciso ter delicadeza.
Essa e outras podem ser plantadas em vasos e tem que ficar atento ao crescimento e questão da altura, pois temos alguns frutíferos que podem crescer até 2 metros e temos os frutíferos rasteiros como o morango. Basta ficar atento na hora de escolher o tipo de frutíferos. </div><br><br>
<div class= "">Temperos
<div class ="">Manjericão
Para ser cultivado o manjericão, é preciso de um local com bastante exposição solar. Lembrar de deixa tomar luz pelos menos 3 horas por dia, não se esquecer de regar diariamente. O manjericão precisa de bastante água só é preciso ficar atento e tomar cuidado para não deixa o solo encharcado.</div><br><br>
<div class= "">•	Salsinha
Salsa é uma planta bem delicada. Deve ser colocado em local com sombra, assim podendo receber luminosidade, só não pode ficar sempre exposto em luz solar. O solo deve estar sempre úmido mas sem encharcar, e devido às duas raízes profundas é bom deixá-la sozinha em um vaso.</div> <br><br>
<div class="">•	Coentro
As folhas de coentro são semelhantes à salsa, mas têm um sabor diferente e distinto. O coentro gosta de climas quentes e luz solar direta. Ao plantar, é importante manter o solo úmido; mas, uma vez bem desenvolvido, reduza a frequência e a quantidade de regas.</div> <br><br>


<div class="">•	Pimenta
Dedo-de-moça, biquinho e tabasco são as mais indicadas para se cultivar em hortas pequenas.
DICA: Temperos são os mais fáceis de cultivar, pois não precisam ser replantados, basta colher as folhas do pé.</div><br><br>
<ol><p>Hortaliças</p></ol>
<div class="">•	Alface
É uma planta anual, portanto pode ser plantado o ano todo, existindo variedades específicas para climas temperados e subtropicais, quanto para clima mais ameno.
A recomendação é escolher os solos de textura média, com aspecto fofo, de baixa acidez e elevado teor de matéria orgânica. Leve em consideração o fácil acesso de água para irrigações.
De ciclo curto, no verão, a colheita ocorre em períodos de 60 a 70 dias depois do início do cultivo e, no inverno, se estende em torno de 80 a 90 dias.
Cultivada em vaso e até em caixotes desde que estes tenham no mínimo 25 cm a 30 cm de profundidade.</div><br><br>
<div class ="">•	Couve-manteiga
A couve-manteiga deve ser plantada em vasos com, pelo menos, 25 centímetros de diâmetro e de altura. Este tamanho permite que a planta cresça melhor, visto que suas folhas crescem até um metro.
No caso de deficiência de nutrientes, aposte na adubação orgânica frequente. Mas, se o problema for calor excessivo, mude o vaso de lugar. Durante os períodos mais quentes do dia, mantenha a planta sob a sombra.
Se o problema for excesso de rega, a couve não conseguirá se desenvolver, por isso o melhor é recomeçar o plantio.
</div><br><br>



<br><br>
Sem ideias de como deixa o seu apartamento decorado? Aqui vão umas dicas!

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
