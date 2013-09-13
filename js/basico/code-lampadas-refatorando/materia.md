Code - A lâmpada (refatorando)
=============================

Estou insistindo neste pequeno trecho de código com o intuito de facilitar o aprendizado. Se você já lêu a
matéria introdutória e a matéria anterior, então já conhece o código e terá menos trabalho para entender a matéria atual.
Acredito que este "menos trabalho" lhe ajudará em muito pois você focará os assuntos novos e não o código em si.

Abaixo segue o código original que vamos trabalhar:

<div class="code">
<h6>JS</h6>
<pre>
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src = "../../imagens/pic_bulboff.gif";
    } else {
        element.src = "../../imagens/pic_bulbon.gif";
    }
};
</pre>
</div>


*O que podemos melhorar nesse código ?*

*Mas melhorar em que sentido ?*

Você mudaria esse código? 

Mas qual o objetivo da mudânça?

Pare e reflita um pouco!


O que vamos aprender ?
--------------------

Ouviremos falar de...

* refatoração
* TDD

e um pouco de:

* orientação a objeto
* propriedades e métodos
* como organizar seu código


### Refatoração e TDD (primeiro contato)

Quando escrevemos um código e, posteriomente, voltamos para ajustar algumas coisas, estamos praticando o *refactoring*.
Quero dizer, estamos refatorando o código. O conceito intuitivo da palavra traz consigo a idéia de que "refatorar" é
simplificar uma expressão. Não é isso o que vem a sua mente ?

OK, mas simplificar o que exatamente? E de que forma?

Refatorar é um arte e o seu mestre chama-se Martin Fowler, há um manual completo dizendo como, quando e porque refatorar
o seu código fonte. Obviamente, não vamos nos deter nisso agora, mesmo porque é cedo para adentrarmos nesse assunto.

<div class="imagem">
    <img src="../../imagens/refactoringBook.jpg" alt="Livro de Martin Fowler" />
    <p>Livro: Refatoração, aperfeiçoando o projeto de código existente (Martin Fowler).</p>
</div>


Mas, repondendo a pergunta, vamos alterar o ćodigo no sentido de clareza, pelo menos inicialmente. O problema é que
não vamos utilizar nenhuma metodologia para isso, ou seja, vamos aplicar arte pura e um pouco de gosto pessoal.

Meu objetivo é plantar na sua mente uma semente chamada *"organização, limpeza e clareza"*.

Essa palavras faem sentido para você? Sim ? Que ótimo, pois é nesse sentido que vamos tentar alterar o cósigo fonte original de nosso exemplo.

*O código já está funcionando, se eu mexer poderei danificá-lo!*

Poderá e com certeza irá danificá-lo.

Então, como alterar o código já existente (e funcionando) de forma que ele não se quebre?

Remédio: TDD (Test Driven Development), nada mais é do que escrever um teste antes de codificar. Mas,
novamente caímos em um tema que é avançado e estamos ainda no nível básico.

TDD é uma arte (ninja) e o mestre e o Kent Bech.

<div class="imagem">
    <img src="../../imagens/tdd-livro.jpg" alt="Livro de Kent Bech" />
    <p>Livro: Desenvolvimento Guiado por Testes (Kent Bech)</p>
</div>

O conceito é muito interessante, procure ler sobre, abaixo uma figura para estigá-lo:

<div class="imagem">
    <img src="../../imagens/tdd-conceito.jpg" alt="Ciclo do TDD" />
    <p>Ciclo do TDD</p>
</div>


A refatoração é irmã siamesa do TDD. Uma não vive sem a outra.




### OOP

A orientação a objeto (vulgo OOP) é o único assunto que é avançado mas que já posso introduzir na sua vida
de progamador(ra).

Posso fazer isso, principalmente pelo fato de que o mundo OOP em Javascript é um pouco diferente, o caminho é tortuoso.
E se você acha que ter os conceitos de OOP irá ajudar, ledo engando. "Instanciar uma classe não" tem o mesmo significado
em JS. Por enquanto, vamos entender que um objeto possue propriedades (variáveis) e métodos (funções) como em qualquer
outra linguagem e que definimos ele através das chaves {}.


Objeto vazio (e solto):

    {}

Objeto vazio atribuído a uma variável qualquer:

    var foo = {};

Objeto coma algumas prorpiedades:

    var personagem = {
        nome: "Zé Colméia",
        peso: "gordinho",
        tipo: "bicho"
    };

Agora podemos referenciar as propriedades:

    console.log(personagem.nome);
    // saída: "Zé Colméia"


Acrescentando um método:

    var personagem = {
        nome: "Zé Colméia",
        peso: "gordinho",
        tipo: "bicho",
        chamarCatatau: function() {
            // código para chamar o colega Catatau
        }
    };


Executando esse método:

    personagem.chamarCatatau();


*Preciso que você faça um esforço mental para entender e decorar o seguinte código*:

<div class="code">
<h6>JS</h6>
<pre>
var objeto = {
    propriedade: "podemos iniciar a variável com algum valor",
    metodo: function() {
        // código
        // código
        // código
    },
    outroMetodo: function() {
        // código
        // código
        // código
    }
};
</pre>
</div>

