<?php 
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
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
                    <li>
                        <a href="apresentacao-tcc.php">
                            <i class="fas fa-book"></i>
                            Nosso TCC
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
                            <li class="nav-item">
                               <a class="nav-link" href="apresentacao-tcc.php">Nosso TCC</a>
                             </li>
                      </ul>
                    </div>
                </div>
            </nav>
            <!--
                Compostagem de resíduos orgânicos
            -->
            <div class="dicas-comecar"> 
            <h3><strong class="titHort">Dicas iniciais de Como Começar uma Horta</h3>
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
                <h3 class="titulo-dicas"><strong class="titHort">Compostagem de resíduos orgânicos</h3>
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
                <h3 class="titulo-dicas"><strong class="titHort">Preparando o espaço</h3>
                <p class="paragrafo-dicas">
                    Você mora em casa e selecione uma parte do terreno que gostaria de transformar em horta.
                    As plantas precisam de luz solar para a fotossíntese, então escolhas as regiões que batem mais
                    sol em casa. Em apartamentos, selecione os destinatários e a exigência de importância.
                    Máxima drenagem de água e terra que pode ser adquirida em floriculturas, ou você pode pedir
                    para que tenha um terreno ocioso. Sobre os recipientes, vaso, caixa vira horta, bolas de argila
                    expandida no fundo.
                    O ideal é colocar uma cerca para impedir o contato dos animais com as plantas.tenha animais domésticos, tente colocar a horta em lugares que eles não alcançam.
                </p>
                <h3 class="titulo-dicas"><strong class="titHort">Escolhendo as Sementes</h3>
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
                <h3 class="titulo-dicas"><strong class="titHort">Investir no ciclo de alimentação</h3>
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
                <h3 class="titulo-dicas"><strong class="titHort">E não se esqueça, tome alguns cuidados básicos</h3>
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
                    <p4>Trouxemos aqui um mini guia para você, e para saber mais, <a href="https://drive.google.com/file/d/18PNX17lXVxJx2bB3l3jrgW38Xsj1szsp/view?usp=sharing"><strong class="titHort"> clique aqui.</a><br>
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
                <h2 id="casa">Casa</h2>
                <p class="paragrafo-casa-apto">
               <h3><strong class="titHort"> <ul>Como cultivar uma horta em casa?</h3> </ul>
<p>- Diretamente no solo; ideal para quem tem quintal espaçoso, neste modelo tradicional, as sementes ou mudos são postas diretamente no solo.</p>
<p>- Vasos; os vasos são a escolha ideal para quem mora em casa ou apartamento, e possuem diversos tamanhos, materiais, formas e cores.</p>
<p>- Embalagens recicladas; garrafas PET, latas de refrigerante ou alimentos, sacos de leite, garrafas de vidro. Barato, rápido e sustentável.</p>
<p>- Vasos; vasos que proporcionam bom espaço são indicados para pequenas hortas com pouco espaço.</p>
<p>- Caixas de madeira; caixas e paletes de madeira grandes e baratas podem ser boas escolhas.</p>
<p>- Horta vertical; indicado para pessoas que moram em aposentos. Este modelo é composto por uma horta com área próxima ao muro. As hortas verticais podem ser postas com vasos, embalagens recicladas, construções de madeira e sapateiras.</p>
 
                <h3><ul><strong class="titHort">O que pode ser cultivado em sua casa?</h3></ul>
                <h3><strong class="titHort">Frutas:</h3><br>
                <h4>Cereja</h4>
<p>– No vaso nesse caso, iremos focar no cultivo a partir de sementes de cereja, mesmo que seja um processo que nem sempre dá resultados. Para isso, você vai precisar de um vaso, sementes de cereja, cascalho (ou casca de pinus ou folhas secas mortas) e terra.</ul></p>
 
                <h4>Pêssego</h4>
<p>- Fruta de clima temperado, o pêssego tem seu cultivo concentrado na região Sul do Brasil. Porém, graças às pesquisas realizadas nos últimos 50 anos, foram conquistadas melhorias genéticas agora desfrutadas por diversos agricultores de pessegueiros em locais com temperaturas mais elevadas.</p>
 
                <h4>Maçã</h4>
<p>- As maçãs preferem solos profundos, férteis e bem drenados e evitam solos úmidos. Uma mistura de areia e argila levemente ácida servirá muito bem. Para cultivar macieiras em recipientes, use uma mistura de solo rica em matéria orgânica com pH levemente ácido a neutro.</p>
 
                <h4>Pera</h4>
