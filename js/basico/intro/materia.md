Introdução !
============

<div class="imagem" >
    <img src="../../imagens/livro-simple-js.jpg" />
</div>


*Javascript(JS) não é brinquedo, é linguagem de programação séria*.

Das mil definições de JS a que mais me agrada é a de
Kevin e Cameron em seu livro "Simple Javascript" (Só Javascript):
> "Javascript é uma linguagem de programação simples que permite alterar páginas web dinamicamente, enquanto estão
> sendo exibidas em um navegador.".

E os autores alertam...

> "Parece algo que você pode dominar em uma tarde, JS parece simples, contudo, em seus 10 anos de história até aqui
> [o livro é de 2007], as melhores práticas de JS pareciam mudar com as estações.".


A definição do pessoal do Mozilla também me agrada:
> "Javascript (às vezes chamado apenas de JS) é uma linguagem de programação, leve, interpretada, orientada a objetos,
> baseada em protótipos e em *first-class functions* (funções de primeira classe), mais conhecida como a linguagem de
> script da Web. Também utilizada em vários outros ambientes como node.js e Apache CouchDB."</span>.


É possível fazer mil peripécias com JS e suas páginas da web, a cada dia a lista de possibilidas vai aumentado. A maior
utilização do JS é no sentido de melhoria de páginas web (HTML e CSS), o que chamamos de *aperfeiçoamento progressivo*,
começa-se com o HTML, CSS e por fim o JS.

*Validar um formulário* do lado do cliente evitando que os dados trafeguem até o servidor foi, por um bom tempo, a
melhoria mais aplicada e popular. Quem nunca validou um formulário com JS?

Um funcionalidade que ajudou em muito a popularização da linguagem é o *AJAX*. A junção do JS com XML sendo realizado por
requisições diretamente do código de JS para o servidor é algo surpreendente.

Outra aplicação do JS que empolga bastante são as chamadas *aplicalções web ricas*. O termo "rico" refere-se a interface,
ou seja, a interface é quem está mais rica, mais usual, mais fácil, mas agragadora. Há quem diga que elas são o futuro
das aplicações web.

O nodejs promete levar o JS para o lado do servidor, isso já é uma realidade e será questão de tempo até encontrarmos
bons frutos dessa iniciativa.

*Javascript nasceu em 1995, seu pai chama-se Brendan Eich*. Ná época a Netscape queria uma linguagem que roda-se no lado
do cliente e incubiu Brendam de realizar este projeto. Ela chamava-se LiveScript e como a SUN Microsystems interessou-se
pela linguagem e também começo a contribuir, conseguiu que ela vie-se a se chamar Javascript, foi uma lance de marketing
com a linguagem Java. A única coisa que Javascript tem de comum com a linguagem Java é que ambas são orientada a objetos,
mas até isso é implementado de forma diferente, bem diferente.

*Javascript não é Java*.

Obs: Há quem diga que Javascript nasceu antes de 1995, chamava-se Cmm, e blá blá blá. Mas isso é história.

Após algum tempo, a empresa ECMA resolveu padronizar a linguagem e criou o padrão ECMAscript, na verdade este é o nome
adotado para a linguagem. Porque temos um padrão? Porque cada navegador implementa a linguagem de forma diferente, em
outras palavras, escrever um trecho de código Javascript válido que funciona no Firefox, por exemplo, pode não funcionar
no IE (sempre o IE). Isso mesmo, Javascript sofre do mesmo problema que o HTML e o CSS, cada navegador implementa ao
seu sabor. "Em teoria, a  padronização obriga as empresas fabricantes de navegadores a implementarem no mínimo aquele
conjunto de funcionalidades"(Edgar Damiani) ...por isso o padrão ECMA é tão importante.

*JS é legal porque dá para começar a programar em segundos. A instalação do ambiente é estupidamente fácil: basta um
navegador web e um editor de texto*. Só não vale o IE nem o bloco de notas.

Eu utilizo o Firefox para testar meus scripts. O firefox tem um plugin que é um verdadeiro caniveto suíço, faz tudo e
mais um pouco, trata-se do Firebug. uma ferramenta e tanto, no decorrer do curso vamos utilizá-lo com frequência. Outro
plugin que não pode ficar de fora é o Web Developer, instale os dois plugins e vá descobrindo aos poucos suas
funcionalidades, você irá se surpreender.

Quanto ao editor de código, este fica a sua escolha, eu uso e gosto muito do Netbeans.


O primeiro script a gente nunca esqueçe
---------------------------------------

