---
layout:      materia
title:       Expressões Regulares em PHP
description: 
---



Em PHP temos os dois mudos: PCRE e POSIX.

As funções da versão POSIX estão depreciadas na versão 5.3 do PHP.

A versão PREC é a mais atual.

Segundo o Marinho, as funções PCRE são mais rápidas que as POSIX e para funcionarem o PHP deverá ser compilado com
suporte a bilioteca PCRE.

Em PHP as expressão regulares devem ser tratadas como strings entre aspas, exemplo:

    '/sua expressão regular/'

As funções POSIX são derivadas de `ereg()`.

As funções do PREC são derivadas de `preg_macth()`.



Manual PHP
---

-[PCRE](http://www.php.net/manual/pt_BR/book.pcre.php "link-externo")
-[POSIX](http://www.php.net/manual/en/reference.pcre.pattern.posix.php "link-externo")