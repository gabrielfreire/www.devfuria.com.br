Instalando o Ambiente no estilo NEXT, NEXT, NEXT.
=================================================

*Todo programador precisa saber “levantar” seu próprio ambiente de trabalho*, me refiro a instalar os programas necessários
para começar o desenvolvimento. Inclua na lista: o servidor web(apache), o módulo PHP, o banco de dados, a API (interface)
do banco de dados, o editor de código, o controlador de versão, a escolha do sistema operacional, etc... Após instalado
os componentes, devemos configurar cada um deles.

Não pense que existe um tutorial mágico que lhe ensinará a fazer essas coisas rapidamente, porquê realmente não existe.
Por outro lado, se o leitor for um inicante poderá achar a mão de obra da instalação e configuração um serviço um tanto
penoso, e defato o é. Então, sugiro duas situações:

a) (básico)instalar tudo muito rapidamente para poder começar a programar ou

b) (avançado)aprender a instalar tudo com muita propriedade, digno de um mestre no assunto.

O primeiro caso poderá ser resolvido com a leitura atenta desse artigo. O segundo caso eu aconselho a todos que quiserem
se profissionalizar. É importante que o profissional conheça as minúcias do ambiente de desenvolvimento e, se este for o
seu caso, procure por artigos que tratem os componentes de forma separadas pois, convenhamos, não caberia em um único
artigo a correta instalação e configuração de cada um dos componentes.

Há ainda a questão da preferência. Não existe o ambiente correto, existe a preferência sobre quais ferramentas instalar
e como configurá-las. Pouco se discute sobre o ambiente de desenvolvimento, mas um pensamento é unânime: *“o ambiente de
desenvolvimento deve simular ao máximo o ambiente de produção”*, porém acredito que isso (por enquanto) não deva ser
preocupação de um programador iniciante.

Se você é do mundo Linux, ótimo. Se você é do ambiente Windows, gostaria de convidá-lo a experimentar o mundo Linux.
Agora, se você aspira ser um profissional da área de TI, será sua obrigação conhecer outros sistemas operacionais além
do Windows.

Que tal começar pelo Linux?.


### E o pessoal do Windows? ###

Para o pessoal windows eu sugiro a instalação do WAMP, procure por "wamp server".

Ele já instala tudo no estilo next, next, next, finish: apache, mysql, php, phpmyadmin.

Irá faltar apenas o X-debug.


Botando a mão na massa
----------------------

Não vou explicar em detalhes como fazer a instalação, já existe bons artigos sobre o assunto, veremos dicas práticas que
poderão lhe ajudar.

Se você nunca usou o linux, aconselho a leitura do livro "Linux guia prático(Morimoto)". Um livro bastante consiso, prático
e básico sem perder a profundidade.

<div class="imagem">
    <img src="../../imagens/linux-guia-pratico-morimoto-.jpg" alt="Livro sobre o linux, autor Morimoto" />
    <p>Ótimo livro para iniciantes no Linux</p>
</div>


A primeira coisa que aprende-se sobre um sistema operacional é como instalá-lo. Novcaso do Linux, você terá que decidir
entre mais de 500 distribuições(versões).

Tudo bem, existem apenas umas 10 distro principais. Em 2013 a versão do ubuntu 12.10 é uma distro bastante popular, que
tal começar por ela? Procure pelo site oficial, baixe a versão iso (uma imagem que é queimada, gravada bit a bit no cd)
e comece tentando instalar o sistema. Não aconselho a instalar o Linux como "dual boot" com o Windows, pelo menos não
neste momento. Utilize uma máquina virtual para reduzir o impacto, o VirtualBox da Sun (agora Oracle) é open source e
uma boa opção.

Explicar a *instalação do Linux foge do escopo deste trabalho*, também não será preciso pois, existem centenas de artigos
que explicam muito bem o passo a passo. Neste ponto é aconselhável trabalhar com máquinas virtuais. Repetindo,* é menos
impactante instalar os sistema em uma máquina virtual do que na sua máquina principal*, assim se algo der errado sempre
poderá voltar atrás.

De forma grotesca, há duas fámílias de distro bastante conhecidas no mundo linux: A família Had Rat e a família Debian.
A distro Had Hat originou o CentOS e o Fedora e a família Debian originou o Ubuntu.

Teoricamente, se você conhece bem o "esquema geral" do sistema Linux conseguirá se virar em qualquer distro. As
diferênças, as vezes, são poucas. Como por exemplo no Ubuntu para instalar programas utiliza-se o "apt-get" e no Fedora
utiliza-se o "yum".

<span style="text-decoration:line-through;">Como estou mais familizarizado com o Ubuntu, vou continuar este tutorial
considerando-o. Prometo que volto para atender aos usuários da família Had Rat (estou fazendo testes no FEDORA).</span>
OK já voltei.

Uma vez com o sistema Linux instalado (Ubuntu ou Fedora) a primeira coisa que deve ser feita e definir uma senha para o
usuário "root". Abra o termial (tente CTRL+ALT+U) e digite:

    sudo passwd root

