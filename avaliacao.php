<?php
include "header.php";
?>

<main>
    <div class="containerMeu">
        <h2>Motivos para gostar de Café</h2>
    </div>


    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    #1 Como Pré-treino
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Devido às suas propriedades estimulantes, o café é um excelente aliado ao pré-treino de sua atividade física. Dando disposição para a prática de seus exercícios, comprovadamente testado por universidades renomadas no mundo inteiro. Uma das últimas que fez esse teste e comprovação, foi a Universidade de Medicina de Stanford nos EUA.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    #2 Melhoria do Humor
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>O café como bebida estimulante é um grande agente inibidor do sono. A cafeína age diretamente nos estímulos do nosso sistema nervoso central, contribuindo dessa forma para a nossa concentração e melhorando em diversas taxas nosso nível de humor.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    #3 Como Emagrecedor
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Sim, os grãos mágicos de café após devidamente preparados e transportados para nossa xícara, são bastante recomendados em dietas. Até mesmo quando combinados com outros elementos, como o óleo de coco ou a canela, inibindo a sensação de fome e contribuindo assim para o emagrecimento.
                </div>
            </div>
        </div>
    </div>


    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    #4 Ajuda a melhorar a Digestão
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">O simples hábito de tomar café pela manhã ajuda no combate à constipação, por se tratar exatamente de um líquido quente. A cafeína auxilia também na contração dos músculos, aumentando as idas ao banheiro e consequentemente na digestão, sendo um potente diurético.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    #5 Ótimo para Combate à Dores de Cabeça
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">O café como bebida estimulante é um grande agente inibidor do sono. A cafeína age diretamente nos estímulos do nosso sistema nervoso central, contribuindo dessa forma para a nossa concentração e melhorando em diversas taxas nosso nível de humor.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    #6 Saboroso
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Sem contar que um cafézinho passado na hora é uma delicinha, não é mesmo? Com leite, sem leite, sem açucar, é impressionante como consegue agradar a grande maioria com suas variadas formas de preparo. (menos café com açucar, daí já é um crime)</div>
            </div>
        </div>
    </div>

    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
            Fica a dica!
        </button>
    </p>
    <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
            <div class="card card-body" style="width: 300px;">
                <p> Bebida altamente viciante!</p>
                <p>Acompanhado com um bolinho fica DIVINO :)</p>
            </div>
        </div>
    </div>
    <div class="alert alert-primary" role="alert">
        Beba com moderação!
    </div>

</main>

<?php
include "footer.php";
?>