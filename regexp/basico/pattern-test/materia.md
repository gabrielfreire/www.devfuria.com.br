pattern.test()
==============


Em JS também temos a forma *pattern.test()* onde "pattern" é expressão regular, "test()" é a função que evocamos
para executar a ER e o parâmetro 'string passado na função é a nosso texto de pesquisa (assunto).

Essa é a forma mais usual, ou pelo menos é a mais comentada.

<div class="code">
<h6>JS</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);
</pre>
</div>


Diferentemente da primeira função (string.match), o valor da variável *resultado* será true ou false.



### Se a expressão não casar

A função retorna *false* neste caso.

<div class="code">
<h6>JS</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern = /não existe/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);
</pre>
</div>



### Se a expressão estiver sintaticamente errada

Se executarmos o código abaixo, ele falhará. Eu coloquei um ( a mais.

<div class="code">
<h6>JS</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern = /(exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);
</pre>
</div>


Igualmente a função match(), a execução do código será interrompida e o Firebug mostrará a seguinte mensagem:
<div class="imagem">
    <img src="match-erro.png" alt="match-resultado" />
</div>



### Code

Como a função retorna apenas true ou false, fica facíl deduzirmos o código final.

Porém, é válida a mesma observação quanto ao uso do bloco "try cath" (no caso da expressão estar sintáticamente errada).

<div class="code">
<h6>JS - código final</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
</pre>
</div>