Após digite a senha do seu usuário (definida na instalação) e na sequência digite a senha do root. Para rodar alguns
comandos é preciso ter autorização de root. Ou vocẽ digita "sudo" antes de cada comando (será preciso fornecer a senha
do root) ou vira root e vai trabalhando. Para virar root digite:

    su root

... e forneca a senha definida anteriormente. Os comandos apresentados na sequência consideram que você seja root ou
que utilize o "sudo". O sinal # no início de cada comando explicita o que eu acabei de falar, logo não é necessário
digitá-lo junto com o comando, rs.



### Atualizando o sistema (via terminal) ###

Abra o Ubuntu e digite:

Ubuntu

    apt-get update
    apt-get upgrade

No Fedora também temos os comandos update e upgrade, porém eles fazem coisas diferentes. Eu aconselho a utilizar a
interface gráfica para atualizar o sistema.



### Instalando o Apache2 ###

No Ubuntu digite:

    apt-get install apache2

no Fedora são três linhas...

    yum install httpd
    chkconfig --levels 235 httpd on
    systemctl start httpd.service


Para ter certeza de que o apache foi instalado corretamente, abra um navegador qualquer é digite http://localhost. É
exibido uma página simples com a frase “It’s work”.



### Instalando o PHP ###

Na sequência instalamos o php, no terminal do Ubuntu digite:

    apt-get install php5 libapache2-mod-php5

No terminal do Fedora digite:

    yum install httpd php php-common // fedora


Para testar o php, crie um arquivo com onome index.php conforme mostrado abaixo e salve em /var/www (Ubuntu) e
/var/www/html (Fedora). É preciso ser root para inserir arquivos nesta pasta.


<div class="code">
<h6>index.php</h6>
<pre>&lt;?php
echo phpinfo();
?&gt;</pre>
<p> Este arquivo dá um print no resultado da função phpinfo(), essa função traz dados preciosos sobre a instalação</p>
</div>

Abra o navegador e digite novamente http://localhost. Agora aparecerá a tela do php e as informações da instalação.

Neste momento, é aconselhável instalar alguns módulos complementares que serão úteis no futuro. Com o tempo você
"descobrirá" os "seus" pacotes. Mas por enquanto instale estes:

no Ubuntu...

    apt-get install php5-mysql php5-curl php5-gd php5-idn\ php5-dev php-pear

no Fedora...

    yum install php-pecl-apc php-cli php-pear php-pdo php-mysql php-pgsql php-pecl-mongo
	      php-pecl-memcache php-pecl-memcached php-gd php-mbstring php-mcrypt php-xml



Para que o apache, juntamente com o módulo do php execute os scripts eles devem ser ser salvos no “documentroot”
(raiz do documento). “DocumentRoot” nada mais é do que a pasta na qual o servidor “sabe” que contém arquivos nos quais
ele deve ler e intrepretar. Por padrão, no Linux a pasta é /var/www (Debian e derivados) e /var/www/html (RedHat e
derivados).

É possível alterar este local configurando diretamente o arquivo /etc/ini.d/conf.d. Após realizado a configuração devemos
parar o servidor e reiniciá-lo e prestar atenção para ver se ele não derá nenhuma mensagem de erro. Também é possível
forçar o reinicialização sem precisar parar o servidor, evitando deixá-lo fora do ar. Essa tarefa fica por sua conta, ok?

Além das configurações do apache pode-se alterar as configurações do próprio php. Para isto basta encontrar o arquivo
php.ini e alterar o que for necessário. Normalmente configura-se o ambiente de desenvolvimento para que seja exibido
todos os erros e o que mais preferir.


### Alterando o php.ini ###

No terminal é possível utilizar alguns editores de textos como o "vi" (que já vem instalado) ou o "vim" e o "nano" (que
devem ser instalados). Eu gosto de utilizar o nano pois ele é mais fácil. Instale o "nano" digitando:


    apt-get install nano // ubuntu
    yum install nano // fedora

Com o nano instalado, digite:

    nano /etc/php5/apache2/php.ini // ubuntu
    nano /etc/php.ini // fedora

Procure as linhas a seguir e altere como se segue:

<div class="code">
<h6>Texto Plano</h6>
<pre>
error_reporting = E_ALL
display_erros= On
display_startup_erros = On
track_erros = On
html_erros = On
</pre>
</div>


Salve o arquivo digitando CRTL+O, confirme pressionando ENTER, agora feche o arquivo digitadno CTRL+W.
O nano é muito fácil, diz aí? Reinicie o apache:

    /etc/init.d/apache2 restart // ubuntu
    systemctl start httpd.service // fedora

### Instalando o X-Debug ###

O X-debug é uma ferramenta útil prá cara... Ele ajuda a formatar a saída dos dados e é possível utilizá-lo com a interface
do NetBeans. Neste momento, talvez você não entenda o que ele é, nem seu potencial, mas aproveite para instalá-lo agora.
Um dia você ainda vai me agradeçer, rssss. Com o PECL(pear)pode-se instalar novos pacotes no estilo apt-get, no caso
vamos instalar o pacote x-debug no Ubuntu:

    pecl install xdebug

