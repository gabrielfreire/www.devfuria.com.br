preg\_match()
==============

A função preg\_match() refere-se a versão PCRE, versão compatível com PHP 5.3.

Para iniciarmos vamos utilizar o exemplo básico da matéria de introdução ([link](link))

Temos a string original:

    "Casa com a palavra exemplo"

E queremos encontrar a string:
    
    "exemplo"

Esse exemplo é tão simples, que talvez você esteja se perguntando:

Porque não utilizar uma função qualquer para encontra a string?

Sim claro, você tem toda razão, mas vamos combinar o seguinte: nossos exemplos serão fácies (e talvez sem sentido prático)
apenas para facilitar seu aprendizado.

Em breve faremos voôs mais altos, ok? "Tudo a seu tempo".



### preg\_match()

A função *preg_match()* aceita 5 parâmetros, sendo os dois primeiros obrigatórios.

1. O primeiro parâmetro é a expressão regular.

2. O segundo parâmetro é a string onde pesquisaremos a expressão.

3. O terceiro parâmetro é um array que armazenará os resultados (partes) da string original

Estou utilizando também o terceiro parâmetro e inclusive uma variável $resultado para pegar o resultado de execução
da função.

Veja mais sobre a função na documentação oficial:
[http://php.net/manual/en/function.preg-match.php](http://php.net/manual/en/function.preg-match.php "")


<div class="code">
<h6>PHP</h6>
<pre>&lt;?php
$pattern   = "/exemplo/";
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);
var_dump($resultado, $retorno);
?&gt;</pre>
</div>

Se olharmos para dentro das variáveis $retorno e $resultado teremos, respectivamente "1" e um array com a string "exemplo".

É como se isso estivesse acontecendo:

    $retorno = 1;
    $resultado = array("exemplo")

...veja o resultado do var_dump($resultado, $retorno);:

<div class="imagem">
    <img src="var-dump-resultado.png" alt="var_dump nas variáveis resultado e retorno" />
</div>

A função retorna um valor para sabermos se obtivemos sucesso ou não e, no caso do sucesso, podemos saber quais as partes
que casaram.




### Se a expressão não casar

Executando o seguinte código:

<div class="code">
<h6>PHP</h6>
<pre>&lt;?php
$pattern   = "/não existe/";
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);
var_dump($resultado, $retorno);
?&gt;</pre>
</div>

...recebemos um int 0  na variável $resultado e um array vazio na variável $retorno.

Isso siginifica que a função retorna 1 caso a expressão case e 0 (zero) caso NÂO case, até rimou.

Podemos descobrir se a expressão não casou através de...

    count($retorno) === 0

Você decide o que usar, eu prefiro testar o resulado da função (variável $resultado).



### Se a expressão estiver sintaticamente errada

Se executarmos o código abaixo, ele falhará. Eu coloquei um ( a mais.

<div class="code">
<h6>PHP</h6>
<pre>&lt;?php
<em>$pattern   = "/(exemplo/";</em>
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);
?&gt;</pre>
</div>

Tanto a variável $resultado será igual a false como receberemos um *warning* dizendo que a compilação da expressão falhou
(outros tipos de erros também aparecem):

<div class="imagem">
    <img src="regexp-erro.png" alt="warning retornado pela função" />
</div>

Precisamos tratar o erro adequadamente (tudo bem, warning não é erro, mas não deixa de ser um aviso importante), porém
por enquanto não vamos nos preocupar com isso.




### Código final


Sabendo como a função se comporta, podemos esboçar nossa lógica da seguinte forma:

    se o valor é igual a 1 então
        print "casou"
    se o valor é igual a 0 então
        print "não casou"
    se o valor é igual a false então
        print "ocorreu um erro"

E aí fica fácil escrevermos o ćodigo final.

<div class="code">
<h6>PHP</h6>
<pre>&lt;?php
$pattern   = "/exemplo/";
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);

if ($resultado === 1) {
    print "casou";
    var_dump($retorno);
    
} else if ($resultado === 0) {
    print "não casou";
    var_dump($retorno);
    
} elseif ($resultado === false) {
    print "ocorreu um erro";
    
}
?&gt;</pre>
</div>


