<?php

/*Para padronizar o nome das Rotas, Função dos Controllers e Views foi utilizada a seguinte convenção
1- O verbo (cadastrar, listar, editar) está no Presente do Indicativo.
2- Sempre que possivel é utilizado a 3º pessoa Masculino,  exemplo: lista, cadastro, apaga.
3- A função do controller corespondente também segue esse padrão, exemplo ControllerAluno@lista ; 
*/
//######################## HOME, LOGIN
Auth::routes(['verify' => true]);
Route::get('/home', 'ControllerHome@index');
Route::get('/', 'ControllerHome@index');
Route::get('/logout', 'ControllerLogin@logout');

//######################## aluno 
Route::get('/lista-aluno','ControllerAluno@lista');
Route::view('/novo-aluno','aluno.cadastro-aluno');
Route::post('/cadastro-aluno', 'ControllerAluno@cadastro');
Route::post('/edita-aluno/', 'ControllerAluno@edita');
Route::post('/atualiza-aluno', 'ControllerAluno@atualiza');
Route::post('/apaga-aluno/', 'ControllerAluno@apaga');

//######################## professor
Route::get('/lista-professor','ControllerProfessor@lista');
Route::view('/novo-professor','professor.cadastro-professor');
Route::post('/cadastro-professor', 'ControllerProfessor@cadastro');
Route::post('/edita-professor', 'ControllerProfessor@edita');
Route::post('/atualiza-professor', 'ControllerProfessor@atualiza');
Route::post('/apaga-professor', 'ControllerProfessor@apaga');

//######################## Disciplina 
Route::get('/lista-disciplina','ControllerDisciplina@lista');
Route::view('/novo-disciplina','disciplina.cadastro-disciplina');
Route::post('/cadastro-disciplina', 'ControllerDisciplina@cadastro');
Route::post('/edita-disciplina', 'ControllerDisciplina@edita');
Route::post('/atualiza-disciplina', 'ControllerDisciplina@atualiza');
Route::post('/apaga-disciplina', 'ControllerDisciplina@apaga');

//######################## Turma 
Route::get('/lista-turma','ControllerTurma@lista');
Route::view('/novo-turma','turma.cadastro-turma');
Route::post('/cadastro-turma', 'ControllerTurma@cadastro');
Route::post('/edita-turma/', 'ControllerTurma@edita');
Route::post('/atualiza-turma', 'ControllerTurma@atualiza');
Route::post('/apaga-turma/', 'ControllerTurma@apaga');

//######################## Disciplinas Lecionadas 
Route::get('/lista-lecionada','ControllerLecionada@lista');
Route::get('/novo-lecionada','ControllerLecionada@listaParaCadastro');
Route::post('/cadastro-lecionada', 'ControllerLecionada@cadastro');
Route::post('/edita-lecionada/', 'ControllerLecionada@edita');
Route::post('/atualiza-lecionada', 'ControllerLecionada@atualiza');
Route::post('/apaga-lecionada', 'ControllerLecionada@apaga');

//######################## Matricula 
Route::get('/lista-matricula','ControllerMatricula@lista');
Route::get('/novo-matricula','ControllerMatricula@listaParaCadastro');
Route::post('/cadastro-matricula', 'ControllerMatricula@cadastro');
Route::post('/edita-matricula', 'ControllerMatricula@edita');
Route::post('/atualiza-matricula', 'ControllerMatricula@atualiza');
Route::post('/apaga-matricula', 'ControllerMatricula@apaga');

//######################## Nota 
Route::get('/filtro-busca-nota','ControllerNota@filtro_busca');
Route::post('/busca-nota','ControllerNota@busca_nota');
Route::post('/salva-nota','ControllerNota@salva_nota');

//######################## Relatorio e boletim
Route::view('/notas-turma', 'relatorio.notas-turma');
Route::get('/boletim-individual','ControllerRelatorio@lista_aluno');
Route::post('/gera-boletim-individual','ControllerRelatorio@gera_boletim');

//######################## Cadastro de Usuário
Route::get('/lista-usuario','ControllerUser@lista');
Route::view('/novo-usuario','usuario.cadastro-usuario');
Route::post('/cadastro-usuario', 'ControllerUser@cadastro');
Route::post('/edita-usuario/', 'ControllerUser@edita');
Route::post('/atualiza-usuario', 'ControllerUser@atualiza');
Route::post('/apaga-usuario/', 'ControllerUser@apaga');
?>