Onde será que o Linux gravou a extensão x-debug? Digite e anote o caminho:

    find/ -name 'x-debug.so'2> /dev/null

Agora, precisamos dizer ao php que o x-debug existe. Par tal é preciso incluir um linha no final do arquivo php.ini.
Abra novamente o php.ini:

    nano /etc/php5/php.ini

No final do arquivo ou no fim da seção "extenções" inclua a seguinta linha:

<div class="code">
<h6>Texto Plano</h6>
<pre>Zend_extension="/usr/lib/php5/caminho_anotado"</pre>
</div>

Reinicie o apache (o comando nós já vimos).


No Fedora bastam 2 linhas...

    yum install php-pecl-xdebug
    systemctl restart httpd.service


### Instalando o MySql ###

Agora chegou a vez o banco de dados, instale o mysql no Ubuntu digitando...

    apt-get install mysql-server mysql-client

Enquanto os arquivos são baixados e instalados o sistema lhe perguntará qual será a senha do root (para acessar o banco
de dados), anote-a.

No fedora é parecido, só que você é quem define a senha, então instale o mysql no Fedora...

    yum install mysql mysql-server

inicie o serviço... 

    systemctl start mysqld.service
    systemctl enable mysqld.service
    
e habilite a senha digitando...
    
    mysqladmin -u root password [your_password_here]

Para saber se deu certo tente acessar o prompt do mysql digitando...

    mysql -h localhost -u root -p

O sistema solicitará a senha, digite-a. Se estiver enchergando o prompt está tudo OK, digite "exit" para sair.



### Instalando o PhpMyAdmin ###

Na sequência instale o phpmyadmin, este aplicativo é responsável por oferecer uma interface amigável de trabalho ao
usuário do banco.

    apt-get install phpmyadmin

Responda as perguntas que o instalardor fará (nenhum segredo) e ao final, abra o navegador e digite "localhost/phpmyadmin"
a tela de login deve ser exibida, digite novamente o usuario do mysql (root) e sua senha. Pronto, você está dentro do
sistema, agora é possível manipular o mysql com um interface amigável.

No Fedora, após a instalação, será preciso reiniciar o apache...

    yum install phpmyadmin
    systemctl restart httpd.service



### Finalizando ###

Anotou tudo que instalamos até aqui? vamos lá:

1. Com o sistema Linux instalado, definimos uma senha para o root.
2. Atualizamos o sistema (linux).
3. Instalamos o servidor web apache
4. Instalamos o módulo php e alteramos o php.ini para exibir os erros.
5. Instalamos o x-debug para nos ajudar na debugação.
6. Instalamos o banco de dados Mysql.
7. Instalamos o Phpmyadmin, uma interface para o mysql.

Ufa!!! Mas ainda falta algumas "coisinhas". Ainda temos o editor de código, o controlador de versão, os navegadores e
seus plugins, e etc.. Só que neste ponto, a escolha dos aplicativos é uma questão pessoal, então fica apenas a sugestão.

Como *editor de código* eu sugiro o *Netbeans*, ele é open source e tem umas funcionalidades muito interessantes. Para
instalá-lo é preciso, primeiramente, ter o java (JDK) previamente instalado. Tente instalar a versão openJavaX (onde x
é a versão do java) via Softer Center (ainda estamos no ubuntu). Após isso, basta baixar o arquivo de instalação do
Netbeans, procure pela versão PHP que tem aproximadamente uns 50mb. É preciso dar permissão de execução no arquivo e em
seguida executá-lo (obviamente).

Como controlador de versão eu sugiro o *svn* que ainda é muito utilizado. Dá para instalar pelo repositório da distro, eu
utilizava o svn no windows e sentia falta de uma interface no nautilus (o gerenciador de arquivos do linux) então eu
descobri o nautilus-svn, procure por rabbit-svn e instale ele também. Atualmente (2013) a controle de versão mais
utilizado e divulgado é o *GIT*, procure por "github" e aprenda mais sobre este controlador de versão.

Como navegador eu sugiro o *Firefox* e não se esqueça dos plugins *FireBug e WebDeveloper* eles quebram um galho enorme.

Espero que você tenha sobrevivido.


Leituras adicionais sugeridas
-----------------------------

<dl id="leitura_adcionais">
    <dt>Internet</dt>
        <dd>Matéria da comunidade Ubuntu onde eles comparam e demonstram os comandos equivalentes tanto no Ubuntu como no Fedora.
            <a href="https://help.ubuntu.com/community/SwitchingToUbuntu/FromLinux/RedHatEnterpriseLinuxAndFedora" >https://help.ubuntu.com/community/SwitchingToUbuntu/FromLinux/RedHatEnterpriseLinuxAndFedora</a>
        </dd>
</dl>