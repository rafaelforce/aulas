# Projeto Final - Site estilo Twitter

Site com acesso a banco de dados MySQL estilo Twitter.

O objetivo é consolidar todos os conhecimentos adquiridos ao longo do curso nesse projeto final.

O site tem a seguinte estrutura de arquivos:

[root@bwsrv /var/www/html/twitter_clone]# ls -l<br>
total 64<br>
-rw-r--r-- 1 apache apache  669 Feb  9 21:14 db.class.php -> classe pra conexão com banco de dados<br>
-rw-r--r-- 1 apache apache  555 Feb  2 12:53 deixar_seguir.php<br>
-rw-r--r-- 1 apache apache 1871 Feb  4 12:07 get_pessoas.php<br>
-rw-r--r-- 1 apache apache 1140 Feb  4 12:58 get_tweet.php<br>
-rw-r--r-- 1 apache apache 4341 Feb  5 15:44 home.php -> página que o usuário acesso após login<br>
drwxr-xr-x 2 apache apache   30 Jun 21  2016 imagens -> Contém uma imagem que é o logo do Twitter<br>
-rw-r--r-- 1 apache apache  473 Jan 31 10:05 inclui_tweet.php<br>
-rw-r--r-- 1 apache apache 3565 Jan 23 13:39 index.php<br>
-rw-r--r-- 1 apache apache 2883 Jan 26 21:53 inscrevase.php<br>
-rw-r--r-- 1 apache apache 5069 Feb  5 15:45 procurar_pessoas.php<br>
-rw-r--r-- 1 apache apache 1479 Jan 26 21:54 registra_usuario.php<br>
-rw-r--r-- 1 apache apache  138 Jan 23 17:39 sair.php<br>
-rw-r--r-- 1 apache apache  523 Feb  2 12:22 seguir.php<br>
-rw-r--r-- 1 apache apache  564 Jan 26 15:00 teste_mysqli.php<br>
-rw-r--r-- 1 apache apache  832 Jan 31 09:58 validar_acesso.php<br>

Fase 1

Pré-requisitos:

Descompacte o arquivo no document_root (c:\xampp\htdocs\) do seu servidor web

1 - É necessário criar uma base de dados no MySQL e algumas tabelas.<br>
  1.1 Crie a base de dados twitter_clone<br>
      &nbsp;&nbsp;&nbsp;&nbsp;> [prompt] mysql -uroot -hlocalhost -p<br>
      &nbsp;&nbsp;&nbsp;&nbsp;> [mysql] CREATE DATABASE twitter_clone;<br>
      &nbsp;&nbsp;&nbsp;&nbsp;> [mysql] USE twitter_clone;<br>
  1.2 Crie a tabela usuarios com os seguintes campos:<br>
      id int not null primary key auto_increment,<br>
      usuario varchar(50) not null,<br>
      email varchar(100) not null,<br>
      senha varchar(32) not null<br>
      &nbsp;&nbsp;&nbsp;&nbsp;> [mysql] CREATE TABLE usuarios (<br>
        &nbsp;&nbsp;&nbsp;&nbsp;id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;usuario VARCHAR(50) NOT NULL,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;email VARCHAR(100) NOT NULL,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;senha VARCHAR(32) NOT NULL<br>
        &nbsp;&nbsp;&nbsp;&nbsp;);<br>
  1.3 Crie a tabela tweet com os seguintes campos:<br>
      id_tweet int not null primary key auto_increment,<br>
      id_usuario int not null,<br>
      tweet varchar(140) not null,<br>
      data_inclusao datetime default current_timestamp<br>
      &nbsp;&nbsp;&nbsp;&nbsp;> [mysql] CREATE TABLE tweet (<br>
        &nbsp;&nbsp;&nbsp;&nbsp;id_tweet INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;id_usuario INT(11) NOT NULL,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;tweet VARCHAR(140) NOT NULL,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;data_inclusao DATETIME DEFAULT CURRENT_TIMESTAMP<br>
        &nbsp;&nbsp;&nbsp;&nbsp;);<br>
  1.4 Crie a tabela usuarios_seguidores com os seguintes campos:<br>
      id_usuario_seguidor int not null primary key auto_increment,<br>
      id_usuario int not null,<br>
      seguindo_id_usuario int not null,<br>
      data_registro datetime default current_timestamp<br>
      &nbsp;&nbsp;&nbsp;&nbsp;> [mysql] CREATE TABLE usuarios_seguidores (<br>
        &nbsp;&nbsp;&nbsp;&nbsp;id_usuario_seguidor INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;id_usuario INT(11) NOT NULL,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;seguindo_id_usuario INT(11) NOT NULL,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;data_registro DATETIME DEFAULT CURRENT_TIMESTAMP<br>
        &nbsp;&nbsp;&nbsp;&nbsp;);<br>