<p>- Antes de plantar, cave um buraco 20% maior que o vaso da planta. Use composto, fertilizante orgânico e um pouco de areia grossa ou pedra-pomes para ajudar na drenagem. Misture com o solo do jardim no fundo do buraco.</p>
 
                <h4>Limão</h4>
<p> – O primeiro passo, absolutamente essencial, começa ainda antes de plantar limão em casa. Confirme que as sementes são de qualidade! Opte idealmente por limões biológicos que estejam bem maduros pois este passo vai ser essencial para o sucesso da operação. Retire as sementes do limão maduro e deixe-as a secar à sombra de um dia para o outro.</p>
 
                <h4>Laranja</h4> 
<p>- O solo utilizado no plantio da laranja deve ser profundo e permeável; nos primeiros dois anos de cultivo da árvore da fruta, aparecem brotações embaixo da copa que devem ser eliminadas manualmente assim que nascerem.</p>
		 <h4> Tomate </h4>
<p>- O tomate é uma das frutas de maior consumo no mundo e fonte de vitamina A e C e de potássio. Os tomates precisam de uma boa adubação e são melhores desenvolvidas em regiões altas com incidência de luz solar. </p>
<p>Nas regiões Nordeste, Sudeste e Centro-oeste, a época de plantio pode ser no ano todo, no Sul pode ser em setembro a fevereiro e no Norte de março a julho. Sua colheita é feita de 100 a 120 dias após a plantação. </p>
    <br><h3><strong class="titHort"><ul>Hortaliças:</h3></ul> <br>
                <h4>Abóbora </h4>
<p>As abóboras são ricas em vitaminas A e possuem variedade de tipos como a seca, japonesa e cabotiá. Elas precisam de abelhas para a polinização e algumas das variedades precisam de outras espécies. Elas se desenvolvem melhor com pouca exposição ao sol, mas não resiste a geadas. </p>
<p>A época mais recomendada na região Sul é nos meses de outubro a fevereiro, no Sudeste de Setembro a março, no Nordeste de março a outubro, no Centro-oeste o ano todo e no Norte de abril a agosto.</p> 
               
                <h4>Chuchu </h4>
<p>Os chuchus são ricos em fibras, vitaminas e potássio. Precisam de muita água e são produzidos em clima ameno (entre 15 a 25 graus). Temperaturas maiores que isso faz com que eles sofram doenças por fungos. </p>
<p>A geminada dos maduros acontecem somente após 15 dias, mas só devem ser plantados quando o broto atingir 12cm. As sementes de chuchu devem ser acomodadas no sulco ou na cova, sem cobrir com terra para evitar o apodrecimento. </p>
<p>As épocas mais indicadas para o plantio nas regiões Sul, Sudeste e Centro-oeste é entre os meses de setembro a outubro. No Norte, de abril a julho e no Nordeste, o ano todo.</p>
                <h4>Pimentão </h4>
<p>O pimentão é rico em vitamina C e A, e devem ser plantados inicialmente em bandejas e depois postas para um solo bem nutrido. Desenvolvem-se melhor em temperaturas elevadas. </p>
<p>No Sul, as épocas recomendadas para plantio são de setembro a fevereiro. No Sudeste de agosto a março, de maio a setembro no Nordeste, de agosto a dezembro no Centro-oeste, e em abril a julho no Norte. </p>
<br>
                <h3><strong class="titHort">Para que você consiga fazer sua mini horta, é preciso analisar cuidadosamente o local que há disponível e que pretende usá-la. </h3>
<p>Se você tiver acesso à um jardim, canteiro ou algo do tipo, poderá usá-lo para plantar suas hortaliças ou ervas e ter o melhor resultado para as suas refeições ou demais finalidades. </p>
<p>Siga as dicas a seguir e saiba como fazer a sua mini horta. <p><br>

                <h3><strong class="titHort">Defina o espaço mais adequado para sua mini horta </h3>
<p>Para o preparo de uma mini horta em casa, é preciso ter muitos cuidados, um deles é em relação a seu preparo. É preciso atender ao que as plantas gostam e precisam, por exemplo, ervas e hortaliças precisam de 5 a 6 horas de iluminação solar todos os dias. </p>
<p>Sendo assim, é fundamental garantir que haja uma boa iluminação para que elas cresçam bonitas e saudáveis. </p><br>
                <h3><strong class="titHort">Como preparar a terra para o plantio.</h3>
