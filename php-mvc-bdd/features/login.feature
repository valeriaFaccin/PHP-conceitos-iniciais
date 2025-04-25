# language: pt
  Funcionalidade: Realizar login
    Eu, como instrutor,
    Quero realizar login;
    Para poder listar, cadastrar ou excluir cursos e formações.

  @unidade
  Cenário: Realizar login
    Dado que estou na página "/login"
    Quando eu preencho "email" com "email@example.com"
    E preencho "senha" com "123456"
    Então devo ser direcionado para a página "/listarcursos"

  @unidade
  Cenário: Falha ao realizar login
    Dado que estou na página "/login"
    Quando eu não preencho "email" com "email@example.com"
    E não preencho "senha" com "123456"
    Então não devo ser direcionado para a página "/listarcursos"
    E devo receber a mensagem "Usuário e/ou senha incorretos"

  # they do not have 'or', for some unknown reason