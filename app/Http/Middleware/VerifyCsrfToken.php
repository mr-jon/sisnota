<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "submit",
        "cadastro-aluno",
        "cadastro-professor",
        "cadastro-avaliacao",
        "cadastro-disciplina",
        "cadastro-turma",
        "cadastro-matricula",
        "edita-professor",
        "atualiza-professor",
        "apaga-professor",
        "gera-pdf",
        "edita-aluno",
        "atualiza-aluno",
        "apaga-aluno",
        "edita-turma",
        "atualiza-turma",
        "apaga-turma",
        "edita-disciplina",
        "atualiza-disciplina",
        "apaga-disciplina",
        "edita-lecionada",
        "atualiza-lecionada",
        "apaga-lecionada",
        "cadastro-lecionada",
        "edita-matricula",
        "atualiza-matricula",
        "apaga-matricula",
        "cadastro-matricula",
        "busca-nota",
        "salva-nota",
        "cadastro-usuario",
        "edita-usuario",
        "apaga-usuario",
        "atualiza-usuario",
        "gera-boletim-individual",
    ];
}