<p>Feita a definição do local, chegou a hora de começar a preparação propriamente dita. </p>
<p>Você irá precisar que a terra esteja pronta, para fornecer todos os nutrientes que as plantas necessitam. </p>
<p>Utilize vara vegetal, que tenham húmus de minhocas ou adubo. Ambos são um dos principais responsáveis pela transmissão dos nutrientes. </p>
<p>Procure revolver a terra, para deixar todos os componentes bem misturados. </p><br>
                <h3><strong class="titHort">Germinando suas sementes para o plantio </h3>
<p>Podemos usar muitos recursos para que seja possível germinar suas sementes. Alguns deles são; </p>
<p>• Vasos pequenos; </p>
<p>• Sementeiras; </p>
<p>• Potes de iogurte; </p>
<p>• Caixas de ovos. </p>
<p>É importante que os recipientes tenham furos na parte inferior, para permitir que a água escoe e não se acumule. </p><br>
                <h3><strong class="titHort">Na lista abaixo, trazemos o passo a passo para fazer essa tarefa. </h3>
<p>• Coloque a terra preparada nos recipientes separados para essa função;</p> 
<p>• Utilize um pulverizador para que faça a umidificação da terra; </p>
<p>• Faça quatro furinhos e coloque neles suas sementes; </p>
<p>• Cubra os furinhos com a mesma terra e utilize novamente o pulverizador para sua umidificação </p>
<p>• Depois de germinada, transfira para sua mini horta, sempre lembrando de deixar um espaço entre cada uma delas, permitindo um bom crescimento. </p><br>

                <h3><strong class="titHort">Processo de umidificação </h3>
<p>As minis hortas gostam muito de iluminação solar. Para equilibrar o calor, deve ser realizada a umidificação delas pelo menos uma vez ao dia. </p>
<p>Se o clima estiver muito quente, o recomendado é que elas sejam regadas duas vezes, de manhã e pela tarde. Apostar nos vasos auto irrigáveis é uma boa alternativa. Esses vasos são capazes de medir e distribuir a quantidade de água que a planta precisa por dia. </p><br>
                <h3><strong class="titHort">Kit de jardinagem </h3>
<p>Uma saudável e linda horta necessita de bons equipamentos. Veja alguns dos utensílios que precisa ser adquirido para realizar os devidos cuidados.</p> 
<p>• Regador; </p>
<p>• Pás: caso seja uma mini horta, as pequenas são suficientes. Se o canteiro for grande, opte por uma enxada; </p>
<p>• Ancinho; </p>
<p>• Tesoura para podar; </p>
<p>• Faca colheitadeira. </p><br>
                <h3><strong class="titHort">Mão na massa</h3> 
<p>Aprendemos a regar, germinar, preparar a terra e conhecemos os materiais. Chegou a hora de trabalhar! </p>
<p>Escolha a erva ou hortaliça aquela que são mais práticas e necessárias para o seu cotidiano, podendo crescer em locais pequenos. Algumas delas são:</p> <br>
                <h4>Alecrim; </h4>
<p>Não deve ser plantado em temperaturas extremas, mas o plantio pode ser feito em temperaturas variasas. Evite excesso de umidade, pois o alecrim pode ter dificuldades em seu desenvolvimento em regiões de chuva.</p>
<p>Após 90 dias de plantio, o alecrim está pronto para ser colhido. Porem, o ideal é qu se espere de dois a três anos de cultivo.</p><br>

                <h4>Alface; </h4>
<p>No Verão, após 60 dias de semeadura, a colheita pode ser realizada e no inverno,se estende em torno de 80 a 90 dias. Suas folhas devem ser eliminadas e a planta deve estar bem rente ao solo, ou podendo ser arrancada com raiz. Precisa de pelo menos 4 horas direto por dia.</p><br>
               <h4>Alfazema; </h4>
<p>Podendo ser plantada em locais de alta temperatura, a alfazema se faz resistente e passam por geadas. Isso faz com que ela seja plantada em muitos locais.</p>
<p>Para a geminação, leva-se de 15 a 30 dias. Você pode colher durante o ano o todo, sempre cortando as pontas dos galhos.</p><br>

                <h4>Cebolinha-verde; </h4>
<p>Após o plantio, a colheita de cebolinha-verde pode ser feita depois 90 ou 120 dias dependendo das condições.</p>
<p>Precisa de luz solar direta por algumas horas por dia. Elas crescem melhor em temperaturas variadas entre 13°C a 24°C. Podem suportar temperaturas altas e baixas, porem em climas quentes nao produzem flores.</p><br>

                <h4>Hortelã; </h4>
