new RegExp()
==============

Utilizando-se do construtor RegExp() podemos compilar a expressão regular antes de usá-la. 

Isso é uma vantagem? Não exatamente.

Caso sua expressão esteja sintaticamente errada o erro existirá como nos demais exemplos e seu código irá travar.

Uma vantagem seria o fato de ser possível criar a expressão regular apartir de uma string, isto quer dizer que
é possível criar a expressão de forma dinâmica.

Imagine que o usuário irá digitar a palavra "exemplo" e o sistema armazenará o valor na variável *regexp*. Agora é só 
passar a variável para o construturor e executar a expressão.

Resumindo, a ER criada apartir de uma string lhe derá mair poder de flexibilidade e, obviamente, maior responsabilidade.


<div class="code">
<h6>JS</h6>
<pre>
var string = "Casa com a palavra exemplo",
    pattern,
    resultado;

// pattern.test
pattern = new RegExp(regexp);
resultado = pattern.test(string);
console.log(pattern, resultado);


// pattern.exec
pattern = new RegExp(regexp);
resultado = pattern.exec(string);
console.log(pattern, resultado);


// string.match
pattern = new RegExp(regexp);
resultado = string.match(pattern);
console.log(pattern, resultado);
</pre>
</div>

Uma vez com a ER compilada podemos executá-la em qualquer uma das três formas já discutidas nas matérias anteirores.


Leituras adicionais sugeridas
-----------------------------

<dl id="leitura_adcionais">
    <dt>Internet</dt>
    <dd>Leia as três materias anteriores a estas falando sobre as funções exec(), teste() e match()
        <a href="http://www.php.net" >http://www.php.net</a>
        <a href="http://www.php.net" >http://www.php.net</a>
        <a href="http://www.php.net" >http://www.php.net</a>
    </dd>

    <dd>Documentação Oficial falando sobre o objeto global RegExp. Apesar de ser um rascunho há informações
        bastante precisas
        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions?redirectlocale=en-US&redirectslug=JavaScript%2FGuide%2FRegular_Expressions</a>
    </dd>
</dl>