Repare que tanto as propriedades quanto os métodos:
    
* são separados por virgula.
* utilzam os dois pontos como separador "nome: valor"






Finalmente... alterando o ćodigo!
---------------------------------

A primeira coisa a fazer é criarmos um objeto para a nossa querida lâmpada:

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
};
</pre>
</div>


Vamos mudar um pouco a lógica para simplificar as coisas, ok?
Utilizaremos a proriedade "ligada" com valores booleanos para registrar e sabermos a qualquer momento se a lâmpada está
ou não acessa. 

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
};
</pre>
</div>

Ao criarmos a propriedade, aproveito para "setar" com seu valor padrão, no caso "false".

Isso quer dizer que ela começa-rá apagada;

Agora vamos utilizar dois métodos, um para acender e um para apagar:

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
    acender: function() {
    },
    apagar: function() {
    }
};
</pre>
</div>

Pense um pouco!

O que esses métodos devem fazer?

Eles devem anotar o caminho da lâmpada da nossa tag img onde:

    lampada.elemt.scr

representa...

    objeto.tag_img.caminho_da_imagem = "um/caminho/qualquer"


<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
</pre>
</div>


Está faltando uma propriedade para acomodar o elemento HTML "img".

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
    <em>element: {},</em>
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
</pre>
</div>

Como colocado acima, essa propriedade é iniciada com um objeto vazio, porém podemos e queremos que ela seja iniciada
com a referência ao elemento img, logo incluímos:

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
    <em>element: document.getElementById('myimage'),</em>
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
</pre>
</div>

Antes nós ligávamos o evento à imagem dessa forma:

    element.onclick = function() {...

Agora vamos fazer algo parecido:

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
    element: document.getElementById('myimage'),
    <em>setEvento: function() {
        lampada.element.onclick = function(){
            // código que acende ou apaga alâmpada
        };
    },</em>
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
</pre>
</div>

Só falta escrever a lógica desse método para que ele, corretamente, acende e apague a lâmpada.

Lembre-se que estamos utilizando a proriedade "ligada" para saber se a lâmpada está ou não ligada.
Devemos colocar a figura correta conforme a prorpiedade ligada, ou seja:

Segue a lógica

    se lâmpada ligada então
        desligar()
        anote que ela está desligada
    senão
        ligar()
        anote que ela está ligada
        
Pegou a lógica? Não, então pegue, não dá para seguir sem ela.


Trasformando o pseudoćodigo em ćodigo de verdade:

        lampada.element.onclick = function(){
            if (lampada.ligada) {
                lampada.apagar();
                lampada.ligada = false;
            } else {
                lampada.acender();
                lampada.ligada = true;
            }
        };





### Código (quase) final

Ufa, chegamos!

Observe o código final!

Ele ficou maior que o original, porém ficou mais organizado, mais limpo e claro.

Pode ser que você não esteja sentindo isso nesse momento, talvez você prefira o código antigo.

Essa impressão, acontece por causa do seu grau de percepção ser de iniciante. Com o tempo você irá preferir o codigo
resultante ou, pelo menos, evitará o código original.

Repare ao menos que evitamos o uso do ainda "místico" *match* e a lógica ficou mais fácil.

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
    element: document.getElementById('myimage'),
    setEvento: function() {
        lampada.element.onclick = function(){
            if (lampada.ligada) {
                lampada.apagar();
                lampada.ligada = false;
            } else {
                lampada.acender();
                lampada.ligada = true;
            }
        };
    },
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
</pre>
</div>





### Código final

Para o código funcionar de verdade, falta realizarmos a primeira chamada ao método que inicia as coisas.

Em nosso casso, trata-se do método setEventos() e essa chamada fazemos no final de tudo, veja:

<div class="code">
<h6>JS</h6>
<pre>
var lampada = {
    ligada: false,
    element: document.getElementById('myimage'),
    setEvento: function() {
        lampada.element.onclick = function(){
            if (lampada.ligada) {
                lampada.apagar();
                lampada.ligada = false;
            } else {
                lampada.acender();
                lampada.ligada = true;
            }
        };
    },
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
<em>lampada.setEvento();</em>
</pre>
</div>


Aproveite para testar o código, digo, veja cada valor de variável, sugestões;

console.log(lampada);
console.log(lampada.ligada);
console.log(lampada.element);
console.log(lampada.acender);
console.log(lampada.apagar);

Procure variações e pontos diferentes, vá anotando os nomes que aparecem, você deve notar pelo menos os seguintes

* object
* function()
* undefined
* false
* true

Se preferir, baixe os arquivos através dos links: [codigo-refatorado.js](codigo-refatorado.js "Arquivo refatorado JS"), [lampadas.html](lampadas.html "Arquivo HTML").

Baixe também as imagens das lâmpadas: [lâmpada apagada](../../imagens/pic_bulboff.gif "lâmpada off"), 
[lâmpada acesa](../../imagens/pic_bulbon.gif "lâmpada om")



Agora chega de lâmpadas, na próxima matéria mudarei o assunto, até lá.