<p>Em climas quentes e úmidos, a hortelã pode crescer em menos tempo e com folhas vistosas. Podem ser plantadas o ano todo, pois tolera bem ao calor e ao frio.</p>
<p>Elas ser colhidas após 20 dias e podem ficar anos produzindo sem parar.</p><br>

                <h4>Salsa; </h4>
<p>Podendo alcançar de 12 a 16 cm de altura, o plantio da salsa pode durar de 60 a 90 dias. Atingindo esses requisitos, ela está pronta para colheita e consumo.</p>
<p>A salsa gosta de lugares ilumiados, o mais adequado é coloca-la ao sol. Ela tem um bom crescimento em regiões de clima temperado, onde a temperatura prevalece na faixa de 10°C e 24°C.</p>
<p>É possível também plantar alguns legumes, como cenouras, ou frutas, como o tomate, mas um espaço mais amplo será necessário. </p>
<p>Porém, comece com as ervas até que consiga mais experiência e, com o passar do tempo, vá aumentando a variedade.</p>

                <h2 id="apto">Apartamento</h2>
                <p class="paragrafo-casa-apto">
                </p>
                                <p>

                  <h3><strong class="titHort"><ul>Como cultivar uma horta em seu apartamento?</ul> </h3>
                  <p>Já pensou em fazer sua própria horta em um espaço que está vazio em seu apartamento? Aqui iremos trazer algumas dicas sobre espaços para pode montar sua horta, dica de vasos e também do que plantar em sua horta e como cuidar dela.
</p><br>
                  
                  <h4><strong class="titHort">  1- Busque locais que batem raios de sol.</h4>
                    <p>Para que sua horta dê certo, é preciso colocar suas plantações em um local do seu apartamento em que bata sol pelo menos 4 horas por dia, escolha lugares como varanda ou próximo de janelas, pois os vegetais plantados necessitam dessa quantidade de tempo sob exposição à luz do sol para ajudar no crescimento.</p>
                  <div class="foto_informacoes">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhXLyHMGKQKG80NQWbuxR6POW38m5heGBDhbXNeu2v8x2IG-tBprnVjNufvlCpHXI5uFV11lKEPGacK5hop2K9R_gdo2GaWK0uezUJb51CyR5aNTN-FCemwKEUz2Dxvx6u_W-Fh2A7yc1OXm_DVHVEd_ncXONWVCdvrXuvPoXnfo_KhcNnfVCwnX34Q3w/s320/sol.png" alt="Imagem Sol" height="5%" width="10%" align="left">  <br>
                  </div><br><br><br>
                  
  <h4><strong class="titHort">2- Escolha dos vasos.</h4>
<p>Cultivar uma horta em vasos é uma tendência no apartamento. Neste caso, é aconselhável escolher vasos furados para que a água irrigada possa escoar.</p>
<p>Outra consideração importante é a profundidade do vaso para permitir que as raízes cresçam, normalmente vasos de 7 a 15 cm de profundidade podem acomodar a maioria das ervas ou temperos.</p>
                  <div class="foto_informacoes">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhgB_kmL-gLikEbSgjPR4GzIWE9KeTrNfpigi0cJ3iFzrVXE56-3Dt3G2vEPWfzgQ9wwR_ItoFyRyI-VxhsVye7PbOj1ilu7jvQ92xKiLwPkVuGgCGZZByu0G7RbbG3a4_WE92oRCHqcSmXvLCh7AC-v5t4YwsGm86WTRDm9T4SPG46ytiPtZ_Th7iWjQ/s320/vasos.png" height="5%" width="10%" align="left">  <br>
                  </div>  </div><br><br><br>
     
  <h4><strong class="titHort">3- Escolha das terras.</h4>
<p>É preciso escolher uma terra com base na qualidade do que você quer comer, a plantas necessariamente precisam de uma base rica em nutrientes (nitrôgenio, oxigênio, fósforo, entre outros) para que cresçam bem. Neste sentido a terra deve ter um aspecto de esponja para ajudar na entrada de oxigênio e para manter uma boa umidade.</p>
                  <div class="foto_informacoes">
                  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh6JNEgeBxIvs4NrGzw_chyCpq6MS9_oUdrirGzYRJHSiPES63ONFoBt016bfzPire_JhYmbX0ySS80Lt41yWtUfL_R9anvdoEaN1EiO3zScBcUAnURhQm1FtFvdT-1rXqivwwMrFsXIBzvAqjb3o4uFBQsH9VxuJZ_VvX285O2xZyduCwKSTXOOyAWHg/s320/adubo.png" height="5%" width="10%" align="left">  <br>
                  </div>  </div><br><br><br>
