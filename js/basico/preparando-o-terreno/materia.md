Preparando o terreno
====================

Na matéria de introdução eu comentei que vamos aprender JS junto com HTML e CSS. Na verdade vamos aprender as coisas
separadamente, porém vamos trabalhar com os três elementos como se fosse ingredientes obrigatórios em cada receita.

Neste ponto é importante entendermos a obrigação de cada um desses componentes. O *JS será encarregado do comportamento*
da página, da interação com o usuário, dos enventos possíveis (click, duplo click, teclado, movimentação do mouse, e
etc...), de tudo aquilo que pode beneficiar a interface do sistema.

O CSS se encarrega-rá da apresentação da página. Pensou em estilizar, formatar, desenhar, cuidar da aparência, layout,
cores, fontes, bordas, espaçamento, disposição dos elementos ...pensou em CSS. Ele cuidará da embalagem, do roupagem
que sua página web irá vestir. Estilizar é com o CSS.

Sobrou para o HTML deixar claro qual é o conteúdo, marcando o conteúdo. Em outras palavras: "tudo que é necessário para
ler e entender o conteúdo de sua página web. O código HTML deve fazer o máximo para transmitir o significado
(ou semântica) do conteúdo." O HTML descreve o conteúdo da página, a isso chamamos de *marcação semântica*.

OK. O que acabamos de fazer foi separar as obrigações. Com isso, acabamos de praticar técnica chamada de *programação em
camadas*. No caso, temos 3 camadas: conteúdo(HTML), apresentação(CSS) e comportamento(JS).


<div class="imagem">
    <img src="../../imagens/camadas.gif" alt="camadas de uma aplicação" />
    <p>Separando as obrigações! (programando em camadas)</p>
    <p>Fonte:
        <a href="http://www.thiagotpc.com/entech/#slide-27">Slide em www.thiagotpc.com</a>
    </p>
</div>



Aonde colocar o Javascript ?
-----------------------------

O ideal é escrevermos o código JS em um arquivo texto com extensão .js e incluí-lo no arquivo HTML dessa forma:

<div class="code menor">
<h6>index.html</h6>
<pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
        <em>&lt;script type="text/javascript" src="codigo.js" /&gt;</em>
    &lt;/head&gt;
    &lt;body&gt;
        ...
    &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>

No código seguinte temos a mesmíssima coisa, só que em um arquivo html 5. O palavrão 'DOCTYPE' virou duas palavrinhas:

<div class="code">
<h6>index.html</h6>
<pre>
<em>&lt;!DOCTYPE html&gt;</em>
&lt;html&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
        <em>&lt;script type="text/javascript" src="codigo.js"&gt;&lt;/script&gt;</em>
    &lt;/head&gt;
    &lt;body&gt;
        ...
    &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>

As abordagem acima sofre de um pequeno inconveniente: a ordem em que o arquivo é lido e executado pelo browser. Os
navegadores executam arquivos JS assim que o código é baixado e depois continua a reenderizar o HTML restante. Isso
significa que se o seu código depender do HTML, e acredite vai depender, ele não conseguirá executar corretamente.

Atualmente há algumas saídas para este problema, a abordagem mais utilizada é a boa e velha dica: *Coloque o script no
final do HTML !!!*, pronto resolvido. Isso garante que seu JS será executado após todo o HTML ter sido carregado e de
quebra sua página obtem um ganho de performance. Em outra matéria, falarei mais sobre essa questão. Por hora vejamos
como ficou nosso HTML:

<div class="code">
<h6>index.html</h6>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        ...
    <em>&lt;script type="text/javascript" src="codigo.js"&gt;&lt;/script&gt;</em>
    &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>

*Colocamos o código JS no final do HTML.*


FireBug
-------

O FireBug é um plugin do navegador Firefox, ele é opensource e está disponível para download em:
[https://addons.mozilla.org/pt-br/firefox/addon/firebug](https://addons.mozilla.org/pt-br/firefox/addon/firebug "FireBug")

Ele será necessário para debugar-mos o código escrito em JS.

Então, quando nos depararmos com o seguinte código:

<div class="code menor">
<h6>JS</h6>
<pre>
var qualquer = "uma string qualquer";
console.log(qualquer);
</pre>
</div>

...estaremos na verdade, fazendo uso do plugin FireBug, pois a instrunção *console.log()* não é do JS e sim do plugin
FireBug. O resultado do código é conferido na seção "console" do plugin.


Javascript é seguro?
--------------------

Vamos estender essa pergunta para: a linguagem de programação X é sergura?

Nenhuma linguagem de programação é segura ou insegura, a pergunta correta seria:

*O desenvolvedor programa de forma segura?*

O que acontece com JS é que o código fica exposto a qualquer usuário, por isso, percebemos erroneamente, que JS é inseguro,
mas isto não é verdade. Seguro ou inseguro, como já disse, é a forma como se programa.

Obviamente, tendo em vista que o código fica exposto, não criaremos nenhum *código sensível* (um código que possa ser
explorado por um hacker causando danos a aplicação).


Características da linguagem
----------------------------

JS é uma linguagem baseada em protótipos, em funções de primeira classe, fracamente tipada, imperativa e estruturada,
implementa closures.

Se você já acompanhou algumas matérias do curos de PHP deve ter percebido que eu utilizo "um pouco de engenharia reversa":
explico o essencial, demonstro algum código e vamos aprofundando aos poucos. Acredito que essa seja uma boa forma para
ensinar e aprender programação. Com este curso de JS, não será diferente. As características aqui apresentadas serão
explicadas ao longo do curso quando o leitor já estiver mais familizarizado com a linguagem e, dessa forma, poderá
aproveitar melhor o curso.


JS é realmente Orientado a Objetos ?
------------------------------------
A questão se JS é ou não OOP ainda causa certa polêmica, mas segundo Douglas Crockford's (o mago do JS):
> "O JavaScript é orientado à objetos? Bem, ele contém objetos que podem conter dados e métodos que agem sobre esses
> dados. Objetos podem conter outros objetos. O JavaScript não possui classes, mas possui construtores que são capazes
> de fazer o que as classes fazem, incluindo agir como contêineres para classes de variáveis e métodos. Ele não possui
> herança orientada a classe, mas tem herança orientada a protótipo.


*Na próxima matéria veremos como debugar (depurar) o JS.*