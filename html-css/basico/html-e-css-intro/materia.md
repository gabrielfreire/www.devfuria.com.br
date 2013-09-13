HTML e CSS - Introdução
=======================

Vamos dar uma rápida olhada nas tag's básicas e uma "passeada" com o CSS.

### Âncora(link)
    <a href="pagina-ao-clicar.html">Isto é um link</a>;

O link possui a proprieda *href* (hypertext reference) que nada mais é do que o alvo que será
alcançado quando clicarmos no link.

Esse alvo pode ser uma outra página html ou um script de servidor em php, por exemplo.

Pode até apontar para uma imagem ou outro arquivo qualquer (e então o navegador perguntará so o usuário quer fazer o
*download* ou abrí-lo com algum programa).

O alvo pode estar em um nível hierarquico de pasta diferente, para baixo ou para cima.

Trata-se do *endereço relativo*. Vamos para baixo, de pasta em pasta, com o símbolo *"../"* exemplo:

    <a href="../../../pagina-ao-clicar.html">Isto é um link 3 pastas abaixo</a>;

E para cima, com o nome da pasta, exemplo:

    <a href="pasta/pasta/pasta/pagina-ao-clicar.html">Isto é um link três pastas acima</a>;

Na URL da âncora também podemos passar parâmetros com um par de valor, onde o primeiro valor é o nome da variável e o
segundo é o valor dessa variável, mas isso nos veremos mais afundo quando estivermos estudando uma linguagem "do lado
do servidor. Exemplo:

    <a href="script.php?varA=valor1&varB=valor2">Isto é um link com dois parâmetros</a>;

O link pode sofrer estilizações interessantes. É muito comum estilizar o link como se fosse um botão e há também um
efeito que é acionado quando passamos o mouse por cima: é o *hover* (por cima, pairar). Para estilizar o "hover" utiliza-se
de *pseudoclasses*, a regra CSS abaixo adiciona a cor vermelha a link apenas quando passamos o mouse sobre ele.

    a:hover { background-color: red}

### Listas

    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>

As listas ajudam a organizar o conteúdo mas fazem muito mais do que isso. Elas são utilizadas principalmente para
criar menus (com a ajuda da CSS, é claro). Esses menus podem ser verticais (que é a disposição natural das listas) ou
podem ser horizontais. O efeito horizontal é produzido com o auxílio da propriedade  *float* (CSS). Essa propriedade,
quando utilizada sabiamente, produz resultados interessantes. Ela faz os elementos flutuarem para a direita ou para a
esquerda. Voltaremos a falar sobre o float em breve.

A tag "ul" é um container que comporta os item da lista, as tag's "li". Em outras palavras, o "ul" é a lista e os "li"
são os itens. "ul" siginifca "unordened list" (lista não ordenada), há também a lista "ol" (ordened list) que é
exatamente o inverso.

    <ol>
        <li></li>
        <li></li>
        <li></li>
    </ol>


### Parágrafos e imagens

    <p> Isto é um parágrafo</p>

    <p>
        Este parágrafo contém uma imagem
        <img src="imagem.png" alt="texto alternativo" />
    </p>

A tag *"p"* também é muito comum, ela representa um parágrafo e, obviamente, acomoda textos.

A tag *"img"* representa uma imagem, a proprieda *"src"* diz aonde a imagem se encontra gravada e também obedece a
hierarquia do sistema de arquivos (como o 'href'). Já a proprieda *"alt"* é um texto alternativo que será exibido caso
o caminho para a imagem seja inválido.

Estou apresentando as duas tag's juntas para ilustrar como elas se interagem. As duas tag's sozinhas não fazem muita
coisa, mas se adicionarmos ao tempero a propriedade *float* (olha ela aí denovo) a brincadeira ficará mais interessante.

