# CRUD de Tarefas em PHP

Um sistema simples de Gerenciamento de Tarefas (To-Do List) que implementa as quatro operações básicas do banco de dados (CRUD: Create, Read, Update, Delete).

Este projeto utiliza PHP procedural com um banco de dados MySQL para o back-end e HTML/CSS puro para o front-end. É um ótimo projeto para demonstrar habilidades fundamentais em desenvolvimento web.

## Funcionalidades

* [cite_start]**Create (Criar):** Adicionar novas tarefas com título e descrição.
* [cite_start]**Read (Ler):** Listar todas as tarefas existentes em uma tabela, ordenadas da mais recente para a mais antiga.
* [cite_start]**Update (Atualizar):** Editar o título e a descrição de uma tarefa existente.
* [cite_start]**Delete (Excluir):** Remover uma tarefa do banco de dados [cite: 9][cite_start], com uma confirmação em JavaScript.

## Tecnologias Utilizadas

* **Back-end:**
    * [cite_start]**PHP:** Utilizado para toda a lógica de servidor e processamento dos dados[cite: 2, 7, 12].
    * **MySQL:** Banco de dados relacional para armazenar as tarefas.
* **Front-end:**
    * [cite_start]**HTML5:** Para a estrutura das páginas (formulários  [cite_start]e tabelas ).
    * [cite_start]**CSS3:** Para a estilização completa, incluindo layouts com Flexbox [cite: 41][cite_start], gradientes  [cite_start]e efeitos de `:hover`[cite: 32].
    * [cite_start]**JavaScript (Vanilla):** Usado para a caixa de diálogo de confirmação (`window.confirm`).

## Estrutura dos Arquivos
/ ├── db.php # Configuração e conexão com o banco de dados MySQL 
├── index.php # Página principal, lista todas as tarefas (Read) 
├── add.php # Formulário para adicionar nova tarefa (Create) 
├── edit.php # Formulário para editar uma tarefa (Update) 
├── delete.php # Script que processa a exclusão (Delete) 
└── style.css # Folha de estilos

## ⚙️ Como Executar o Projeto

Para executar este projeto localmente, você precisará de um ambiente de servidor (como XAMPP, WAMP ou MAMP).

### Pré-requisitos

1.  Um servidor web (ex: Apache)
2.  PHP
3.  Um SGBD MySQL (ex: MariaDB)

### 1. Configuração do Banco de Dados

1.  Inicie seu servidor Apache e MySQL.
2.  Acesse o `phpMyAdmin` (ou seu cliente MySQL preferido).
3.  Crie um novo banco de dados chamado `tarefas_db` [cite: 7] (conforme `db.php`).
4.  Execute o seguinte comando SQL para criar a tabela `tarefas`:

    ```sql
    CREATE TABLE tarefas (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(255) NOT NULL,
        descricao TEXT,
        data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

### 2. Instalação

1.  Clone este repositório ou baixe os arquivos para a pasta principal do seu servidor web (ex: `C:\xampp\htdocs\crud-tarefas`).
2.  Verifique se os dados de conexão em `db.php` (`$servername`, `$username`, `$password`) estão corretos para o seu ambiente local[cite: 7].

### 3. Acesso

Abra seu navegador e acesse: `http://localhost/crud-tarefas`
