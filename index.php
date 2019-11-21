<?php
include_once "topo.php";
?>
<section>
    <div id="capa">
        <p class="texto-capa">GESTÃO PÚBLICA - TECNÓLOGO</p>
        <a href="https://www.vestibulares.com.br/anhanguera/"><button class="botao-capa">Inscreva-se</button></a>
    </div>
</section>

<section>
    <h1 class="titulo-pg">SOBRE O CURSO</h1>
    <div class="icones">
        <div class="div-icone">
            <a onclick="verMais()">
                <i class="far fa-calendar-alt icone"></i>
                <p>Inscrições</p>
            </a>
        </div>

        <div class="div-icone">
            <a onclick="verMais1()">
                <i class="fas fa-briefcase icone"></i>
                <p>Àrea de Atuação</p>
            </a>
        </div>
        <div class="div-icone">
            <a onclick="verMais2()">
                <i class="fas fa-book icone"></i>
                <p>Modalidade</p>
            </a>
        </div>
        <div class="div-icone">
            <a onclick="verMais3()">
                <i class="fas fa-hourglass-start icone"></i>
                <p>Duração (semestre)</p>
            </a>
        </div>      
    </div>
    <div id="div-info" class="info">
        <article>
            <h1>Inscrições:</h1>
            <p>As inscrições para este curso já estão abertas!</p>
        </article>
    </div>
    <div id="div-info1" class="info">
        <article>
            <h1>Àrea de Atuação:</h1>
            <p>Formação Econômica e Social do Brasil.</p>
            <p>Governo e Administração Pública Brasileira.</p>
            <p>Governança.</p>
            <p>Ciência Política.</p>
            <p>Elaboração e Análise de Políticas Públicas.</p>
            <p>Direito Constitucional e Administrativo.</p>
            <p>Direito Tributário, Trabalhista e Licitações.</p>
            <p>Finanças e Orçamento Público.</p>
        </article>
    </div>
    <div id="div-info2" class="info">
        <article>
            <h1>Modalidade:</h1>
            <p>Presencial</p>
        </article>
    </div>
    <div id="div-info3" class="info">
        <article>
            <h1>Duração (semestre):</h1>
            <p>Padrão: 10 </p>
            <p>Máxima: 17</p>
        </article>
    </div>
    <div class="texto-curso">
        <article>
        <p>O curso superior de tecnologia em gestão pública da Universidade Anhanguera tem a missão de formar profissionais capazes de agir eticamente, diagnosticando cenários políticos, econômicos, sociais e legais que influenciam todas as esferas do poder público (federal, estadual e municipal).</p>

        <p>O tecnólogo em gestão pública da Universidade Anhanguera tem duração de 4 semestres (2 anos), e está dividido em dois ciclos principais de aprendizado:</p>

        <p>Formação básica: Compreende o conjunto de disciplinas com perfil mais generalista, que tem o objetivo de estabelecer os fundamentos necessários para a atuação com o setor público. Destacam-se o estudo de comportamento organizacional, matemática financeira e contabilidade.</p>

        <p>Formação específica: Compreende o núcleo de disciplinas que irão fornecer os conhecimentos técnicos necessários para que o profissional da área possa desempenhar suas funções com excelência. Dentre os principais campos de conhecimento, destacam-se análise e estudos de demandas públicas, gestão, consultoria e staff, políticas públicas e planejamento.</p>
        </article>
    </div>
</section>

<?php
    include_once "footer.php";
?>