Podemos dizer para a imagem flutuar à equerda, então o texto fluirá para o lado inverso (direita).
Veja o código abaixo e o resultado [aqui](p_img_e.html).

    <p>
        <img src="tom-jobim.jpg" alt="Tom Jobim" style="float: left" />
        Antônio Carlos Brasileiro de Almeida Jobim (Rio de Janeiro, 25 de janeiro de 1927 —
        Nova Iorque, 8 de dezembro de 1994),  mais conhecido como Tom Jobim, foi um compositor, maestro, pianista,
        cantor, arranjador e violonista brasileiro.
    </p>
    <p>
        É considerado o maior expoente de todos os tempos da música brasileira pela revista Rolling Stone, e um dos
        criadores do movimento da bossa nova.
    </p>
    <p>
        Pensou em trabalhar como arquiteto, chegando a cursar o primeiro ano da faculdade e até a se empregar em um
        escritório, mas logo desistiu e decidiu ser pianista. Tocava em bares e boates em Copacabana, como no Beco
        das Garrafas no início dos anos 1950, até que em 1952 foi contratado como arranjador pela gravadora
        Continental, onde trabalhou com Sávio Silveira. Além dos arranjos, também tinha a função de transcrever para
        a pauta as melodias de compositores que não dominavam a escrita musical. Datam dessa época as primeiras
        composições, sendo a primeira gravada "Incerteza", uma parceria com Newton Mendonça, na voz de Mauricy Moura.
    </p>

... ou podemos dizer para a imagem flutuar à direita e então o texto fluirá a esquerda.
Veja o código abaixo e o resultado [aqui](p_img_d.html).

    <p>
        <img src="tom-jobim.jpg" alt="Tom Jobim" style="float: right" />
        Antônio Carlos Brasileiro de Almeida Jobim (Rio de Janeiro, 25 de janeiro de 1927 —
        Nova Iorque, 8 de dezembro de 1994),  mais conhecido como Tom Jobim, foi um compositor, maestro, pianista,
        cantor, arranjador e violonista brasileiro.
    </p>
    <p>
        É considerado o maior expoente de todos os tempos da música brasileira pela revista Rolling Stone, e um dos
        criadores do movimento da bossa nova.
    </p>
    <p>
        Pensou em trabalhar como arquiteto, chegando a cursar o primeiro ano da faculdade e até a se empregar em um
        escritório, mas logo desistiu e decidiu ser pianista. Tocava em bares e boates em Copacabana, como no Beco
        das Garrafas no início dos anos 1950, até que em 1952 foi contratado como arranjador pela gravadora
        Continental, onde trabalhou com Sávio Silveira. Além dos arranjos, também tinha a função de transcrever para
        a pauta as melodias de compositores que não dominavam a escrita musical. Datam dessa época as primeiras
        composições, sendo a primeira gravada "Incerteza", uma parceria com Newton Mendonça, na voz de Mauricy Moura.
    </p>


### Tabelas

As tabelas acomodam dados tabulares.

Isso parece óbvio, mas não foi assim no começo da internet. Pela falta de recursos apropriados e pela instabilidade
advinda dos navegadores, muitos desenvolvedores utilizavam-se de tabelas para fazer o layout da página. Isso é uma
prática condenável e seu remédio chama-se *tableless*, que nada mais é do que um conceito (ou talvez um princípio) onde
evita-se utilizar a tabela em algo que não seja dados tabulares.

Uma tabela contém linhas (tr) e campos (td). às vezes podem conter as tag's "thead", "tbody" e "tfoot" que representam
o cabeçalho, o corpo e o rodapé da tabela, respectivamente.

Quando temos linhas campos do cabeçalho (dentro da tag "thead") utilizamos a tag "th" no lugar da "td", pois essa
representam melhor o cabeçalho.

    <table>

        <thead>
            <tr>
                <th>campo 1</th>
                <th>campo 2</th>
                <th>campo 3</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>dado 1</td>
                <td>dado 2</td>
                <td>dado 3</td>
            </tr>
            <tr>
                <td>dado 1</td>
                <td>dado 2</td>
                <td>dado 3</td>
            </tr>
            <tr>
                <td>dado 1</td>
                <td>dado 2</td>
                <td>dado 3</td>
            </tr>

        </tbody>

        <tfoot>
            Este é o rodapé
        </tfoot>

    </table>


