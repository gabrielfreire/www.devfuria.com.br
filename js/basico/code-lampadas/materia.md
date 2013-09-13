Code - A lâmpada
=================

Nessa matéria utilizarei o apoio da ferramenta Codepen, ela me permite escrever um pequeno trecho de código e compartilhar
ele aqui no devfuria. Espero que isso facilite a didática.

Clique nas abas e o Codepen mostra as partes separadamente: HTML, JS e resultado.

Experimente:

<pre class="codepen" data-height="300" data-type="js" data-href="zFGvl" data-user="flaviomicheletti" data-safe="true">
<code>var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match(&quot;bulbon&quot;)) {
        element.src=&quot;http://www.devfuria.com.br/js/imagens/pic_bulboff.gif&quot;;
    } else {
        element.src=&quot;http://www.devfuria.com.br/js/imagens/pic_bulbon.gif&quot;;
    }
};</code><a href="http://codepen.io/flaviomicheletti/pen/zFGvl">Check out this Pen!</a></pre>
<script async src="http://codepen.io/assets/embed/ei.js"></script>


O que vamos aprender ?
--------------------

Um pouco de tudo:

* getElementById()
* funções
* eventos
* DOM
* firebug
* document
* window


Mãos a obra
-----------

Vamos revisitar o pequeno código da lámpada que vimos na [primeira matéria de JS ](http://www.devfuria.com.br/js/basico/intro/ "JS|Intro")

Primeiro, não posso deixar de comentar que programar no lado cliente é uma tarefa que exige muita criatividade. Esse 
exemplo ilustra bem isso.

O objetivo do script é dar a sensação de que estamos apagando e acendendo uma lâmpada.

Você imagina como faremos isso funcionar?

Utilizaresmos duas imagens: uma com a lâmpada apagada e outra com a luz acessa. Quando clicamos na imagem acessa o
script deve trocar pela imagem apagada, quando clicamos na imagem apagada o script troca pela imagem acesa. Veja as
figuras abaixo:

<div class="imagem">
    <img src="../../imagens/pic_bulboff.gif" alt="lámpada apagada" />
    <img src="../../imagens/pic_bulbon.gif" alt="lámpada acesa" />
    <p>O truque das lámpadas</p>
</div>


Faça o script funcionar localmente
----------------------------------

Para você me acompanhar, o ideal seria você baixar os código fontes ou redigitá-los.

Baixe os arquivos através do Gist: [https://gist.github.com/flaviomicheletti/6095926](https://gist.github.com/flaviomicheletti/6095926 "Gist")
, clique no botão "Download Gist" e descompacte o arquivo.

Baixe também as imagens das lâmpadas: [lâmpada apagada](../../imagens/pic_bulboff.gif "lâmpada off"), 
[lâmpada acesa](../../imagens/pic_bulbon.gif "lâmpada om")

Agora, abra o arquivo html no navegador.

Não se esqueca do endereço de seu servidor web (apache) que é localhost. Na minha máquina eu utilizo o seguinte endereço:

	http://localhost/devfuria/labs/index.html

Esse é o endereço que eu digito no navegador, mas o endereço físico (no harddisk) é: 

	/var/www/html/devfuria/labs/index.html


A diferênça é 

	NAVEGADOR = http//localhost/[seus diretórios]
	HD        = /var/www/html/[seus diretórios]


Primeiro teste
--------------

Ao clicar na lâmpada, ela (na verdade o link) aciona a função que alterna entre a uma imagem e outra.

Deu certo? Ótimo.

Deu errado? Ótimo também, aproveite para olhar a aba Network ("redes" em português) do Firebug para ver qual arquivo 
está faltando, provavelmente é isso que está errado.



Segundo teste
--------------

Vamos nos comunicar com o Firebug. Acione a tecla F12 para abrir o dito cujo e escolha a aba "console".

Agora recarregue a página (F5).

Apareceu alguma mensagem  no console? Não? Maravilha, "parece" que não temos erros no JS.

OPs, você não conhece o Firebug? Pare tudo e leia a matéria anterior a esta: 
[Debugando](http://www.devfuria.com.br/js/basico/debugando/ "Matéria: Debugando o JS"). Vai lá que eu te espero.


Agora vamos aproveitar e estabelecer a comunicação: no arquivo "codigo.js" insira a seguinte linha

	console.log("comunicação estabelecida");

Você pode inser antes ou depois da função, veja como ficou o meu código:

<div class="code">
<h6>JS</h6>
<pre>
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src="../imagens/pic_bulboff.gif";
    } else {
        element.src="../imagens/pic_bulbon.gif";
    }
};
<em>console.log("comunicação estabelecida");</em>
</pre>
</div>


Desse ponto em diante eu explicarei partes do ćodigo, caso fique na dúvida, tente descobrir o valor das variáveis 
através do "console.log()"

Experimente (teste) tudo:

	console.log(element);
	console.log(element.src);
	console.log(element.src.match("bulbon"));
	console.log(document);
	console.log(window);

Experimente também fazer isso:
<div class="code">
<h6>JS</h6>
<pre>
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
    	<em>console.log('true');</em>
        element.src="../imagens/pic\_bulboff.gif";
    } else {
    	<em>console.log('false');</em>
        element.src="../imagens/pic\_bulbon.gif";
    }
};
</pre>
</div>




### getElementById()

