# CRUD de Tarefas (PHP + MySQL)

Este é um **sistema web simples de gerenciamento de tarefas** (CRUD) feito com PHP e MySQL.  
Permite **adicionar, editar, excluir e visualizar tarefas** em um layout moderno e minimalista.

---

## Tecnologias utilizadas

- **PHP** – Lógica do backend  
- **MySQL / MariaDB** – Banco de dados  
- **HTML / CSS** – Estrutura e estilo da página  
- **XAMPP** – Servidor local para PHP e MySQL  

---

## Funcionalidades

- ✅ Adicionar tarefas  
- ✅ Editar tarefas existentes  
- ✅ Excluir tarefas  
- ✅ Listar tarefas com ID, título, descrição e data de criação  

---

## Como rodar o projeto

1. Instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html)  
2. Copie a pasta do projeto para:  
C:\xampp\htdocs\crud_tarefas

3. Inicie o **Apache** e o **MySQL** no XAMPP  
4. Crie o banco de dados no MySQL (`tarefas_db`) com a tabela `tarefas`  
5. Abra no navegador:  


http://localhost/crud_tarefas/index.php
crud_tarefas/

## Estrutura de arquivos
├─ index.php # Lista de tarefas
├─ add.php # Adicionar tarefa
├─ edit.php # Editar tarefa
├─ delete.php # Excluir tarefa
├─ db.php # Conexão com o banco de dados
├─ style.css # Estilo da página
└─ README.md # Este arquivo