### Formulários, inputs e labels

Um formulário na web normalmente é chato de se preencher, só que ele é a alma dos aplicativos web, pois é através de seus
campos que o usuário faz a inserção dos dados e, dessa forma, interaje com o sistema.

Um formulário pode (e deve) conter elementos que "formam" um par "nome=valor", por exemplo, um campo de entrada de
texto (uma text box) chama-se "pais" e o seu valor é o texto "Brasil". Quando esse formulário submeter seus dados para o
servidor ele poderá trabalhar com a variável "pais" e seu valor será, adivinhe, "Brasil".

Esse negócio é tão simples que fica até difícil de explicar. rs.

<div class="imagem">
    <img src="../../imagens/form_facebook.png" alt="Formulário do Facebook" />
</div>

Veja o famoso formulário do Facebook. Vamos analisar apenas a "tarja azul". Tamos os campos "login", "senha" e uma
chekbox "mantanha-me conectado". Quando o usuário preencher os dados e clicar no botão "Entrar" o servidor poderá
trabalhar com os seguintes dados:

* login=email@digitado
* senha=1234
* manter=false

Essa questão da interação formulário/servidor nós trataremos no curso de PHP, ok? Aqui no curso de HTML e CSS vamos nos
deter apenas em seu layout e estrutura.



### Div's e Span's

A tag "div" é um elemento do tipo "conteiner" que acomoda outras tag's, é um *div*sor de espaços.
A tag "span" acomoda pequenos trechos de texto.

Ambas as tag's são muito utilizadas em conjunto com o CSS visando sofrer alguma estilização posterior.

    <div>

    </div>

    <span>um pequeno texto</span>


### Cascading Style Sheets

Quem começa a aprender CSS logo se pergunta: *o que será esse negócio de cascata?*. É um conceito. Ainda temos a
questão da especificidade e da herânça (nada a ver com oop, olha lá hein!!!).

Tudo bem, que tal não esquentarmos a cabeça com isso por enquanto? Vamos focar no básico e depois, quando estiver mais
familiarizado, voltamos para "fechar" esses conceitos, ok?

Na matéria ["onde tudo começou"](../onde-tudo-comecou) vimos como é a estrutura de uma rule-set. Sempre que estilizamos
o HTML precisamos pensar primeiro em *qual será o nosso(s) elemento(s) alvo?* E na sequência aplicamos o rule-set.
Há uma dúzia de formas diferentes de encontrar elementos HTML. Fazemos isso através dos *seletores*.

A CSS também possui *unidades de medidas*: px(pixel), pt(pontos), em(relativo ao tamanho da fonte) e %(porcentagem).
A mais simples e conhecida é a *pixel*. Um pixel representa um ponto na tela, veja figura abaixo:

<div class="imagem">
    <img src="../../imagens/pixel.png" alt="Pixel" />
    <p><a href="http://pt.wikipedia.org/wiki/Pixelx">Fonte da imagem acima</a></p>
</div>


*As cores* normalmente são apresentadas pela combinação das cores primárias. Dizemos ao navegador o quanto queremos de
vermelho, verde e azul e assim vamos montando todas as outras cores.

Então devemos seguir o esquema *rgb* que significa red, green e blue, respectivamente. Os valores possíveis estão entre
0(zero) e 255, onde 0 significa que não temos nada do tom desejado e 255 significa que temos o máximo do tom desejado.

Abaixo vemos a forma decimal e hexadecimal que representa a cor vermelha:

    rgb(255, 0, 0)
    #FF0000

<div class="imagem">
    <img src="../../imagens/cores.png" alt="Pixel" />
</div>


### Unindo o CSS ao HTML

Agora precisamos aprender como unir a CSS ao documento HTML.

A CSS *"uni-se"* ao HTML de 3 formas distintas: *inline, embeded e linked*. Vejamos:

#### CSS - inline (na linha) ####

