Elementos in-line e elementos block-level
=========================================

Há dois tipos básicos de tag's: as in-line e de block-level.

A diferênça básica é que o browser acomoda os elementos
inline à esquerda um ao lado do outro e as de bloco ele coloca uma embaixo da outra ocupando a tela toda.

Veja o HTML abaixo para *entender* e clique no [link](code1.html "Veja a pagina em funcionamento")
para *perceber* como ele foi reenderizado.

<div class="code menor">
<h6>HTML(inválido)</h6>
<pre>
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;elementos in-li e block-level&lt;/title&gt;
        &lt;style type="text/css"&gt;
            body * {
                border: 1px solid #000;
                background-color: #F5F5F5;
                margin: 20px;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;Título 1&lt;/h1&gt;
        &lt;h2&gt;Título 2&lt;/h2&gt;

        &lt;span&gt;span 01&lt;/span&gt;
        &lt;span&gt;span 02&lt;/span&gt;
        &lt;span&gt;span 03&lt;/span&gt;


        &lt;p&gt;parágrafo a&lt;/p&gt;
        &lt;p&gt;parágrafo b&lt;/p&gt;

        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;

        &lt;div&gt;div 1&lt;/div&gt;
        &lt;div&gt;div 2&lt;/div&gt;

        &lt;a href="#"&gt;Link 1&lt;/a&gt;
        &lt;a href="#"&gt;também me chamam de âncora&lt;/a&gt;

    &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>

Esse não é um HTML "oficial", é apenas para fins ilustrativos. Repare que eu coloquei a palavra "inválido" no título
do código, é para alertar que o HTML apresentado não é válido, ou seja, não validará se submetido as normas do w3c,
falaremos disso adiante. Eu criei um CSS básico e misturei as tag's inline e block apenas para você perceber como elas
se comportam.

Perceber esse aspecto básico, mais do que entender, lhe ajudará a criar páginas HTML sem muita dor de cabeça.

O problema reside no fato de que estamos acostumados a utilizar softwares, como por exemplo editores de textos ou editores
de imagens e vamos "dizendo" ao softwarer" coloque este círculo aqui, aquele texto ali, agora desça um pouco o círculo
e etc..". Achamos que com HTML dá para fazer igual. Com o HTML a idéia é parecida mas há uma diferênça crucial: *existe
uma certa manha para desenharmos a arte que "pintamos" em nossa cabeça.*. E entender essa "manha" fará toda a diferênça.

Uma parte dessa "manha" é compreender a diferênça entre as tag's in-line e as tag's block-level.

A dica é: *não tente criar em HTML a página que você idealizou sem antes se familiarizar com a forma que o navegador
reenderiza o HTML*.


Abaixo vemos alguns elementos básicos de *block-level*:

* div
* h1, h2, h3
* p
* ul, ol
* table
* form
* fildset
* hr


... e alguns elementos *in-line*:

* span
* a
* img
* td
* label
* input
* select
* textarea

Há ainda um terceiro tipo de elemento: o *inline-block* que nada mais é do que um elemento de bloco acomodado como um
elemento inline.

A CSS pode alterar o tipo do elemento. Com a propriedade "display" é possível utilizar os três valores (mais comuns):

1. block
2. inline
3. inline-block

A tag "div" é block-level, mas se aplicarmos a propriedade "inline" ela começará a se comportar como uma tag inline.

O inverso também é verdadeiro.

A tag "span" é inline, mas se aplicarmos a propriedade "block" ela se comportará como uma tag block-level.

Para ilustrar eu utilizei o mesmo HTML acima e apliquei duas regras de css para "inverter as bolas", quem era block virou
inline e quem era inline virou block. Veja o resultado [aqui](code2.html "tipos invertidos")



<div class="code menor">
<h6>HTML(inválido)</h6>
<pre>
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;tipos INVERTIDOS&lt;/title&gt;
        &lt;style type="text/css"&gt;
            body * {
                border: 1px solid #000;
                background-color: #F5F5F5;
                margin: 20px;
            }
            div, h1, h2, p {
                display: inline;
            }
            span, img, a {
                display: block;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;Título 1&lt;/h1&gt;
        &lt;h2&gt;Título 2&lt;/h2&gt;

        &lt;span&gt;span 01&lt;/span&gt;
        &lt;span&gt;span 02&lt;/span&gt;
        &lt;span&gt;span 03&lt;/span&gt;


        &lt;p&gt;parágrafo a&lt;/p&gt;
        &lt;p&gt;parágrafo b&lt;/p&gt;

        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;

        &lt;div&gt;div 1&lt;/div&gt;
        &lt;div&gt;div 2&lt;/div&gt;

        &lt;a href="#"&gt;Link 1&lt;/a&gt;
        &lt;a href="#"&gt;também me chamam de âncora&lt;/a&gt;

    &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>




Essa matéria é curtinha, mas não se engane, seguir em frente sem entender (de verdade) é perca de tempo,
aproveite para praticar e como exercício crie algum HTML com a CSS desse exemplo para firmar o conceito.