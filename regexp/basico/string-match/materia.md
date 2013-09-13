string.match()
==============


Em JS temos a forma *string.match()* onde "string" é a variável contendo a sua string e "match()" é a função que evocamos
para executar a ER.

<div class="code">
<h6>JS</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);
console.log(resultado);
</pre>
</div>

Se a ER casar com a string então a variável *resultado* conterá um array com a parte que casou, mas apenas a primeira
ocorrência.

Se olharmos mais atentamente poderemos observar que a função math() não apenas retorna um array como também um objeto
(arrays são objetos em JS).

A janela do Firebug mostra o sinal "+" se clicar em cima dele o objeto se expandirá conforme a figura abaixo:

<div class="imagem">
    <img src="match-resultado.png" alt="match-resultado" />
</div>

O valor da variável *resultado* na verdade é:

    resultado[0] = string "casa"
    resultado['index'] = 19
    resultado['input'] = ""Casa com a palavra exemplo.""

*resultado[0]* é o array retorando pela função, ele contém o valor da parte que casou.

*resultado['index']* é um inteiro, ele indica a primeira posição dentro da string que coincidiu com o valor procurado.

*resultado['input']* é a string original onde procuramos o nosso fragmento.



### Se a expressão não casar

Neste caso, o valor da variável *resultado* será apenas *null*

<div class="code">
<h6>JS</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern = /não existe/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);
console.log(resultado);
</pre>
</div>


    resultado = null;



### Se a expressão estiver sintaticamente errada

Se executarmos o código abaixo, ele falhará. Eu coloquei um ( a mais.

<div class="code">
<h6>JS</h6>
<pre>
var string = "Casa com a palavra exemplo",
    <em>pattern = /(exemplo/,</em>
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);
console.log(resultado);
</pre>
</div>


A execução do código será interrompida, o Firebug mostra a seguinte mensagem:
<div class="imagem">
    <img src="match-erro.png" alt="match-resultado" />
</div>



### Code

Quando a expressão casa com uma parte do texto, ou seja, quando encontramos algo na string de pesquisa, a função retorna
um objeto com alguma prorpiedade (como visto no início da matéria).

Como, então, faremos para checar se o obtevemos sucesso ou não?

Bom, ao especionarmos o valor da variável *resultado* ela retorna primeiro o array, conforme trecho abaixo:

    resultado = ['exemplo'];

As demais propriedades ainda estão disponíveis, veja:

    console.log(resultado[0])       // exibibe 'string "casa"'
    console.log(resultado['index']) // exibibe 19
    console.log(resultado['input']) // exibibe 'string "Casa com a palavra exemplo"'


Caso a expressão não case, então o resultado será null, logo, nosssa lógia poderá ficar como mostrado abaixo:

    se casou então
        print "casou"
    senão
        print "não casou"

E o nosso código ficará como se segue:

<div class="code">
<h6>JS - código final</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
</pre>
</div>

Lembre-se que se a expressão estiver sintaticamente errada ela interromperá a excução do script, logo, o uso dos blocos
de tratamento de erro (try cath) se faz necessário.