Inline o método mais simples, declaramos a regra com o emprego do atributo "style" do HTML, exemplo:

<div class="code">
<h6>HTML & CSS</h6>
<pre>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTítulo da página&lt/title&gt
    &lt/head&gt
    &ltbody&gt

        &lth1&gtUm título qualquer&lt/h1&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtprimeiro parágrafo/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtsegundo parágrafo&lt/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtterceiro parágrafo&lt/p&gt

        &lth2&gtOutro título qualquer&lt/h2&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtquarto parágrafo&lt/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtquinto parágrafo&lt/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtsexto parágrafo&lt/p&gt

    &lt/body&gt
&lt/html&gt
</pre>
</div>

O leitor atento notou que tivemos que repetir a regra em cada parágrafo. Essa forma além de repetir código, não ajuda na
legibilidade e NÂO permite o controle centralizado da CSS. Programadores e designs, no geral, evitam a CSS inline.
Ainda não "dá cadeia" utilizar-se de CSS inline, se achar que precise dela, pode usá-la com bom censo.


#### CSS - embeded (incorporadas) ####

Coloca-se as regras de CSS entre a tag "style" na seção "head" do HTML, veja o exemplo:

<div class="code">
<h6>HTML e CSS</h6>
<pre>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTítulo da página&lt/title&gt
        <em>&ltstyle type="text/css" media="all"&gt
        p {
            font-size: 12px;
            color: #767676;
        }</em>
        &lt/style&gt
    &lt/head&gt
    &ltbody&gt

        &lth1&gtUm título qualquer&lt/h1&gt
        &ltp&gtprimeiro parágrafo/p&gt
        &ltp&gtsegundo parágrafo&lt/p&gt
        &ltp&gtterceiro parágrafo&lt/p&gt

        &lth2&gtOutro título qualquer&lt/h2&gt
        &ltp&gtquarto parágrafo&lt/p&gt
        &ltp&gtquinto parágrafo&lt/p&gt
        &ltp&gtsexto parágrafo&lt/p&gt

    &lt/body&gt
&lt/html&gt
</pre>
</div>

Já é bem melhor que o método anterior: já é possível localizar a CSS com mais facilidade no documento.
Mas há o método campeão...


#### CSS - linked (externos) ####

Coloca-se as regras de CSS em um arquivo separado do HTML. Normalmente a extensão do arquivo é *.css*. A "cola" é
realizada através da tag *"link"*, veja código de exemplo:


<div class="code">
<h6>HTML</h6>
<pre>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTítulo da página&lt/title&gt
        <em>&ltlink rel="stylesheet" type="text/css" href="estilos.css" media="all" /&gt</em>
    &lt/head&gt
    &ltbody&gt

        &lth1&gtUm título qualquer&lt/h1&gt
        &ltp&gtprimeiro parágrafo/p&gt
        &ltp&gtsegundo parágrafo&lt/p&gt
        &ltp&gtterceiro parágrafo&lt/p&gt

        &lth2&gtOutro título qualquer&lt/h2&gt
        &ltp&gtquarto parágrafo&lt/p&gt
        &ltp&gtquinto parágrafo&lt/p&gt
        &ltp&gtsexto parágrafo&lt/p&gt

    &lt/body&gt
&lt/html&gt
</pre>
</div>

Agora sim temos um método profissional. Toda CSS fica em arquivo separado que é incluso no HTML através de uma única linha.
Há vantagens e desvantagens em cada um dos métodos, discutiremos isso em breve, por hora saiba que esse é o método mais
adequado e por essa razão o que mais utilizaremos no curso, porém não leve tudo a ferro-e-fogo: pode lançar mão das 3
formas quando e onde achar melhor.



Ufa!
----

Âncoras, listas, parágrafos, imagens, propriedade float, tabelas, formulários, div, span, CSS, seletores, rule-set, pixel,
unidades de medidas, cores, CSS inline, CSS embeded, CSS linked. Vimos bastante coisas nesta matéria, vamos agora
entender a diferênca entre os elementos "in-line" e "level-block"... na próxima matéria é lógico.