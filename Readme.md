# Sistema de Biblioteca

Este é um sistema web simples de gerenciamento de biblioteca desenvolvido com PHP e MySQL, seguindo o padrão de arquitetura MVC (Model-View-Controller). O objetivo principal é permitir o cadastro, listagem, edição e exclusão de livros, autores e usuários.

---

## Objetivos do Projeto

- Criar uma aplicação funcional para fins de estudo e prática em PHP.
- Aplicar os conceitos de organização de código usando o padrão MVC.
- Praticar integração com banco de dados MySQL.
- Preparar ambiente para desenvolvimento local.

---

## O que é o Padrão MVC?

*MVC* é um padrão de arquitetura de software dividido em três camadas principais:

### 1. *Model (Modelo):*
- É responsável pela parte lógica e pela comunicação com o banco de dados.
- Reúne as regras de negócio da aplicação.
- Exemplo: Um arquivo Livro.php na pasta Model que representa as informações e ações relacionadas aos livros.

### 2. *View (Visão):*
- Contém a parte visual da aplicação (HTML, CSS, etc).
- Mostra os dados ao usuário de forma organizada.
- Exemplo: Um arquivo listarLivros.php na pasta View que exibe uma tabela com os livros cadastrados.

### 3. *Controller (Controlador):*
- Recebe as ações do usuário e decide o que fazer com elas.
- Serve como ponte entre o Model e a View.
- Exemplo: Um arquivo LivroController.php que pega os dados do banco (Model) e envia para a tela (View).

*Por que usar MVC?*

- *Organização:* separa responsabilidades, deixando o código mais limpo e compreensível.
- *Manutenção:* facilita a correção de erros e adição de novas funcionalidades.
- *Trabalho em equipe:* permite que pessoas diferentes trabalhem em partes distintas (por exemplo, front-end e back-end).

---

## Como executar o projeto

### Requisitos:

- PHP instalado na sua máquina (versão 7.0 ou superior)
- MySQL ou MariaDB
- Editor de código como VS Code
- Navegador (Chrome, Firefox, etc.)

### Passos:

1. *Abra a pasta App no VS Code*:
   - Esta pasta contém os arquivos principais do projeto.

2. *Configure a conexão com o banco de dados*:
   - No arquivo de configuração (ex: config.php ou dentro do Model), edite os dados de acesso ao MySQL:
     php
     $host = 'localhost';
     $dbname = 'biblioteca';
     $user = 'root';
     $pass = '';
     

3. *Inicie o servidor PHP pelo terminal*:
   - Com o terminal aberto na pasta App, digite:
     bash
     php -S localhost:8000
     

4. *Acesse no navegador*:
   - Vá até o endereço:
     [http://localhost:8000](http://localhost:8000)

Se estiver tudo certo, a tela inicial da sua aplicação deverá aparecer!

---

## Estrutura do Projeto
App/ │ ├── Controller/ │   └── LivroController.php │ ├── Model/ │   └── Livro.php │ ├── View/ │   └── listarLivros.php │ ├── config/ │   └── config.php │ ├── public/ │   └── index.php │ └── README.md

---

## Contribuição

Este projeto foi desenvolvido como atividade escolar para praticar conceitos de programação web com PHP e MySQL.

---

## Autor

[Vitória Guarnieri]  
Turma: PWIII-3DS
Professor(a): [thiagotas]