# language: pt
  Funcionalidade: Cadastro de formações
    Eu, como instrutor,
    Quero cadastrar formações
    Para organizar meus cursos.

  Regras:
  - Formação precisa ter descrição;
  - Descrição precisa ter no mínimo duas palavras.

  @unidade
  Cenário: Cadastro de formação com uma palavra
    Quando eu tentar criar uma formação com a descrição "PHP";
    Então eu vejo a seguinte mensagem de erro: "Descrição precisa ter no mínimo duas palavras".

  @unidade
  Cenario: Cadastro de formação válida
    Quando eu tentar criar uma formação com a descrição "PHP na Web";
    Entao eu devo ter uma formação criada com a descrição "PHP na Web".

  @integracao
  Cenário: Cadastro de formação válida deve ser salva no banco
    Dado que estou conectado ao banco de dados;
    E o banco está em memória;
    Quando tento criar uma nova formação válida;
    E com a descrição "PHP na Web";
    Então se eu buscar no banco devo encontrar essa formação.

  @integracao
  Cenario: Cadastro de formação invalida
    Dado que estou contectado ao banco de dados;
    E o banco não está em memória
    Quando eu tento criar uma nova formação válida;
    E com a descrição "PHP na Web";
    Então se eu buscar no banco não devo encontrar essa formação

#  /* @media (max-width: 600px) {that no one will hear
#  .navbar-carona-content {
#  flex-direction: column;
#  } I do not think it is supposed to go this way
#  .navbar-carona-filter {
#  flex-direction: column-reverse;
#  } It does not work, nothing works and you are a worthless existence
#  } */// php vendor/bin/doctrine orm:schema-tool:update -f