<html>
<head>
        <title>Bootstrap <?php echo $_GET['op']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
  <body>
     <div class="container">
        <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">
                        <img src="img/logoo2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        AstronomyInfo
                      </a>
                    </div>
                  </nav>
              </div>
            </div>
        </div>
          <div class="container">
            <div class="row">
              <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php"> &nbsp; &nbsp; &nbsp; Início <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Saiba Mais
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?op=2">Sistema Solar</a>
                        <a class="dropdown-item" href="index.php?op=3">Buracos Negros</a>
                        <a class="dropdown-item" href="index.php?op=4">Galáxias</a>
                      </div>
                    </li>
                    </ul>
                  </div>
                </nav>
             </div>
            </div>
          </div>

          <?php if (!isset($_GET['op'])) { ?>
            <div class="container">
          <div class="row">
            <div class="col">
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/firstslide.jpg"  alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/secondslide.jpg"  alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/thirdslide.jpg"  alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
          </div> 
        </div>
        <!-- Carousel -->
        <div class="container">
          <div class="row">
            <div class="col">
              &nbsp; 
            </div>
          </div>
          <div class="row">
            <div class="col">
              <figure class="figure">
                <a href="index.php?op=2"><img src="img/figure1.jpg" class="figure-img img-fluid rounded"></a>
                <figcaption class="figure-caption text-right">Nosso Sistema Solar</figcaption>
              </figure>
            </div>
            <div class="col">
              <figure class="figure">
                <a href="index.php?op=3"><img src="img/figure2.jpg" class="figure-img img-fluid rounded"></a>
                <figcaption class="figure-caption text-right">Buracos Negros</figcaption>
              </figure>
            </div>
            <div class="col">
              <figure class="figure">
                <a href="index.php?op=4"><img src="img/figure3.jpg" class="figure-img img-fluid rounded"></a>
                <figcaption class="figure-caption text-right">Galáxias</figcaption>
              </figure>
            </div>
          </div>
        </div>
        <?php 
        }else if($_GET['op'] == 2){ ?>
        
        <div class="container">
          <div class="row">
            <div class="col">
            <div class="col">
              &nbsp; 
            </div>
              <img src="img/sistemasolargif.gif" width="530px" height="300px">
              <div class="row">
                &nbsp;
              </div>
              <h3>O que é?</h3>

              O Sistema Solar é um <strong>conjunto de corpos celestes que gravitam na órbita de um sol</strong> (uma estrela).
              O nosso sistema solar é formado por oito planetas: Mercúrio, Vênus, Terra, Marte, Júpiter, Saturno, Urano e Netuno.
              Além deles, existem mais cinco planetas anões (Ceres, Plutão, Haumea, Makemake, Éris) e muitos outros astros, como satélites
              naturais, asteroides, meteoros, meteoroides e cometas.
              O Sol e todo o nosso sistema solar faz parte de uma galáxia, que se chama Via-Láctea.
            
            <div class="row">
                &nbsp;
              </div>

              
            </div>
          <div class="col">
            <div class="row">
            <div class="col">
              &nbsp; 
            </div>
              <h3>Planetas: </h3> 

              <!-- Accordion-->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Mercúrio
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Mercúrio é <strong>o menor planeta do Sistema Solar</strong> e o mais próximo do Sol. É também o planeta mais rápido, um ano de Mercúrio (giro completo ao redor do Sol) é equivalente a 88 dias terrestres. Em compensação, um dia solar do planeta dura 2 anos (176 dias terrestres).
                      Formado basicamente por ferro, pode ser visto da Terra a olho nu no início da manhã ou no fim da tarde pela sua proximidade com o Sol. A temperatura no planeta supera os 400 °C.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Vênus
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Vênus é o segundo planeta mais próximo do Sol. Além do Sol e da Lua é <strong>o corpo celeste mais brilhante no céu.</strong> Por isso, é chamado também de Estrela d'Alva, Estrela Matutina ou Vespertina, aparente no céu antes do amanhece e logo depois do entardecer.
                      A distância entre Vênus e a Terra é a menor distância entre planetas do Sistema Solar. Entretanto, Vênus é o <strong>planeta mais quente do Sistema Solar</strong>, sua temperatura média é de cerca de 460ºC, impossibilitando a visita de seres humanos no planeta.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Terra
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A Terra é o terceiro planeta mais próximo do Sol, o mais denso e o quinto maior dos oito planetas do Sistema Solar. É também o maior dos quatro planetas telúricos. Lar de milhões de espécies de seres vivos, incluindo os humanos, a Terra é o único corpo celeste onde é conhecida a existência de vida. O planeta formou-se há 4,56 bilhões de anos, e a vida surgiu na sua superfície um bilhão de anos depois.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFor">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                      Marte
                    </button>
                  </h2>
                  <div id="flush-collapseFor" class="accordion-collapse collapse" aria-labelledby="flush-headingFor" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Marte é o quarto planeta a partir do Sol, o segundo menor do Sistema Solar. Batizado em homenagem ao deus romano da guerra, muitas vezes é descrito como o "Planeta Vermelho", porque o óxido de ferro predominante em sua superfície lhe dá uma aparência avermelhada.
                      Marte é um planeta rochoso com uma atmosfera fina, com características de superfície que lembram tanto as crateras de impacto da Lua quanto vulcões, vales, desertos e calotas polares da Terra.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                      Júpiter
                    </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Júpiter é <strong>o maior planeta do Sistema Solar</strong>, tanto em diâmetro quanto em massa, e é o quinto mais próximo do Sol. Possui menos de um milésimo da massa solar, contudo tem 2,5 vezes a massa de todos os outros planetas em conjunto. É um planeta gasoso, junto com Saturno, Urano e Netuno. Estes quatro planetas são por vezes chamados de planetas jupiterianos ou planetas jovianos, e são os quatro gigantes gasosos, isto é, que não são compostos primariamente de matéria sólida.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                      Saturno
                    </button>
                  </h2>
                  <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Saturno é o sexto planeta a partir do Sol e o segundo maior do Sistema Solar atrás de Júpiter. Pertencente ao grupo dos gigantes gasosos, possui cerca de 95 massas terrestres e orbita a uma distância média de 9,5 unidades astronômicas.
                     Possui um pequeno núcleo rochoso, circundado por uma espessa camada de hidrogênio metálico e hélio.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                      Urano
                    </button>
                  </h2>
                  <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Urano é o sétimo planeta a partir do Sol, o terceiro maior e o quarto mais massivo dos oito planetas do Sistema Solar. Foi nomeado em homenagem ao deus grego do céu, Urano. Foi também o primeiro planeta a ser descoberto por meio de um <strong>telescópio.</strong>
                      </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                      Netuno
                    </button>
                  </h2>
                  <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Netuno é o oitavo planeta do Sistema Solar, o último a partir do Sol desde a reclassificação de Plutão para a categoria de planeta anão, em 2006. Pertencente ao grupo dos gigantes gasosos, o planeta é formado por um pequeno núcleo rochoso ao redor do qual encontra-se uma camada formada possivelmente por água, amônia e metano sobre a qual situa-se sua turbulenta atmosfera, constituída predominantemente de hidrogênio e hélio.
                    </div>
                  </div>
                </div>
              </div>
              <!-- Accordion -->

            </div>
          </div>
        <div class="row">
          &nbsp;
        </div>
        <?php }

        else if($_GET['op'] == 3){ ?>
        <div class="row">
            &nbsp;
          </div>
        <div class="container">
          <div class="row">
            <div class="col">
              <img src="img/buraco_negro.gif" width="530px">
              <div class="row">
                &nbsp;
              </div>
              <h3>O que é?</h3>

              Um <strong>buraco negro</strong> é uma região do espaço com um campo gravitacional tão intenso que nem mesmo a luz consegue escapar de dentro dele. 
              A intensa gravidade comprime a matéria até que não haja mais espaço entre os átomos. Corpos celestes dessa natureza podem surgir em
              decorrência da morte de <strong>estrelas supermassivas.</strong>
  
            </div>
            <div class="col">
              <div class="row">
              <h3>Estrutura: </h3> 
              
              <!-- Accordion -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Horizonte de eventos
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A fronteira do campo gravitacional do buraco negro a partir da qual não se observa nada é denominado horizonte de eventos ou ponto de não retorno. 
                      Apesar de ser, na verdade, apenas consequências gravitacionais, o horizonte de eventos é considerado parte da estrutura de um buraco negro por ser o início da área observável do fenômeno.
                      Sabe-se que seu formato é perfeitamente esférico em buracos negros estáticos e oblíquo nos buracos negros rotativos.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Singularidade
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">No centro de um buraco negro, conforme descrito pela relatividade geral, pode estar uma singularidade gravitacional, uma região onde a curvatura do espaço-tempo se torna infinita. Para um buraco negro
                      não rotativo, essa região assume a forma de um único ponto e, para um buraco negro rotativo, é borrada para formar uma singularidade de anel que fica no plano de rotação.
                      Nos dois casos, a região singular possui volume zero. Também pode ser mostrado que a região singular contém toda a massa da solução do buraco negro. A região singular pode assim ser pensada como tendo densidade infinita.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Ergosfera
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A ergosfera é uma zona que contorna o horizonte de eventos nos buracos negros rotativos, na qual é impossível um corpo
                      celeste permanecer parado. Ainda segundo a relatividade de Einstein, qualquer objeto rotativo tende a arrastar o espaço-tempo próximo a ele. Em um buraco negro rotativo,
                      esse efeito é tão forte que seria necessário que um corpo celeste se movesse no sentido contrário em uma velocidade maior que a da luz para permanecer parado.
                      É importante não confundir os efeitos da ergosfera com os efeitos do horizonte de eventos. A ergosfera não atrai objetos com o campo gravitacional. Assim, qualquer
                      coisa que entre em contato com ela será apenas deslocada no espaço-tempo e só será atraída caso cruze o horizonte de eventos.
                    </div>
                  </div>
                </div>
              </div>
              <!-- Accordion -->
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col">
            <div class="row">
              <div class="row">
                &nbsp;
              </div>
              <div class="row">
                &nbsp;
              </div>

              <div class="txt_firstpic">
                <h2>Primeira imagem de um buraco negro</h2>
                <div class="row">
                  &nbsp;
                </div>
                <p>
                  A primeira imagem de um buraco negro foi revelada no dia <strong>10 de abril de 2019</strong> pela Comissão
                  Europeia. A descoberta foi feita pelo telescópio Event Horizon, um projeto que interligou
                  <strong>oito telescópios</strong> e teve a colaboração de mais de 200 pesquisadores.
                </p>
                <p>
                  O buraco negro revelado foi encontrado no centro da galáxia <strong>Messier 87</strong>, ou M87, a uma distância
                  de 53 milhões de anos-luz da Terra. Ele mede 40 bilhões de quilômetros de diâmetro, três milhões de vezes
                  o tamanho da Terra, e sua massa é 6,5 bilhões de vezes a do Sol.
                </p>
              </div>
              <div class="row">
                &nbsp;
              </div>
              <div class="container">
              <div class="row">
              <div class="col">
              <figure class="figure">
                <img  alt="primeira foto de um buraco negro" src="img/blackholepic.jpg" height="313" width="530" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Imagem real do buraco negro localizado na galáxia M87</figcaption>
              </figure>
              </div>
              <div class="col">
                Antes da descoberta, os buracos negros eram retratados apenas por meio de animações e concepções artísticas.
                Uma das concepções artísticas que mais chegou próxima da realidade foi feita pela direção de arte do filme <strong>Interestelar</strong> 
                por meio de cálculos feitos pelo físico Kipp Thorne.
                Quando um buraco negro atrai para si o conteúdo gasoso da atmosfera de uma estrela próxima, esse gás ganha grande aceleração centrípeta em torno do
                centro de massa do buraco negro. Com o aumento de velocidade de rotação, é formado o disco de acreção. O gás presente nas estrelas está repleto de cargas
                elétricas, que, quando aceleradas, produzem ondas eletromagnéticas de todos os comprimentos de onda possíveis, inclusive a luz visível. Dessa forma, em volta
                de um buraco negro em atividade, deve ser possível observar regiões muito luminosas, de formatos complexos, pois a grande gravidade local deforma o caminho
                percorrido pela luz emitida pelos gases em rotação.
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          &nbsp;
        </div>
        <?php }

          else{ ?>
        <div class="row">
            &nbsp;
          </div>
       <div class="container">
          <div class="row">
            <div class="col">
              <img src="img/galáxia-girando-orbita.gif" width="530px">
              <div class="row">
                &nbsp;
              </div>
              Na cosmologia, uma galáxia <strong>é um grande sistema, gravitacionalmente ligado</strong>, que consiste de estrelas, remanescentes de estrelas,
              um meio interestelar de gás e poeira, e um, importante mas insuficientemente conhecido, componente apelidado de matéria escura. As galáxias variam desde as anãs, com
              até 10 milhões (107) de estrelas, até gigantes com cem trilhões (1014) de estrelas, todas orbitando o centro de massa da galáxia.
              As galáxias contêm <strong>quantidades variadas de sistemas e aglomerados estelares e de tipos de nuvens interestelares.</strong> A matéria escura parece corresponder a cerca de 90%
              da massa da maioria das galáxias. Dados observacionais sugerem que podem existir buracos negros supermaciços no centro de muitas, se não todas as galáxias. Acredita-se que eles sejam o impulsionador principal dos núcleos galácticos ativos – região compacta no centro de algumas galáxias que tem uma luminosidade muito maior do que a comum. A Via Láctea parece possuir pelo menos um desses objetos.
              As galáxias foram historicamente categorizadas segundo sua forma aparente, usualmente referida como sua morfologia visual.
            </div>
            <div class="col">
              <div class="row">
              <h3>Estrutura: </h3> 
              
              <!-- Accordion -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Via Láctea
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A Via Láctea é uma galáxia espiral, da qual o Sistema Solar faz parte. Vista da Terra, aparece como uma faixa
                        brilhante e difusa que circunda toda a esfera celeste, recortada por nuvens moleculares que lhe conferem um intrincado aspecto irregular
                        e recortado. Sua visibilidade é severamente comprometida pela poluição luminosa. Com poucas exceções, todos os objetos visíveis a olho
                        nu pertencem a essa galáxia.
                        Sua idade estimada é de mais de treze bilhões de anos, período no qual passou por várias fases evolutivas até atingir sua forma atual.
                        Formada por centenas de bilhões de estrelas, a galáxia possui estruturas diferenciadas entre si. No bojo central, que possui forma
                        alongada, há uma grande concentração de estrelas, sendo que o exato centro da galáxia abriga um buraco negro supermassivo. Ao seu
                        redor estende-se o disco galáctico, formado por estrelas dos mais diversos tipos, nebulosas e poeira interestelar, dentre outros. 
                        É nesta proeminente parte da Via Láctea que se manifestam os braços espirais. Ao seu redor encontram-se centenas de aglomerados globulares.
                        Entretanto, a dinâmica de rotação da galáxia revela que sua massa é muito maior do que a de toda a matéria observável, sendo este
                        componente adicional denominado matéria escura, cuja natureza se desconhece.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Singularidade
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">No centro de um buraco negro, conforme descrito pela relatividade geral, pode estar uma singularidade gravitacional, uma região onde a curvatura do espaço-tempo se torna infinita. Para um buraco negro
                      não rotativo, essa região assume a forma de um único ponto e, para um buraco negro rotativo, é borrada para formar uma singularidade de anel que fica no plano de rotação.
                      Nos dois casos, a região singular possui volume zero. Também pode ser mostrado que a região singular contém toda a massa da solução do buraco negro. A região singular pode assim ser pensada como tendo densidade infinita.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Ergosfera
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A ergosfera é uma zona que contorna o horizonte de eventos nos buracos negros rotativos, na qual é impossível um corpo
                      celeste permanecer parado. Ainda segundo a relatividade de Einstein, qualquer objeto rotativo tende a arrastar o espaço-tempo próximo a ele. Em um buraco negro rotativo,
                      esse efeito é tão forte que seria necessário que um corpo celeste se movesse no sentido contrário em uma velocidade maior que a da luz para permanecer parado.
                      É importante não confundir os efeitos da ergosfera com os efeitos do horizonte de eventos. A ergosfera não atrai objetos com o campo gravitacional. Assim, qualquer
                      coisa que entre em contato com ela será apenas deslocada no espaço-tempo e só será atraída caso cruze o horizonte de eventos.
                    </div>
                  </div>
                </div>
              </div>
              <!-- Accordion -->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          &nbsp;
        </div>
        <?php } ?>

        <div class="container">
        <footer class="bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-2" style="background-color: rgba(235, 235, 235, 0.808);">
            AstronomyInfo - Copyright 2022 - Todos os direitos reservados
            <a class="text-dark" href="#"></a>
          </div>
          <!-- Copyright -->
        </footer>
        </div>
        <div class="row">
          &nbsp;
        </div>
        
    </body>
</html>