#language: pt
  Funcionalidade: Excluir Formações
    Eu, como instrutor;
    Quero poder excluir uma formação;
    Para poder organizar minha lista de formações.

  @e2e
  Cenario: Excluir Formação existente
    Dado que eu estou em "/login";
    E preencho "email" com "email@example.com";
    E preecho "senha" com "123456";
    E pressiono "Fazer login";
    E sigo o link "Formações";
    Quando pressiono "excluir";
    Então devo ver "Formação excluida com sucesso".
