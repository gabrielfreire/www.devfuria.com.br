---
layout:      materia
title:       Problemas na instalação do Debian 7 (netinst)
description: Algumas dicas de como se virar com a instalação do Debinan whezzy (netinst)
---


Ao instalar o __Debian 7__ (cd netinst) o instalador pode não reconhecer sua placa de rede ou, o pior, não conseguir
obter um número de IP válido.

A consequência é que os pacotes com os softwares (incluíndo interface gráfica) não serão instalados, em outras palavras,
apenas o sistema básico é instalado (modo texto). Ao iniciar a máquina, você fica apenas com o prompt de comando.

Acontece que você só descobre isso quando chega a hora do instalador adicionar os pacotes dos repositórios. __O instalador
responde que o repositório não é compatível com seu release.__ Mas não é bem isso, o problema, normalmente, é que não
houve conexão com a rede/Internet. 

Não vou dizer que há uma solução específica para o problema. Acho que cada caso é um caso, eu mesmo instalei o __Debian__
em máquinas diferentes e em algumas delas não tive problema algum.

Então vou passar as possíveis soluções e alguns macetes que talvez possam te ajudar.



Desabilite o DHCP no momento da instalação
---

Ao iniciar a instalação você pode escolher algumas opções: 

- __Install__ : instala o sistema completo mais o instalador é __modo texto__.
- __Graphicall Install__ : também instala o sistema completo mais o instalador é __modo gráfico__.

Antes de escolher um desses caminhos (ambos devem chegar no mesmo resultado), acione a tecla __TAB__ para alterar
as opções de instalação e digite (no final de tudo):

    netcfg/disable_dhcp=true

Isso irá desabilitar o __DHCP__, ou seja você terá que configurar manualmente a sua rede, quero dizer que você terá
que ter em mãos o seguinte:

- um número de __IP__ disponível (normalmente algo perto de 192.168.0.xxx)
- a máscará da rede (normalmente 255.255.255.0)
- e o __DNS__ (normalmente 192.168.0.1, parece-se com o IP mas não é o IP).

Se você tiver certeza dessas informações fique tranquilo pois a interface de instalação lhe ajudará a configurar a rede.




Se o problema for o reconhecimento da placa de rede (e não a configuração)
---

Não é um passo a passo e sim uma série de comandos que devem lhe ajduar a diagnosticar o problema.

Na interface de instalação digite __CRTL + ALT + F1__ para alternar para um terminal.

Utilize o comando `ifconfig -a` para  listar todas as placas conectadas.

O comando `lspci -v` lista as placas pci.

Utilize o comando `iwconfig` para saber se a placa está ok. Ele é uma espécie de __ifconfig__, porém específico para 
redes sem fio. O comando lhe dará detalhes da força do sinal, uso de criptografia, nome de SSID, etc...

O comando `dmesg | grep eth` procura por informações sobre placas ethernet, eth0, eth1, etc...

Rode o comando `mii-tool` para saber se o cabo de rede estiver conectado a placa, provavelmente ela será listada.


Como descobrir qual é o seu problema de fato
---

Quando estiver instalando o __Debian__ você poderá acionar as teclas __CRTL + ALT + F4__ para ver o terminal e o que
está acontecendo (inclusivo aonde está parando).

Digite __CRTL + ALT + F5__ para voltar para a tela de instalação.

Digite __CRTL + ALT + F1__ para abrir o terminal se precisar executar alguns comandos, ver logs, etc...


<hr>
Fonte

- [Debain como desktop "Capítulo 6 do livro Linux Guia prático, Morimoto"](http://www.hardware.com.br/livros/linux/capitulo-debian-como-desktop.html "link-externo")