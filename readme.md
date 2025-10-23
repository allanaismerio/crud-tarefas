CRUD de Tarefas

Este projeto é uma aplicação simples de gerenciamento de tarefas, desenvolvida em PHP com MySQL.
O objetivo é permitir o cadastro, edição, exclusão e listagem de tarefas de forma prática e intuitiva.

Funcionalidades

Adicionar novas tarefas

Editar tarefas existentes

Excluir tarefas

Listar todas as tarefas cadastradas

Armazenar os dados no banco de dados MySQL

Tecnologias utilizadas

PHP

MySQL

HTML5

CSS3

XAMPP (Apache e MySQL)

Como executar o projeto

Instale o XAMPP no seu computador.

Copie a pasta do projeto para o diretório:

C:\xampp\htdocs\


No navegador, acesse o phpMyAdmin:

http://localhost/phpmyadmin


Crie um banco de dados com o nome:

crud_tarefas


No banco criado, execute o seguinte comando SQL:

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);


Verifique se o arquivo db.php está configurado com as credenciais corretas:

$conn = new mysqli("localhost", "root", "", "crud_tarefas");


Inicie o Apache e o MySQL no XAMPP.

Acesse o projeto pelo navegador:

http://localhost/crud_tarefas/

Estrutura do projeto
crud_tarefas/
│
├── add.php          # Página para adicionar novas tarefas
├── edit.php         # Página para editar tarefas
├── delete.php       # Página para excluir tarefas
├── db.php           # Conexão com o banco de dados
├── index.php        # Página principal com a lista de tarefas
├── style.css        # Arquivo de estilo da aplicação
└── readme.md        # Documentação do projeto

Possíveis melhorias

Implementar busca por tarefas

Adicionar opção de marcar tarefa como concluída

Criar layout responsivo para dispositivos móveis

Adicionar modo escuro

Autora

Allana Ismério
Estudante de Análise e Desenvolvimento de Sistemas
Este projeto foi desenvolvido com o objetivo de colocar em prática os conhecimentos adquiridos em PHP, MySQL e front-end.