<ol>
                  <h3><strong class="titHort"><ul>Vamos por a mão na massa?</h3> </ul><br>
    <h4><strong class="titHort">1° Passo: preparação das terras</h4><br>
        <h5>Areia:</h5>
    <p>Necessária para drenar a água e ajudar na fixação das raízes;</p><br>
        <h5>Terra comum e terra vegetal:</h5>
    <p>Importante para garantir a umidade necessária à planta além de fornecer as substâncias nutritivas básicas para o crescimento da planta;</p><br>
       <h5>Adubo orgânico (compostagem, húmus de minhocas, estercos, etc):</h5>
    <p>Auxilia com os nutrientes necessários para o crescimento saudável da planta junto à terra;</p><br>
        <h5>Brita ou argila expandida:</h5>
    <p>Para forrar o fundo do vaso;</p><br>
        <h5>Cobertura morta (folhas secas, serragem de madeira, grama cortada):</h5>
    <p>Forma uma proteção que preserva a umidade do solo e reduz a ação de fungos, crescimento de plantas daninhas e a proliferação de insetos;</p><br>
        <h5>Vaso:</h5>
    <p>Escolha o tamanho ideal, com furos no fundo como uma forma de escape da água;</p> <br>
        <h5>Pedaço de manta bidin ou tecido de algodão:</h3>
    <p>Para reter a umidade do substrato do vaso.</p><br>

    <h4><strong class="titHort">2° Passo: como fazer?</h4><br>
    <p>1 - Coloque a brita ou argila expandida no fundo do vaso;</p>
    <p>2 - Cubra com o retalho de tecido de algodão ou manta bidin;</p>
    <p>3 - Coloque no vaso a maior parte do solo (mistura de areia, terra e adubo orgânico), sem compactá-lo. Misture a areia e os 2 tipos de terra, na proporção 1:1:1;</p>
    <p>4 - Plante as mudas ou as sementes, conforme as instruções do fornecedor;</p>
    <p>5 - Acrescente a parte restante do solo; deixando a camada fofa;</p>
    <p>6 - Regue e coloque a forragem (folhas secas, serragem de madeira, podas de grama);</p>
    <p>7 - Acomode o vaso em um lugar com a iluminação adequada para o tipo de planta.</p><br>
	

    <h4><strong class="titHort">4 - Escolhas entre sementes ou brotos.</h4>
<p>Para pessoas que estão iniciando nessa parte de plantação e que desejam ter resultados rápidos, é indução começar com brotos. Determinadas plantas têm essa opção, como alface, cebola e tomate.</p>
<p>É necessário tomar cuidado ao plantar os brotos para que não machuquem as suas raízes. Para que isso não aconteça é legal que façam buracos grandes na terra para quando forem colocar os brotos e em seguida pressione um pouco o substrato que se encontra ao redor e por fim molhe com água.</P>
<br>

    <h4><strong class="titHort">5 - Preste bem atenção na quantidade de água.</h4>
<p>É necessário verificar a quantidade de água de cada planta, pois nem todas contam com o mesmo tipo de regras. Tem algumas que precisam que as raízes sejam molhadas e outras não.</p>
<p>É legal verificar a região do país em que você mora e as estações do ano, pois temos plantas que precisam de mais ou menos água e dependem da temperatura do ambiente e do nível de umidade.</p> 
<p>É recomendado regar sempre seu plantio durante a manhã ou no final de tarde, pois é dessa forma a água não irá evaporar durante o calor do dia.</p>
<br>

    <h4><strong class="titHort">6 - Adubação</h4>
<p>As plantas precisam extrair do solo os nutrientes que a ajudam a crescer. Dessa forma à medida que são colhidas, elas precisam de mais nutrientes para crescerem novamente. </p>
<p>Esse é um ciclo continuo fazendo com que o solo empobreça, consequentemente, os nutrientes dos vegetais também. E assim a adubação se torna importante, já que pra fornece os nutrientes para as plantas em vasos.</p><br>

    <h2><strong class="titHort"><ul>O que pode ser cultivado em apartamento?</h2></ul>
<br>

    <h3><strong class="titHort">Frutas</h3><br>
    <h4>Morango</h4>
<p>O vaso de morango pode ter por volta de 20 ou 30 centímetros, e a planta não fica muito alta, é necessário usar terra de qualidade. A colheita pode ocorrer o ano todo, porém, é mais comum entre os meses de maio e outubro.</p>
<br>
    <h4>Amora</h4>