Crie um arquivo texto e salve com o nome
"index.html". Agora insira nele o seguinte código:

<div class="code">
<h6>JS</h6>
<pre>
var foo = "Eu sou javascript";
alert(foo);
</pre>
</div>

Agora abra um navegador qualquer e, em seguida, abra o arquivo.


O segundo script talvez a gente esqueça
---------------------------------------

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
</pre>
</div>

<div class="imagem">
    <img src="../../imagens/pic_bulboff.gif" id="myimage" />
    <p>Programar é uma atividade criativa !!! Clique e confira.</p>
    <p>Fonte:<a href="http://www.w3schools.com/js/tryit.asp?filename=tryjs_lightbulb">w3schools</a></p>
</div>

O que o código acima faz?
Ele apenas acende e apaga uma lâmpada!

OK, brincadeiras à parte. O código é um pouco mais elaborado, a lógica é a seguinte: temos duas figuras da mesma lâmpada,
uma acesa e outra apagada. A cada clique, troque a imagem da lâmpada. É isso, vejamos o html para entendermos melhor o
funcionamento do conjunto.

<div class="code">
<h6>HTML</h6>
<pre>
&lt!DOCTYPE html&gt
&lthtml&gt
    &lthead&gt
        &ltmeta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt
        &lttitle&gtHello, World!&lt/title&gt
    &lt/head&gt
    &ltbody&gt

        &ltimg id="myimage" src="../imagens/pic_bulboff.gif" alt="lampada"/&gt
        &ltp&gtClick the light bulb to turn on/off the light&lt/p&gt

        &ltscript type="text/javascript" src="codigo.js"&gt&lt/script&gt

    &lt/body&gt
&lt/html&gt
</pre>
</div>

Temos uma tag "img" e seu atributo "src" que aponta para uma imagem no servidor. É nesse elemento que nossa lógca irá
atuar. Presisamos "pegar" a imagem via JS, para tal utilizamos a função "getElementeById" (traduzindo: pegue o elemento
pelo id) e armazenamos o resultado na variável "element". Até aqui tudo bem.

Na sequência, atribuímos uma função para o evento "onclick" do elemento capurado. Não entendendeu como é feito isto?
Veja o código de forma mais limpa:

<div class="code">
<h6>JS</h6>
<pre>
var element = document.getElementById('myimage');
<em>element.onclick = function() {
     ... ao clicar na imagem
     ... o código aqui inserido será acionado
};</em>
</pre>
</div>


A função que embutimos faz exatamente o que a nossa lógica ditou: troca a imagem. Ela testa se o valor de "src" do
elemento é igual a "bulbon". Se for, ele troca para "pic\_bulboff.gif", se não ele troca para "pic\_bulbon.gif".

E assim temos a impressão de acender e apagar a lâmpada.
Isso é Javascript!

No curso, iremos estudar o JS em conjunto com suas irmãs (siamesas): HTML e CSS. O leitor deve ter certa familiaridade
com essas tecnologias porque, JS sem elas é hardware sem software.

Este curso foi, inicialmente, idealizado para iniciantes em programaçã e pessoas autodidatas que nunca frenquentaram um
curso regular de informática. Se este for o seu caso, talvez lhe falte um pouco de lógica de programação, aconselho a
fazer uma leitura atenta das 6 matérias do nível zero de PHP, afinal ĺógica é lógica em qualquer linguagem.

Atualmente (set/2012) JS disponta como o principal alicerce de um desenvolvedor front-end(client-side). Desenvolver do
lado do cliente, desenvolvedor de interfaces, engenheiro front-end. Seja lá qual for o nome, o fato é que cada vez mais
a atividade está se tornando uma profissão madura e respeitada (e bem remunerada).

Coincidência ou não, encontrei impresso no livro de Kevin e Camerom uma das fortes razões que me levaram a realizar o
projeto deste site...

> "alguns autores respeitados no setor o ensinarão uma porção de soluções rápidas para problemas simples e mais nada,
> deixando-o apenas com corda suficiente para se enforcar quando você tentar resolver um problema de verdade. Então
> quando desesperadamente procurar um exemplo na Web que faça o que você precisa, provavelmente será incapaz de entender
> o código JS encontrado. Este livro é diferente..."

Este site também. O objetivo é "você ganhar confiança não somente para escrever seu próprio código Javascript, mas também
para entender código escrito por outras pessoas e até para identificar código antigo e prejudicial e poder alterá-lo com
maestria".

JS é fantástico... e divertido! Seja bem vindo ao curso!
