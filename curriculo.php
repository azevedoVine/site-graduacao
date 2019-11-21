<?php
include_once "topo.php";
?>

<section>
    <div id="capa">
        <p class="texto-capa">GESTÃO PÚBLICA - TECNÓLOGO</p>
        <a href="https://www.vestibulares.com.br/anhanguera/"><button class="botao-capa">Inscreva-se</button></a>
    </div>
</section>

<div class="curriculo">
<h1 class="align-center">Estrutura Curricular</h1>
<button class="accordion">1º periodo</button>
    <div class="panel">
        <article>
            <p>DCP032-DIG - FUNDAMENTOS DA ANALISE POLITICA</p>
            <p>DCP033-DIG - METODOLOGIA</p>
            <p>DCP123-DIG - ASPECTOS LEGAIS DA GESTÃO PÚBLICA A</p>
            <p>DCP124-DIG - GESTÃO PÚBLICA A</p>
            <p>SOA048-DIG - FUNDAMENTOS DE ANALISE SOCIOLOGICA</p>
        </article>
    </div>

<button class="accordion">2º periodo</button>
    <div class="panel">
        <article>
            <p>DCP035-DIG - INSTITUICOES POLITICAS COMPARADAS</p>
            <p>DCP125-DIG - ASPECTOS LEGAIS DA GESTÃO PÚBLICA B</p>
            <p>ECN140-DIG - INTRODUÇÃO À ECONOMIA</p>
            <p>EST180-DIG - ESTATISTICA I</p>
            <p>SOA607-DIG - SOCIOLOGIA DAS ORGANIZACOES PUBLICAS</p>
        </article>
    </div>

<button class="accordion">3º periodo</button>
    <div class="panel">
        <article>
            <p>DCP037-DIG - ANALISE DE POLITICAS PUBLICAS</p>
            <p>DCP126-DIG - ESTADO E POLÍTICAS SOCIAIS A</p>
            <p>DCP127-DIG - GESTÃO PÚBLICA B</p>
            <p>ECN044-DIG - ECONOMIA DO BEM ESTAR</p>
            <p>ECN190-DIG - ECONOMETRIA I</p>
        </article>
    </div>

<button class="accordion">4º periodo</button>
    <div class="panel">
        <article>
            <p>DCP042-DIG - POLITICA,ECONOMIA E SOCIEDADE NO BRASIL</p>
            <p>DCP128-DIG - ESTADO E POLÍTICAS SOCIAIS B</p>
            <p>DCP129-DIG - FINANÇAS PÚBLICAS</p>
            <p>DCP130-DIG - PLANEJAMENTO PÚBLICO</p>
        </article>
    </div>

<button class="accordion">5º periodo</button>
    <div class="panel">
        <article>
            <p>DCP131-DIG - AVALIAÇÃO DE POLÍTICAS PÚBLICAS A</p>
            <p>DCP132-DIG - DEMOCRACIA DIGITAL E GOVERNO ELETRÔNICO</p>
            <p>DCP133-DIG - FORMULAÇÃO E IMPLEMENTAÇÃO DE PROGRAMAS E PROJETOS</p>
        </article>
    </div>

<button class="accordion">6º periodo</button>
    <div class="panel">
        <article>
            <p>DCP134-DIG - AVALIAÇÃO DE POLÍTICAS PÚBLICAS B</p>
        </article>
    </div>

<button class="accordion">7º periodo</button>
    <div class="panel">
        <article>
            <p>DCP135-DIG - ESTÁGIO CURRICULAR A</p>
        </article>
    </div>

<button class="accordion">8º periodo</button>
    <div class="panel">
        <article>
            <p>DCP136-DIG - ESTÁGIO CURRICULAR B</p>
        </article>
    </div>

<button class="accordion">9º periodo</button>
    <div class="panel">
        <article>
            <p>DCP089-DIG - PROJETO DO TCC</p>
        </article>
    </div>

<button class="accordion">10º periodo</button>
    <div class="panel">
        <article>
            <p>DCP137-DIG - TRABALHO DE CONCLUSÃO DE CURSO</p>
        </article>
    </div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>


<?php
    include_once "footer.php";
?>