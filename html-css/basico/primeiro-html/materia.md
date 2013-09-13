Criando nosso primeiro HTML
===========================


O site [csszengarden.com](http://www.csszengarden.com/) é notório por seus esforços em promover e divulgar *o poder do 
CSS unido a um bom HTML*. Ele traz uma proposta interessante: criaram um HTML básico, porém bem formado, válido e 
desafiaram designers solcitando que o estilizassem sem "tocar" no HTML. Em outras palavras, o designer poderá utiliar o 
tema/estilo que quiser, mas não poderá jamais alterar o HTML e sua estrutura.

O resultado você confere no site. Design's realmente incríveis foram elaborados. Incríveis não só pela arte mas
principalmente pela *excelência de técnica utiliza na construção do HTML e do CSS.*

O site possue tradução para o português e também disponibiliza uma lista de links que auxiliarão em sua jornada, não 
deixe de conferir.

Nós iremos utilizar esse HTML para os próximos exercícios, não vamos focar no design (obviamente)
vamos exercitar apenas a construção de um bom HTML e algumas estilizações básicas.

O objetivo deste exercício é familiarizar-se com o desafio de *decidir qual tag utilizar, ou melhor, qual marcação mais
adequado para o conteúdo?*

Uma página da web, uma página de um portal ou uma página de um sistema web (nosso foco) é composta por algum tipo de
conteúdo: texto, cores, links, imagens, gráficos, filmes, audio. Mas principalmente texto.

Imagine que você irá construi apenas uma página simples. Você já possui o texto. Na verdade é tudo muito simples, teremos
apenas títulos e parágrafos.

Crie um arquivo chamado "zengarden-sample.html" e comece colando a estrutura básica do HTML.

<div class="code">
<h6>HTML - Nossa estrutura básica </h6>
<pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;

&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" &gt;

    &lt;head&gt;
        &lt;title&gt;css Zen Garden: The Beauty in CSS Design&lt;/title&gt;

    &lt;/head&gt;

    &lt;body&gt;

    &lt;/body&gt;

&lt;/html&gt;

</pre>
</div>

A um *palavrão* chamado DOCTYPE, eu sei. Em breve falaremos dele.

O título eu mantive o original em inglês.

Dentro do arquivo criado, cole o texto abaixo.

Ele será o conteúdo de nossa primeira página (extraído do site [csszengarden.com](http://www.csszengarden.com/) ).

Após ter lido atentamente o texto, olhe para ele e pergunte-se: *aonde e quais tag's você utilizaria?*

Esse é seu exercício!

1. Cole o texto dentro do corpo do HTML ( entre as tag's "body").
2. Inclua as tag's que achar necessário

Dica: o sinal "#" indicam um subtítulo, você pode e deve removê-los.

<div class="code">
<h6>zengarden-sample.html</h6>
<pre>

css Zen Garden


# A Beleza de um Design CSS

Uma demonstração do que pode ser conseguido visualmente por meio de um design baseado em CSS. Escolha qualquer folha de estilo da lista para carregar um novo design nesta página.

Faça o download dos arquivos de exemplo html e css.

# A Estrada para a Iluminação

Entulhando uma escura e aterrorizante estrada jazem as relíquias antigas de elementos específicos a navegadores, DOMs incompatíveis e falta de suporte correto ao padrão CSS.

Precisamos limpar as nossas mentes das práticas passadas. A iluminação Web foi atingida graças aos esforços incansáveis de pessoas como os membros do W3C, WaSP e dos criadores dos principais navegadores em uso atualmente.

O css Zen Garden convida você a relaxar e meditar nas importantes lições do mestres. Comece a ver com clareza. Aprenda a usar as técnicas (que ainda serão) consagradas pelo tempo de maneiras novas e revigorantes.

# Sobre o Quê é Este Site?

Existe uma clara necessidade de que artistas gráficos levem o padrão CSS mais a sério. O Zen Garden tem como alvo entusiasmar, inspirar e encorajar a participação de todos. Para começar, veja alguns dos designs existentes na lista. Ao clicar em qualquer um deles, a folha de estilo correspondente será carregada nesta página. O código permanece o mesmo; a única coisa que muda é o arquivo .css externo. Sério!

O CSS permite o controle completo e total sobre o modo como um documento é renderizado. O único modo pelo qual esse fato pode ser demonstrado de uma maneira que entusiasme as pessoas é demonstrar quão verdadeira é a realidade do mesmo uma vez que as rédeas são colocadas nas mãos daqueles que são capazes de criar beleza a partir da estrutura. Até o dia de hoje, a maior parte dos exemplos e truques interessantes que podem ser feitos nesta área foram demonstrados por estruturadores e programadores. Artistas gráficos ainda não deixaram a sua marca nessa arena. Isto precisa mudar agora.

# Participação

Somente artistas gráficos podem participar. Você vai modificar a apresentação desta página e, para isto, uma boa dose de habilidade com CSS é requerida, embora os arquivos de exemplo estejam comentados o suficiente para permitir que mesmo novatos com o padrão possam usá-los como uma base para seus experimentos. Para dicas e tutoriais avançados sobre CSS veja o guia de recursos adicionais.

Você pode modificar a folha de estilo de qualquer maneira que achar necessária, mas o código HTML deve ser deixado como está. Isso pode parecer difícil no começo se você nunca trabalhou desse modo antes, mas siga a lista de recursos para aprender mais e use os arquivos de exemplo como guias.

Faça o download dos arquivos de exemplo html e css para trabalhar localmente. Assim que você completar a sua obra-prima (e, por favor, não envie trabalhos incompletos), coloque o arquivo .css resultante em um servidor web sob o seu controle. Envie-nos um link para o arquivo e, se nós nos decidirmos a usá-lo, nós obteremos as imagens associadas através do mesmo. Submissões finais serão colocadas em nosso servidor.

Atualização: Estamos procurando tradutores. Se você é fluente em inglês e outra linguagem, esta é outra maneira de se envolver com o projeto. Por favor, contate-nos para maiores detalhes. Algumas traduções já estão disponíveis. Tradução por Ronaldo Ferraz.

# Benefícios

Para quê participar? Para obter reconhecimento, inspiração, e um recurso ao qual todos nós poderemos nos referir quanto batalharmos pelo uso de designs baseados em CSS. Iso ainda é muito necessário hoje. Muitos grandes sites estão convertendo suas páginas para este tipo de design, mas a vasta maioria ainda usa código ultrapassado e inválido. Um dia esta galeria será uma curiosidade histórica; porém, este dia ainda não chegou.

# Requerimentos

Nós gostaríamos de ver o máximo possível de CSS1. O uso de CSS2 deve ser limitado aos elementos suportados pelos navegadores em uso atualmente. O css Zen Garden existe para demonstrar o uso prático e funcional do padrão CSS e não para mostrar os truques mais avançados ainda somente disponíveis para os 2% do público que usa navegadores mais modernos. O único requerimento real, entretanto, é o seu CSS valide.

Infelizmente, criar o design dessa maneira colocará em evidência as falhas nas várias implementações CSS disponíveis atualmente. Diferentes navegadores comportam-se de maneira distinta quanto a alguns elementos, mesmo quando o CSS é válido. Isso pode se converter em uma fonte de frustrações, principalmente quando uma correção para um navegador atrapalha outro. Veja a página de recursos para algumas soluções dyum install http://winff.org/docs/rpm/fedora/winff-repo-1.0-1.noarch.rpmisponíveis. Compatibilidade total com todos navegadores ainda é um sonho e nós não esperamos que você consiga um design perfeitamente preciso até o último pixel em todas as plataformas. Mesmo assim, teste em todas que conseguir. Se o seu design não funciona pelo menos no IE5+/Win e Mozilla (que compõem 90% da população de navegadores), as chances são grandes de que nós não o aceitaremos.

Nós pedimos que você envie ilustrações originais. Por favor, respeite as leis de copyright. Mantenha o material questionável ao mínimo: nudez artística é aceitável; pornografia explícita será rejeitada imediatamente.

Este é um exercício de aprendizado na mesma medida em que é uma demonstração. Você manterá o copyright completo de todos os seus gráficos, mas pedimos que você libere o seu CSS sob uma licença Creative Commons idêntica à deste site de modo que outros possam aprender do seu trabalho.

A banda usada por este site está sendo graciosamente doada por mediatemple.

</pre>
</div>


E aí, terminou? Então pode ver a solução.


### Solução

<div class="code">
<h6>HTML</h6>
<pre>

<em>&lt;h1&gt;</em>css Zen Garden<em>&lt;/h1&gt;</em>

<em>&lt;h2&gt;</em>A Beleza de um Design CSS<em>&lt;/h2&gt;</em>

<em>&lt;p&gt;</em>Uma demonstração do que pode ser conseguido visualmente por meio de um design baseado em CSS. Escolha qualquer folha de estilo da lista para carregar um novo design nesta página.<em>&lt;/p&gt;</em>

<em>&lt;p&gt;</em>Faça o download dos arquivos de exemplo html e css.<em>&lt;/p&gt;</em>

<em>&lt;h2&gt;</em>A Estrada para a Iluminação<em>&lt;/h2&gt;</em>

<em>&lt;p&gt;</em>Entulhando uma escura e aterrorizante estrada jazem as relíquias antigas de elementos específicos a navegadores, DOMs incompatíveis e falta de suporte correto ao padrão CSS.<em>&lt;/p&gt;</em>

etc...

</pre>
</div>

Essa foi fácil!

O mais importante é você entender que não existe marcação certa ou errada. Mas existe a marcação adequada, limpa e de
fácil leitura.

Assista ao vídeo da solução que acompanha esta matéria.

Obs: A voz doce ao fundo é minha querida Joana.

<div class="imagem">
	<iframe width="560" height="315" src="http://www.youtube.com/embed/IMswx5wcqA0" frameborder="0" allowfullscreen>
	</iframe>
</div>