Uma coisa que fazemos com muita frequência em JS é referenciar (ou talvez a palavra mais adequada seja *buscar*) 
elementos HTML. Estamos buscando um elemento na árvore DOM (Document Object Model), mas isso comentaremos em outro momento.

Mas é exatamente isso o que estamos fazendo com o a função *getElementById()*.

Ela buscará um elemento HTML através da propriedade "id" desse elemento, ou seja, é necessário ter o elemento HTML para
 que a função funcione corretamente.

Se a função encontrar o elemento procurado, ela retornará esse elemento. Então atribuimos o resultado a uma variável 
para podermos manipular essa variável. Isso tudo acontece na linha 01 do código (veja o codepen no início da matéria),
atribuímos o resultado de função na variável *elemento* (poderia ser qualquer outro nome, obviamente).

Caso o elemnto HTML não exista, a função não dispara erro algum, ela é silenciosa. Ela apenas retornará "null", esse 
será o valor que atribuiremos a variável "elemento". Então, na linha 02, quando usamos o método "onclick" o JS dispara 
o erro: 

	TypeError: element is null

É como se estivéssemos tentando fazer algo do tipo:

	var element = document.getElementById('nome-que-nao-existe');
	null.onclick = ...

..logo, vai dar pau.

E se tivéssemos vários elementos com o mesmo id? Hum! Me responda você.

Porque seu HTML possue vários elemento id quando cada deveria aparecer apenas uma única vez (alias, essa é a 
especificação o HTML)?




### document

E esse *document* antes da função, o que siginifica?

Esse objeto faz parte do DOM, ele representa o documento ativo, antes dele (um nível acima) temos o objeto *window* e o
correto era escrever assim:

	window.document.getElementById();

...mas isso é verboso demais. O objeto "window" pôde ser suprimido, mas ele ainda existe nos navegadores (muito 
provavelmente para garantir a retocompatibilidade).

Para simplificar as coisas, vamos encarar o document como um objeto importante e que contém funções importantes como a 
que acabamos de aprender.




### onclick

Já ouviu falar em eventos? Isso mesmo "onclick" nada mais é do que o evento click.

Mas de quem é esse evento? Os eventos são anexados aos elementos, no nosso exemplo anexamos o evento a tag "img"

	element.onclick = ...aqui entra uma função!!!

Ao clicarmos na imagem... disparamos o evento.




### function()

Uma função é uma função (momento KISS).

Mas ela pode ser atribuída a uma variável? PODE...

...seja bem vindo ao mundo do JS.

Uma função simples em JS parece-se com a mostrada a baixo:

<div class="code">
<h6>JS</h6>
<pre>
function mostrar_alerta () {
	alert('chamou a função');
};
mostrar_alerta();
</pre>
</div>

Mas isso já não se usa mais.

O mais usual é colocarmos a função dentro de uma variável e executamos a função referenciando-se a variável, veja:

<div class="code">
<h6>JS</h6>
<pre>
var mostrar_alerta = function () { alert('chamou a função'); };
mostrar_alerta();
</pre>
</div>

Para dar uma charme no estilo da codificação, aplicamos uma quebra de linha (ENTER) após a primeira chave da função, 
veja:

<div class="code">
<h6>JS</h6>
<pre>
var mostrar_alerta = function () { 
	alert('chamou a função');
};
mostrar_alerta();
</pre>
</div>

Espero que tenha gostado do estilo, pois é assim que todo mundo (99,999%) codifica em JS.

Mas não é apenas estilo que estamos observando, esse negócio de colocar a função em uma variável tem um nome, chama-se:
função anônima. Bom, deixemos isso para depois, ok?

Aproveite para ir se acostumando com isso:

	var minha_funcao = function() { };


### src

Esse "scr" nada mais é do que uma propriedade HTML, isso mesmo, HTML!

E o que ela esta fazendo no meio do meu código JS?

Calma, ela é faz parte do objeto que buscamos com a função getElemntById().

SCR é a abreviação de source e siginifica que o conteúdo da tag "img" é definido por essa tag, veja o trecho de HTML:

	<img src="local-da-imagem-no-seu-hd">

E podemos acessar esse e outras propriedades via JS.




### match()

Função nativa do JS utilizada para executar uma Expressão Regular (regexp), não me pergunte o que é isso ok?

Veremos sobre regexp em breve, ok?

Nós estamos usando o valor da  propriedade "src" para descobrir se ela contém o trecho "bulbon".

Veja o pseudocódigo abaixo para entender melhor:

<div class="code">
<h6>PSEUDOCÓDIGO</h6>
<pre>
se no caminho da imagem o seguinte pedaço de estring "bulbon" estiver contido então
	deligue a lâmpada
se não
	ligue a lâmpada
</pre>
</div>


### Conclusão

Se você sobreviveu até aqui, parabéns!

Vimos algumas coisas bem básicas, o objetivo era lhe proporcionar um primeiro contato com a linguagem de forma prática
(bem prática).

Outros tutorias passam apenas a especificação da linguagem, com sorte eles mostram um pequeno exemplo.

Eu preferi, a partir de um exemplo, ir desenvolvendo e desenrolando as partes do código.

Na próxima matéria ainda veremos este código da lâmpada, nós faremos outros experimentos com ele.

Aproveitando este código, você não terá muito esforço para entender o seu funcionamento e aproveitará (assim espero)
para focar no aprendizado da linguagem, esse é o objetivo.

Até lá.