<p>É uma fruta que tem boa adaptação e que cresce de maneira semelhante ao morango.</p>
<p>A colheita da amora começa em outubro e vai até dezembro. Para colher, é preciso ter delicadeza.</p>
<p>Essa e outras podem ser plantadas em vasos e tem que ficar atento ao crescimento e questão da altura, pois temos alguns frutíferos que podem crescer até 2 metros e temos os frutíferos rasteiros como o morango. Basta ficar atento na hora de escolher o tipo de frutíferos.</p>
<br>

    <h3><strong class="titHort"><ul>Temperos:</h3></ul>
<br>
    <h4>Manjericão</h4>
<p>Para ser cultivado o manjericão, é preciso de um local com bastante exposição solar. Lembrar de deixa tomar luz pelos menos 3 horas por dia, não se esquecer de regar diariamente. O manjericão precisa de bastante água só é preciso ficar atento e tomar cuidado para não deixa o solo encharcado.</p>
<br>
    <h4>Salsinha</h4>
    <p>Salsa é uma planta bem delicada. Deve ser colocado em local com sombra, assim podendo receber luminosidade, só não pode ficar sempre exposto em luz solar. O solo deve estar sempre úmido mas sem encharcar, e devido às duas raízes profundas é bom deixá-la sozinha em um vaso.</p>
<br>
    <h4>Coentro</h4>
    <p>As folhas de coentro são semelhantes à salsa, mas têm um sabor diferente e distinto. O coentro gosta de climas quentes e luz solar direta. Ao plantar, é importante manter o solo úmido; mas, uma vez bem desenvolvido, reduza a frequência e a quantidade de regas.</p>
<br>
    <h4>Pimenta</h4>
    <p>Dedo-de-moça, biquinho e tabasco são as mais indicadas para se cultivar em hortas pequenas.</p>
    <p>DICA: Temperos são os mais fáceis de cultivar, pois não precisam ser replantados, basta colher as folhas do pé.</p>
<br>
	 <h4>Orégano </h4>
<p>É uma hortaliça que pode atingir de 20 a 80cm. Seu solo deve ser bem drenado e fértil, levemente úmido, portanto, irrigue com frequência.</p> 
<p>O orégano pode crescer em solos pobres e quanto ao pH, o mais recomendado é que esteja entre 6 e 8. O orégano se desenvolve em clima ameno ou quente, o ideal é entre 21 e 25°C, mas também pode ser cultivado na faixa de 4 a 32°C. Deve receber luz solar direta por algumas horas por dia. </p>
<p>Dica: Solo calcário faz com que a planta cresça melhor.</p><br>
    <h3><strong class="titHort"><ul>Hortaliças:</h3></ul> <br>
    <h4>Alface</h4>
<p>É uma planta anual, portanto pode ser plantado o ano todo, existindo variedades específicas para climas temperados e subtropicais, quanto para clima mais ameno.</p>
<p>A recomendação é escolher os solos de textura média, com aspecto fofo, de baixa acidez e elevado teor de matéria orgânica. Leve em consideração o fácil acesso de água para irrigações.</p>
<p>De ciclo curto, no verão, a colheita ocorre em períodos de 60 a 70 dias depois do início do cultivo e, no inverno, se estende em torno de 80 a 90 dias.</p>
<p>Cultivada em vaso e até em caixotes desde que estes tenham no mínimo 25 cm a 30 cm de profundidade.</p>
<br>
    <h4>Couve-manteiga</h4>
<p>A couve-manteiga deve ser plantada em vasos com, pelo menos, 25 centímetros de diâmetro e de altura. Este tamanho permite que a planta cresça melhor, visto que suas folhas crescem até um metro.</p>
<p>No caso de deficiência de nutrientes, aposte na adubação orgânica frequente. Mas, se o problema for calor excessivo, mude o vaso de lugar. Durante os períodos mais quentes do dia, mantenha a planta sob a sombra.</p>
<p>Se o problema for excesso de rega, a couve não conseguirá se desenvolver, por isso o melhor é recomeçar o plantio.</p>
</ol>
                </p>


                <!--Depois arrumem o design do botao usando bootstrap-->
                <a href="#top"><button class="primary" id="#top">Voltar ao Topo</button> </a>
    </div>

    </div>
    </div>
    </div>

    

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
   
    <script type="text/javascript">
        $(document).ready(function () {
            $('#botao-menu').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
