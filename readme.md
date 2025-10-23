CRUD de Tarefas

Aplicação simples de gerenciamento de tarefas desenvolvida em PHP com MySQL.
Permite criar, editar, excluir e listar tarefas de forma prática e intuitiva.

🧩 Funcionalidades

Adicionar novas tarefas

Editar tarefas existentes

Excluir tarefas

Listar todas as tarefas cadastradas

Armazenamento de dados no banco MySQL

🛠️ Tecnologias Utilizadas

PHP

MySQL

HTML5

CSS3

XAMPP (Apache e MySQL)

🚀 Como Executar o Projeto
1. Instalar o XAMPP

Baixe e instale o XAMPP no seu computador.

2. Mover o Projeto

Coloque a pasta do projeto dentro do diretório:

C:\xampp\htdocs\

3. Criar o Banco de Dados

Acesse o phpMyAdmin:

http://localhost/phpmyadmin


Crie um banco de dados com o nome:

crud_tarefas

4. Criar a Tabela

Execute o seguinte comando SQL:

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);

5. Configurar a Conexão

Abra o arquivo db.php e verifique se as credenciais estão corretas:

$conn = new mysqli("localhost", "root", "", "crud_tarefas");

6. Executar o Projeto

Inicie o Apache e o MySQL no painel do XAMPP.
Em seguida, acesse no navegador:

http://localhost/crud_tarefas/

📂 Estrutura do Projeto
crud_tarefas/
│
├── add.php          # Adiciona novas tarefas
├── edit.php         # Edita tarefas existentes
├── delete.php       # Exclui tarefas
├── db.php           # Conexão com o banco de dados
├── index.php        # Página principal (lista de tarefas)
├── style.css        # Estilos do site
└── readme.md        # Documentação do projeto

💡 Melhorias Futuras

Implementar busca por tarefas

Adicionar opção de marcar como concluída

Criar layout responsivo para dispositivos móveis

Adicionar modo escuro

👩‍💻 Autora

Allana Ismério
Estudante de Análise e Desenvolvimento de Sistemas
Projeto desenvolvido para prática em PHP, MySQL e Front-End.
