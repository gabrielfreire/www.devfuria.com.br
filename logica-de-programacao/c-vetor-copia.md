---
layout:      materia
title:       "Vetor cópia - linguagem c"
description: Exercício de lógica de programação envolvendo vetor e os diversos tipos de laços.
---

Crie um algoritimo para copiar um vetor (utilize laço de repetição).

Use a nomenclatura `vetor1` para o vetor original e `vetor2` para o vetor copiado.



Solução passo a passo
---

Imaginando que o primeiro vetor poderia ser pequeno como este aqui: `vetor1[3] = {10, 20, 30}`.

Então, os testes seriam:

    assert(vetor2[0] == 10);
    assert(vetor2[1] == 20);
    assert(vetor2[2] == 30);


E a solução poderá ser esta...


Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int main() {
    int i,
        vetor1[3] = {10, 20, 30},
        vetor2[3];

    for(i = 0; i < 3; i++) {
        vetor2[i] = vetor1[i];
    }
    
    assert(vetor2[0] == 10);
    assert(vetor2[1] == 20);
    assert(vetor2[2] == 30);

    return 0;
}
{% endhighlight %}



Desafio
---

Nesse exercício nós utilizamos valor arbitrários. O ideal seia constuir um código reutilizável.

Refaça o exercício utilizando funções, teste 2 vetores diferentes (ao invés de um só).

